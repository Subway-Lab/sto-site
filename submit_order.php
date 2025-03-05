<?php
// Включаем вывод ошибок (только для отладки)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Подключение к базе данных через JAWSDB_URL
$db_url = parse_url(getenv("JAWSDB_URL"));

// Извлекаем данные из строки подключения
$servername = $db_url['host']; // Хост базы данных
$username = $db_url['user'];   // Имя пользователя
$password = $db_url['pass'];   // Пароль
$dbname = ltrim($db_url['path'], '/'); // Имя базы данных (убираем первый символ '/')
$port = $db_url['port'] ?? 3306; // Порт (по умолчанию 3306 для MySQL)

// Создаем подключение к базе данных
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Проверяем подключение
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Обработка POST-запроса
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы для таблицы orders
    $last_name  = $conn->real_escape_string($_POST['surname']);    // Фамилия
    $first_name = $conn->real_escape_string($_POST['name']);       // Имя
    $patronymic = $conn->real_escape_string($_POST['patronymic']); // Отчество
    $phone      = $conn->real_escape_string($_POST['phone']);      // Телефон
    $car_model  = $conn->real_escape_string($_POST['car_model']);  // Модель автомобиля
    $car_number = $conn->real_escape_string($_POST['car_number']); // Регистрационный знак
    
    // Получаем итоговую сумму из скрытого поля формы
    $total_price = (int)$_POST['total_price'];  // Преобразуем к целому числу

    // Генерация текущей даты и времени
    $date = date("Y-m-d H:i:s");
    
    // Вставка данных в таблицу orders
    $sql_orders = "INSERT INTO orders (surname, name, patronymic, phone, car_model, car_number, services_total, order_date) 
                   VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt_orders = $conn->prepare($sql_orders);
    if (!$stmt_orders) {
        die("Ошибка подготовки запроса для orders: " . $conn->error);
    }
    
    $stmt_orders->bind_param("ssssssis", $last_name, $first_name, $patronymic, $phone, $car_model, $car_number, $total_price, $date);
    if (!$stmt_orders->execute()) {
        die("Ошибка выполнения запроса для orders: " . $stmt_orders->error);
    }

    // Получаем id созданного заказа
    $order_id = $conn->insert_id;

    // Обработка и вставка данных для таблицы list_of_work
    $service_count = isset($_POST['service_count']) ? (int)$_POST['service_count'] : 0;
    $maxServices = 500;
    $services = [];

    // Сбор данных об услугах
    for ($i = 1; $i <= $maxServices; $i++) {
        if (isset($_POST["service{$i}_price"]) && $_POST["service{$i}_price"] > 0) {
            $services[] = [
                'name'      => $conn->real_escape_string($_POST["service{$i}_name"] ?? ''),
                'section'   => $conn->real_escape_string($_POST["service{$i}_section"] ?? ''),
                'service_id'=> (int)$_POST["service{$i}_service_id"] ?? 0,
                'price'     => (int)$_POST["service{$i}_price"] ?? 0,
            ];
        }
    }
    
    // Вставка данных для каждой услуги
    foreach ($services as $service) {
        if ($service['price'] > 0) { // Проверяем, чтобы цена была больше 0
            $sql_services = "INSERT INTO list_of_work (order_id, service_id, name_work, price, section, full_work) 
                             VALUES (?, ?, ?, ?, ?, ?)";
                             
            $stmt_services = $conn->prepare($sql_services);
            
            if ($stmt_services === false) {
                die("Ошибка подготовки запроса для list_of_work: " . $conn->error);
            }
    
            $full_work = $service['name'] . " " . $service['price'] . " руб."; // Формируем полное описание работы
            $stmt_services->bind_param("iissss", $order_id, $service['service_id'], $service['name'], $service['price'], $service['section'], $full_work);
    
            if (!$stmt_services->execute()) {
                die("Ошибка выполнения запроса для list_of_work: " . $stmt_services->error);
            }
            
            $stmt_services->close();
        }
    }
    
    // Перенаправляем на страницу подтверждения с ID заказа
    header("Location: order_confirmation.php?id=" . $order_id);
    exit;
}

// Закрываем соединение с базой данных
$conn->close();
?>