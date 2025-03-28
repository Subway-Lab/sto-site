<?php
// NOTE: Проверка авторизации пользователя
require_once('auth_check.php');
?>

<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="key words">
        <meta name="description" content="description of the page SEO">
        <title> STANDOX </title>
        <link rel="icon" href="/filles/Favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <header>
            <h1> STANDOX </h1>
            <nav class="menu">
                <ul>
                    <li><a href="admin_orders.php" class="menu_link"> база данных </a></li>
                    <li><a href="logout.php" class="menu_link"> выйти </a></li>
                </ul>
            </nav>
        </header>

        <div class="title">
            <h2> Создание нового заказ-наряда </h2>
            <h3> 1. Данные о заказчике: </h3>
        </div>

        <div class="form">
            <form id="orderForm" action="submit_order.php" method="POST">

                <div class="customer">
                    <label for="surname" class="sr-only"> Фамилия </label>
                    <input class="user_input" id="surname" type="text" name="surname" placeholder="Фамилия *" pattern="^[а-яА-ЯёЁ\-]+$" title="Укажите Фамилию" required>

                    <label for="name" class="sr-only"> Имя </label>
                    <input class="user_input" id="name" type="text" name="name" placeholder="Имя *" pattern="^[а-яА-ЯёЁ\-]+$" title="Укажите Имя" required>

                    <div class="error-message" data-for="surname"> Допустимые символы: буквы кириллицы, знак тире </div>
                    <div class="error-message" data-for="name"> Допустимые символы: буквы кириллицы, знак тире </div>

                    <label for="patronymic" class="sr-only"> Отчество </label>
                    <input class="user_input" id="patronymic" type="text" name="patronymic" placeholder="Отчество" pattern="^[а-яА-ЯёЁ\s\-]+$" title="Укажите Отчествo">

                    <label for="phone" class="sr-only"> Контактный телефон </label>
                    <input class="user_input" id="phone" type="tel" name="phone" placeholder="Номер телефона *" pattern="^[0-9\+\-\s]+$" title="Укажите Номер телефона" required>

                    <div class="error-message" data-for="patronymic"> Допустимые символы: буквы кириллицы, знак тире, пробел </div>
                    <div class="error-message" data-for="phone"> Допустимые символы: цифры, знак "+", тире, пробел </div>

                    <label for="car_model" class="sr-only"> Марка автомобиля </label>
                    <input class="user_input" id="car_model" type="text" name="car_model" placeholder="Марка автомобиля *" pattern="^[а-яА-ЯёЁa-zA-Z0-9\-\s]+$" title="Укажите Марку автомобиля" required>

                    <label for="car_number" class="sr-only"> Регистрационный знак </label>
                    <input class="user_input" id="car_number" type="text" name="car_number" placeholder="Регистрационный знак *" pattern="^[а-яА-ЯёЁa-zA-Z0-9\-\s]+$" title="Укажите Гос. номер" required>

                    <div class="error-message" data-for="car_model"> Допустимые символы: буквы кириллицы, латиницы, знак тире, пробел </div>
                    <div class="error-message" data-for="car_number"> Допустимые символы: буквы кириллицы, латиницы, знак тире, пробел </div>
                </div>
                <p class="asterisk"> * поля обязательные для заполнения </p>

                <div class="title">
                    <h4> 2. Наименование выполняемых работ: </h4>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Бампер передний </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service303" data-service-name="Снятие, установка переднего бампера">
                                <label for="service303" class="checkbox-btn"> Снятие, установка </label>
                                <input type="number" class="service-cost" id="service303-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service303_name" id="service303-name" value="Снятие, установка переднего бампера">
                                <input type="hidden" name="service303_section" value="work">
                                <input type="hidden" name="service303_service_id" value="303">
                                <input type="hidden" name="service303_price" id="service303-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service306" data-service-name=" Мелкий ремонт переднего бампера">
                                <label for="service306" class="checkbox-btn"> Мелкий ремонт </label>
                                <input type="number" class="service-cost" id="service306-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service306_name" id="service306-name" value=" Мелкий ремонт переднего бампера">
                                <input type="hidden" name="service306_section" value="work">
                                <input type="hidden" name="service306_service_id" value="306">
                                <input type="hidden" name="service306_price" id="service306-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service309" data-service-name=" Ремонт бампера переднего без удаления лакокрасочного покрытия">
                                <label for="service309" class="checkbox-btn"> Ремонт без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service309-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service309_name" id="service309-name" value=" Ремонт бампера переднего без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service309_section" value="work">
                                <input type="hidden" name="service309_service_id" value="309">
                                <input type="hidden" name="service309_price" id="service309-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service312" data-service-name=" Ремонт бампера переднего с удалением лакокрасочного покрытия">
                                <label for="service312" class="checkbox-btn"> Ремонт с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service312-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service312_name" id="service312-name" value=" Ремонт бампера переднего с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service312_section" value="work">
                                <input type="hidden" name="service312_service_id" value="312">
                                <input type="hidden" name="service312_price" id="service312-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service315" data-service-name=" Изготовление отверстий в переднем бампере под сонары или омыватели фар">
                                <label for="service315" class="checkbox-btn"> Изготовление отверстий под сонары или омыватели фар </label>
                                <input type="number" class="service-cost" id="service315-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service315_name" id="service315-name" value=" Изготовление отверстий в переднем бампере под сонары или омыватели фар">
                                <input type="hidden" name="service315_section" value="work">
                                <input type="hidden" name="service315_service_id" value="315">
                                <input type="hidden" name="service315_price" id="service315-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Решетка радиатора </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service603" data-service-name=" Замена решетки радиатора">
                                <label for="service603" class="checkbox-btn"> Замена </label>
                                <input type="number" class="service-cost" id="service603-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service603_name" id="service603-name" value=" Замена решетки радиатора ">
                                <input type="hidden" name="service603_section" value="work">
                                <input type="hidden" name="service603_service_id" value="603">
                                <input type="hidden" name="service603_price" id="service603-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service606" data-service-name="Ремонт решетки радиатора">
                                <label for="service606" class="checkbox-btn"> Ремонт </label>
                                <input type="number" class="service-cost" id="service606-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service606_name" id="service606-name" value=" Ремонт решетки радиатора">
                                <input type="hidden" name="service606_section" value="work">
                                <input type="hidden" name="service606_service_id" value="606">
                                <input type="hidden" name="service606_price" id="service606-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Капот </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service903" data-service-name="Снятие, установка капота">
                                <label for="service903" class="checkbox-btn"> Снятие, установка </label>
                                <input type="number" class="service-cost" id="service903-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service903_name" id="service903-name" value="Снятие, установка капота">
                                <input type="hidden" name="service903_section" value="work">
                                <input type="hidden" name="service903_service_id" value="903">
                                <input type="hidden" name="service903_price" id="service903-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service906" data-service-name="Замена капота">
                                <label for="service906" class="checkbox-btn"> Замена </label>
                                <input type="number" class="service-cost" id="service906-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service906_name" id="service906-name" value="Замена капота">
                                <input type="hidden" name="service906_section" value="work">
                                <input type="hidden" name="service906_service_id" value="906">
                                <input type="hidden" name="service906_price" id="service906-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service909" data-service-name="Ремонт капота без удаления лакокрасочного покрытия">
                                <label for="service909" class="checkbox-btn"> Ремонт без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service909-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service909_name" id="service909-name" value="Ремонт капота без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service909_section" value="work">
                                <input type="hidden" name="service909_service_id" value="909">
                                <input type="hidden" name="service909_price" id="service909-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service912" data-service-name="Ремонт капота с удалением лакокрасочного покрытия">
                                <label for="service912" class="checkbox-btn"> Ремонт с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service912-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service912_name" id="service912-name" value="Ремонт капота с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service912_section" value="work">
                                <input type="hidden" name="service912_service_id" value="912">
                                <input type="hidden" name="service912_price" id="service912-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service915" data-service-name="Замена шарнира капота левого">
                                <label for="service915" class="checkbox-btn"> Замена шарнира левого </label>
                                <input type="number" class="service-cost" id="service915-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service915_name" id="service915-name" value="Замена шарнира капота левого">
                                <input type="hidden" name="service915_section" value="work">
                                <input type="hidden" name="service915_service_id" value="915">
                                <input type="hidden" name="service915_price" id="service915-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service918" data-service-name="Замена шарнира капота правого">
                                <label for="service918" class="checkbox-btn"> Замена шарнира правого </label>
                                <input type="number" class="service-cost" id="service918-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service918_name" id="service918-name" value="Замена шарнира капота правого">
                                <input type="hidden" name="service918_section" value="work">
                                <input type="hidden" name="service918_service_id" value="918">
                                <input type="hidden" name="service918_price" id="service918-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service921" data-service-name="Замена обоих шарниров капота">
                                <label for="service921" class="checkbox-btn"> Замена обоих шарниров капота </label>
                                <input type="number" class="service-cost" id="service921-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service921_name" id="service921-name" value="Замена обоих шарниров капота">
                                <input type="hidden" name="service921_section" value="work">
                                <input type="hidden" name="service921_service_id" value="921">
                                <input type="hidden" name="service921_price" id="service921-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Моторный отсек </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1203" data-service-name="Замена передней панели радиатора">
                                <label for="service1203" class="checkbox-btn"> Замена передней панели радиатора </label>
                                <input type="number" class="service-cost" id="service1203-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1203_name" id="service1203-name" value="Замена передней панели радиатора">
                                <input type="hidden" name="service1203_section" value="work">
                                <input type="hidden" name="service1203_service_id" value="1203">
                                <input type="hidden" name="service1203_price" id="service1203-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1206" data-service-name="Замена передней панели радиатора с частями лонжеронов">
                                <label for="service1206" class="checkbox-btn"> Замена передней панели радиатора с частями лонжеронов </label>
                                <input type="number" class="service-cost" id="service1206-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1206_name" id="service1206-name" value="Замена передней панели радиатора с частями лонжеронов">
                                <input type="hidden" name="service1206_section" value="work">
                                <input type="hidden" name="service1206_service_id" value="1206">
                                <input type="hidden" name="service1206_price" id="service1206-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1209" data-service-name="Замена лонжерона переднего левого">
                                <label for="service1209" class="checkbox-btn"> Замена лонжерона переднего левого </label>
                                <input type="number" class="service-cost" id="service1209-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1209_name" id="service1209-name" value="Замена лонжерона переднего левого">
                                <input type="hidden" name="service1209_section" value="work">
                                <input type="hidden" name="service1209_service_id" value="1209">
                                <input type="hidden" name="service1209_price" id="service1209-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1212" data-service-name="Замена лонжерона переднего правого">
                                <label for="service1212" class="checkbox-btn"> Замена лонжерона переднего правого </label>
                                <input type="number" class="service-cost" id="service1212-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1212_name" id="service1212-name" value="Замена лонжерона переднего правого">
                                <input type="hidden" name="service1212_section" value="work">
                                <input type="hidden" name="service1212_service_id" value="1212">
                                <input type="hidden" name="service1212_price" id="service1212-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1215" data-service-name="Ремонт лонжерона переднего левого">
                                <label for="service1215" class="checkbox-btn"> Ремонт лонжерона переднего левого </label>
                                <input type="number" class="service-cost" id="service1215-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1215_name" id="service1215-name" value="Ремонт лонжерона переднего левого">
                                <input type="hidden" name="service1215_section" value="work">
                                <input type="hidden" name="service1215_service_id" value="1215">
                                <input type="hidden" name="service1215_price" id="service1215-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1218" data-service-name="Ремонт лонжерона переднего правого">
                                <label for="service1218" class="checkbox-btn"> Ремонт лонжерона переднего правого </label>
                                <input type="number" class="service-cost" id="service1218-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1218_name" id="service1218-name" value="Ремонт лонжерона переднего правого">
                                <input type="hidden" name="service1218_section" value="work">
                                <input type="hidden" name="service1218_service_id" value="1218">
                                <input type="hidden" name="service1218_price" id="service1218-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1221" data-service-name="Замена моторного щита">
                                <label for="service1221" class="checkbox-btn"> Замена моторного щита </label>
                                <input type="number" class="service-cost" id="service1221-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1221_name" id="service1221-name" value="Замена моторного щита">
                                <input type="hidden" name="service1221_section" value="work">
                                <input type="hidden" name="service1221_service_id" value="1221">
                                <input type="hidden" name="service1221_price" id="service1221-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1224" data-service-name="Ремонт моторного щита">
                                <label for="service1224" class="checkbox-btn"> Ремонт моторного щита </label>
                                <input type="number" class="service-cost" id="service1224-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1224_name" id="service1224-name" value="Ремонт моторного щита">
                                <input type="hidden" name="service1224_section" value="work">
                                <input type="hidden" name="service1224_service_id" value="1224">
                                <input type="hidden" name="service1224_price" id="service1224-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1227" data-service-name="Замена нижнего бруса">
                                <label for="service1227" class="checkbox-btn"> Замена нижнего бруса </label>
                                <input type="number" class="service-cost" id="service1227-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1227_name" id="service1227-name" value="Замена нижнего бруса">
                                <input type="hidden" name="service1227_section" value="work">
                                <input type="hidden" name="service1227_service_id" value="1227">
                                <input type="hidden" name="service1227_price" id="service1227-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Элементы кузова </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1503" data-service-name="Ремонт порога двери левого">
                                <label for="service1503" class="checkbox-btn"> Ремонт порога двери левого </label>
                                <input type="number" class="service-cost" id="service1503-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1503_name" id="service1503-name" value="Ремонт порога двери левого">
                                <input type="hidden" name="service1503_section" value="work">
                                <input type="hidden" name="service1503_service_id" value="1503">
                                <input type="hidden" name="service1503_price" id="service1503-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1506" data-service-name="Ремонт порога двери правого">
                                <label for="service1506" class="checkbox-btn"> Ремонт порога двери правого  </label>
                                <input type="number" class="service-cost" id="service1506-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1506_name" id="service1506-name" value="Ремонт порога двери правого" >
                                <input type="hidden" name="service1506_section" value="work">
                                <input type="hidden" name="service1506_service_id" value="1506">
                                <input type="hidden" name="service1506_price" id="service1506-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1509" data-service-name="Замена порога двери левого">
                                <label for="service1509" class="checkbox-btn"> Замена порога двери левого </label>
                                <input type="number" class="service-cost" id="service1509-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1509_name" id="service1509-name" value="Замена порога двери левого">
                                <input type="hidden" name="service1509_section" value="work">
                                <input type="hidden" name="service1509_service_id" value="1509">
                                <input type="hidden" name="service1509_price" id="service1509-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1512" data-service-name="Замена порога двери правого">
                                <label for="service1512" class="checkbox-btn"> Замена порога двери правого </label>
                                <input type="number" class="service-cost" id="service1512-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1512_name" id="service1512-name" value="Замена порога двери правого">
                                <input type="hidden" name="service1512_section" value="work">
                                <input type="hidden" name="service1512_service_id" value="1512">
                                <input type="hidden" name="service1512_price" id="service1512-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1515" data-service-name="Замена усилителя порога левого">
                                <label for="service1515" class="checkbox-btn"> Замена усилителя порога левого </label>
                                <input type="number" class="service-cost" id="service1515-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1515_name" id="service1515-name" value="Замена усилителя порога левого">
                                <input type="hidden" name="service1515_section" value="work">
                                <input type="hidden" name="service1515_service_id" value="1515">
                                <input type="hidden" name="service1515_price" id="service1515-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1518" data-service-name="Замена усилителя порога правого">
                                <label for="service1518" class="checkbox-btn"> Замена усилителя порога правого </label>
                                <input type="number" class="service-cost" id="service1518-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1518_name" id="service1518-name" value="Замена усилителя порога правого">
                                <input type="hidden" name="service1518_section" value="work">
                                <input type="hidden" name="service1518_service_id" value="1518">
                                <input type="hidden" name="service1518_price" id="service1518-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1521" data-service-name="Замена средней стойки кузова левой">
                                <label for="service1521" class="checkbox-btn"> Замена средней стойки кузова левой </label>
                                <input type="number" class="service-cost" id="service1521-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1521_name" id="service1521-name" value="Замена средней стойки кузова левой">
                                <input type="hidden" name="service1521_section" value="work">
                                <input type="hidden" name="service1521_service_id" value="1521">
                                <input type="hidden" name="service1521_price" id="service1521-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1524" data-service-name="Замена средней стойки кузова правой">
                                <label for="service1524" class="checkbox-btn"> Замена средней стойки кузова правой </label>
                                <input type="number" class="service-cost" id="service1524-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1524_name" id="service1524-name" value="Замена средней стойки кузова правой">
                                <input type="hidden" name="service1524_section" value="work">
                                <input type="hidden" name="service1524_service_id" value="1524">
                                <input type="hidden" name="service1524_price" id="service1524-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1527" data-service-name="Ремонт средней стойки кузова левой">
                                <label for="service1527" class="checkbox-btn"> Ремонт средней стойки кузова левой </label>
                                <input type="number" class="service-cost" id="service1527-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1527_name" id="service1527-name" value=" Ремонт средней стойки кузова левой">
                                <input type="hidden" name="service1527_section" value="work">
                                <input type="hidden" name="service1527_service_id" value="1527">
                                <input type="hidden" name="service1527_price" id="service1527-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1530" data-service-name="Ремонт средней стойки кузова правой">
                                <label for="service1530" class="checkbox-btn"> Ремонт средней стойки кузова правой </label>
                                <input type="number" class="service-cost" id="service1530-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1530_name" id="service1530-name" value="Ремонт средней стойки кузова правой">
                                <input type="hidden" name="service1530_section" value="work">
                                <input type="hidden" name="service1530_service_id" value="1530">
                                <input type="hidden" name="service1530_price" id="service1530-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1533" data-service-name="Замена средней стойки кузова с порогом (левой)">
                                <label for="service1533" class="checkbox-btn"> Замена средней стойки кузова с порогом (левой) </label>
                                <input type="number" class="service-cost" id="service1533-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1533_name" id="service1533-name" value="Замена средней стойки кузова с порогом (левой)">
                                <input type="hidden" name="service1533_section" value="work">
                                <input type="hidden" name="service1533_service_id" value="1533">
                                <input type="hidden" name="service1533_price" id="service1533-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1536" data-service-name="Замена средней стойки кузова с порогом (правой)">
                                <label for="service1536" class="checkbox-btn"> Замена средней стойки кузова с порогом (правой) </label>
                                <input type="number" class="service-cost" id="service1536-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1536_name" id="service1536-name" value="Замена средней стойки кузова с порогом (правой)">
                                <input type="hidden" name="service1536_section" value="work">
                                <input type="hidden" name="service1536_service_id" value="1536">
                                <input type="hidden" name="service1536_price" id="service1536-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Крылья передние </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1803" data-service-name="Замена крыла переднего левого">
                                <label for="service1803" class="checkbox-btn"> Замена крыла переднего левого </label>
                                <input type="number" class="service-cost" id="service1803-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1803_name" id="service1803-name" value="Замена крыла переднего левого">
                                <input type="hidden" name="service1803_section" value="work">
                                <input type="hidden" name="service1803_service_id" value="1803">
                                <input type="hidden" name="service1803_price" id="service1803-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1806" data-service-name="Замена крыла переднего правого">
                                <label for="service1806" class="checkbox-btn"> Замена крыла переднего правого </label>
                                <input type="number" class="service-cost" id="service1806-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1806_name" id="service1806-name" value="Замена крыла переднего правого">
                                <input type="hidden" name="service1806_section" value="work">
                                <input type="hidden" name="service1806_service_id" value="1806">
                                <input type="hidden" name="service1806_price" id="service1806-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1809" data-service-name="Ремонт крыла переднего левого">
                                <label for="service1809" class="checkbox-btn"> Ремонт крыла переднего левого </label>
                                <input type="number" class="service-cost" id="service1809-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1809_name" id="service1809-name" value="Ремонт крыла переднего левого">
                                <input type="hidden" name="service1809_section" value="work">
                                <input type="hidden" name="service1809_service_id" value="1809">
                                <input type="hidden" name="service1809_price" id="service1809-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1812" data-service-name="Ремонт крыла переднего правого">
                                <label for="service1812" class="checkbox-btn"> Ремонт крыла переднего правого </label>
                                <input type="number" class="service-cost" id="service1812-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1812_name" id="service1812-name" value="Ремонт крыла переднего правого">
                                <input type="hidden" name="service1812_section" value="work">
                                <input type="hidden" name="service1812_service_id" value="1812">
                                <input type="hidden" name="service1812_price" id="service1812-price-hidden" value="0">
                            </div>

                                <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1815" data-service-name="Ремонт крыла переднего левого без удаления лакокрасочного покрытия">
                                <label for="service1815" class="checkbox-btn"> Ремонт крыла переднего левого без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service1815-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1815_name" id="service1815-name" value="Ремонт крыла переднего левого без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service1815_section" value="work">
                                <input type="hidden" name="service1815_service_id" value="1815">
                                <input type="hidden" name="service1815_price" id="service1815-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1818" data-service-name="Ремонт крыла переднего правого без удаления лакокрасочного покрытия">
                                <label for="service1818" class="checkbox-btn"> Ремонт крыла переднего правого без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service1818-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1818_name" id="service1818-name" value="Ремонт крыла переднего правого без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service1818_section" value="work">
                                <input type="hidden" name="service1818_service_id" value="1818">
                                <input type="hidden" name="service1818_price" id="service1818-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1821" data-service-name="Ремонт крыла переднего левого с удалением лакокрасочного покрытия">
                                <label for="service1821" class="checkbox-btn"> Ремонт крыла переднего левого с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service1821-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1821_name" id="service1821-name" value="Ремонт крыла переднего левого с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service1821_section" value="work">
                                <input type="hidden" name="service1821_service_id" value="1821">
                                <input type="hidden" name="service1821_price" id="service1821-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1824" data-service-name="Ремонт крыла переднего правого с удалением лакокрасочного покрытия">
                                <label for="service1824" class="checkbox-btn"> Ремонт крыла переднего правого с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service1824-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1824_name" id="service1824-name" value="Ремонт крыла переднего правого с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service1824_section" value="work">
                                <input type="hidden" name="service1824_service_id" value="1824">
                                <input type="hidden" name="service1824_price" id="service1824-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1827" data-service-name="Замена брызговика переднего левого (метал)">
                                <label for="service1827" class="checkbox-btn"> Замена брызговика переднего левого (метал) </label>
                                <input type="number" class="service-cost" id="service1827-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1827_name" id="service1827-name" value=" Замена брызговика переднего левого (метал)">
                                <input type="hidden" name="service1827_section" value="work">
                                <input type="hidden" name="service1827_service_id" value="1827">
                                <input type="hidden" name="service1827_price" id="service1827-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1830" data-service-name="Замена брызговика переднего правого (метал)">
                                <label for="service1830" class="checkbox-btn"> Замена брызговика переднего правого (метал) </label>
                                <input type="number" class="service-cost" id="service1830-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1830_name" id="service1830-name" value=" Замена брызговика переднего правого (метал)">
                                <input type="hidden" name="service1830_section" value="work">
                                <input type="hidden" name="service1830_service_id" value="1830">
                                <input type="hidden" name="service1830_price" id="service1830-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1833" data-service-name="Замена усилителя крыла переднего левого">
                                <label for="service1833" class="checkbox-btn"> Замена усилителя крыла переднего левого </label>
                                <input type="number" class="service-cost" id="service1833-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1833_name" id="service1833-name" value="Замена усилителя крыла переднего левого">
                                <input type="hidden" name="service1833_section" value="work">
                                <input type="hidden" name="service1833_service_id" value="1833">
                                <input type="hidden" name="service1833_price" id="service1833-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1836" data-service-name="Замена усилителя крыла переднего правого">
                                <label for="service1836" class="checkbox-btn"> Замена усилителя крыла переднего правого </label>
                                <input type="number" class="service-cost" id="service1836-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1836_name" id="service1836-name" value="Замена усилителя крыла переднего правого">
                                <input type="hidden" name="service1836_section" value="work">
                                <input type="hidden" name="service1836_service_id" value="1836">
                                <input type="hidden" name="service1836_price" id="service1836-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1839" data-service-name="Ремонт усилителя крыла переднего левого">
                                <label for="service1839" class="checkbox-btn"> Ремонт усилителя крыла переднего левого </label>
                                <input type="number" class="service-cost" id="service1839-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1839_name" id="service1839-name" value="Ремонт усилителя крыла переднего левого">
                                <input type="hidden" name="service1839_section" value="work">
                                <input type="hidden" name="service1839_service_id" value="1839">
                                <input type="hidden" name="service1839_price" id="service1839-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service1842" data-service-name="Ремонт усилителя крыла переднего правого">
                                <label for="service1842" class="checkbox-btn"> Ремонт усилителя крыла переднего правого </label>
                                <input type="number" class="service-cost" id="service1842-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service1842_name" id="service1842-name" value="Ремонт усилителя крыла переднего правого">
                                <input type="hidden" name="service1842_section" value="work">
                                <input type="hidden" name="service1842_service_id" value="1842">
                                <input type="hidden" name="service1842_price" id="service1842-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Двери передние </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2103" data-service-name="Снятие установка двери передней левой">
                                <label for="service2103" class="checkbox-btn"> Снятие установка двери передней левой </label>
                                <input type="number" class="service-cost" id="service2103-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2103_name" id="service2103-name" value="Снятие установка двери передней левой">
                                <input type="hidden" name="service2103_section" value="work">
                                <input type="hidden" name="service2103_service_id" value="2103">
                                <input type="hidden" name="service2103_price" id="service2103-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2106" data-service-name="Снятие установка двери передней правой">
                                <label for="service2106" class="checkbox-btn"> Снятие установка двери передней правой </label>
                                <input type="number" class="service-cost" id="service2106-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2106_name" id="service2106-name" value="Снятие установка двери передней правой">
                                <input type="hidden" name="service2106_section" value="work">
                                <input type="hidden" name="service2106_service_id" value="2106">
                                <input type="hidden" name="service2106_price" id="service2106-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2109" data-service-name="Замена двери передней левой">
                                <label for="service2109" class="checkbox-btn"> Замена двери передней левой </label>
                                <input type="number" class="service-cost" id="service2109-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2109_name" id="service2109-name" value="Замена двери передней левой">
                                <input type="hidden" name="service2109_section" value="work">
                                <input type="hidden" name="service2109_service_id" value="2109">
                                <input type="hidden" name="service2109_price" id="service2109-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2112" data-service-name="Замена двери передней правой">
                                <label for="service2112" class="checkbox-btn"> Замена двери передней правой </label>
                                <input type="number" class="service-cost" id="service2112-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2112_name" id="service2112-name" value="Замена двери передней правой">
                                <input type="hidden" name="service2112_section" value="work">
                                <input type="hidden" name="service2112_service_id" value="2112">
                                <input type="hidden" name="service2112_price" id="service2112-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2115" data-service-name="Ремонт двери передней левой">
                                <label for="service2115" class="checkbox-btn"> Ремонт двери передней левой </label>
                                <input type="number" class="service-cost" id="service2115-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2115_name" id="service2115-name" value="Ремонт двери передней левой">
                                <input type="hidden" name="service2115_section" value="work">
                                <input type="hidden" name="service2115_service_id" value="2115">
                                <input type="hidden" name="service2115_price" id="service2115-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2118" data-service-name="Ремонт двери передней правой">
                                <label for="service2118" class="checkbox-btn"> Ремонт двери передней правой </label>
                                <input type="number" class="service-cost" id="service2118-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2118_name" id="service2118-name" value="Ремонт двери передней правой">
                                <input type="hidden" name="service2118_section" value="work">
                                <input type="hidden" name="service2118_service_id" value="2118">
                                <input type="hidden" name="service2118_price" id="service2118-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2121" data-service-name="Ремонт двери передней левой без удаления лакокрасочного покрытия">
                                <label for="service2121" class="checkbox-btn"> Ремонт двери передней левой без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2121-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2121_name" id="service2121-name" value="Ремонт двери передней левой без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service2121_section" value="work">
                                <input type="hidden" name="service2121_service_id" value="2121">
                                <input type="hidden" name="service2121_price" id="service2121-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2124" data-service-name="Ремонт двери передней правой без удаления лакокрасочного покрытия">
                                <label for="service2124" class="checkbox-btn"> Ремонт двери передней правой без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2124-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2124_name" id="service2124-name" value="Ремонт двери передней правой без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service2124_section" value="work">
                                <input type="hidden" name="service2124_service_id" value="2124">
                                <input type="hidden" name="service2124_price" id="service2124-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2127" data-service-name="Ремонт двери передней левой с удалением лакокрасочного покрытия">
                                <label for="service2127" class="checkbox-btn"> Ремонт двери передней левой с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2127-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2127_name" id="service2127-name" value=" Ремонт двери передней левой с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service2127_section" value="work">
                                <input type="hidden" name="service2127_service_id" value="2127">
                                <input type="hidden" name="service2127_price" id="service2127-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2130" data-service-name="Ремонт двери передней правой с удалением лакокрасочного покрытия">
                                <label for="service2130" class="checkbox-btn"> Ремонт двери передней правой с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2130-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2130_name" id="service2130-name" value=" Ремонт двери передней правой с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service2130_section" value="work">
                                <input type="hidden" name="service2130_service_id" value="2130">
                                <input type="hidden" name="service2130_price" id="service2130-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2133" data-service-name="Замена шарниров двери передней левой">
                                <label for="service2133" class="checkbox-btn"> Замена шарниров двери передней левой </label>
                                <input type="number" class="service-cost" id="service2133-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2133_name" id="service2133-name" value="Замена шарниров двери передней левой">
                                <input type="hidden" name="service2133_section" value="work">
                                <input type="hidden" name="service2133_service_id" value="2133">
                                <input type="hidden" name="service2133_price" id="service2133-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2136" data-service-name="Замена шарниров двери передней правой">
                                <label for="service2136" class="checkbox-btn"> Замена шарниров двери передней правой </label>
                                <input type="number" class="service-cost" id="service2136-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2136_name" id="service2136-name" value="Замена шарниров двери передней правой">
                                <input type="hidden" name="service2136_section" value="work">
                                <input type="hidden" name="service2136_service_id" value="2136">
                                <input type="hidden" name="service2136_price" id="service2136-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Двери задние </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2403" data-service-name="Снятие установка двери задней левой">
                                <label for="service2403" class="checkbox-btn"> Снятие установка двери задней левой </label>
                                <input type="number" class="service-cost" id="service2403-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2403_name" id="service2403-name" value="Снятие установка двери задней левой">
                                <input type="hidden" name="service2403_section" value="work">
                                <input type="hidden" name="service2403_service_id" value="2403">
                                <input type="hidden" name="service2403_price" id="service2403-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2406" data-service-name="Снятие установка двери задней правой">
                                <label for="service2406" class="checkbox-btn"> Снятие установка двери задней правой </label>
                                <input type="number" class="service-cost" id="service2406-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2406_name" id="service2406-name" value="Снятие установка двери задней правой">
                                <input type="hidden" name="service2406_section" value="work">
                                <input type="hidden" name="service2406_service_id" value="2406">
                                <input type="hidden" name="service2406_price" id="service2406-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2409" data-service-name="Замена двери задней левой">
                                <label for="service2409" class="checkbox-btn"> Замена двери задней левой </label>
                                <input type="number" class="service-cost" id="service2409-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2409_name" id="service2409-name" value="Замена двери задней левой">
                                <input type="hidden" name="service2409_section" value="work">
                                <input type="hidden" name="service2409_service_id" value="2409">
                                <input type="hidden" name="service2409_price" id="service2409-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2412" data-service-name="Замена двери задней правой">
                                <label for="service2412" class="checkbox-btn"> Замена двери задней правой </label>
                                <input type="number" class="service-cost" id="service2412-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2412_name" id="service2412-name" value="Замена двери задней правой">
                                <input type="hidden" name="service2412_section" value="work">
                                <input type="hidden" name="service2412_service_id" value="2412">
                                <input type="hidden" name="service2412_price" id="service2412-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2415" data-service-name="Ремонт двери задней левой">
                                <label for="service2415" class="checkbox-btn"> Ремонт двери задней левой </label>
                                <input type="number" class="service-cost" id="service2415-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2415_name" id="service2415-name" value="Ремонт двери задней левой">
                                <input type="hidden" name="service2415_section" value="work">
                                <input type="hidden" name="service2415_service_id" value="2415">
                                <input type="hidden" name="service2415_price" id="service2415-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2418" data-service-name="Ремонт двери задней правой">
                                <label for="service2418" class="checkbox-btn"> Ремонт двери задней правой </label>
                                <input type="number" class="service-cost" id="service2418-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2418_name" id="service2418-name" value="Ремонт двери задней правой">
                                <input type="hidden" name="service2418_section" value="work">
                                <input type="hidden" name="service2418_service_id" value="2418">
                                <input type="hidden" name="service2418_price" id="service2418-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2421" data-service-name="Ремонт двери задней левой без удаления лакокрасочного покрытия">
                                <label for="service2421" class="checkbox-btn"> Ремонт двери задней левой без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2421-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2421_name" id="service2421-name" value="Ремонт двери задней левой без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service2421_section" value="work">
                                <input type="hidden" name="service2421_service_id" value="2421">
                                <input type="hidden" name="service2421_price" id="service2421-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2424" data-service-name="Ремонт двери задней правой без удаления лакокрасочного покрытия">
                                <label for="service2424" class="checkbox-btn"> Ремонт двери задней правой без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2424-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2424_name" id="service2424-name" value="Ремонт двери задней правой без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service2424_section" value="work">
                                <input type="hidden" name="service2424_service_id" value="2424">
                                <input type="hidden" name="service2424_price" id="service2424-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2427" data-service-name="Ремонт двери задней левой с удалением лакокрасочного покрытия">
                                <label for="service2427" class="checkbox-btn"> Ремонт двери задней левой с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2427-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2427_name" id="service2427-name" value=" Ремонт двери задней левой с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service2427_section" value="work">
                                <input type="hidden" name="service2427_service_id" value="2427">
                                <input type="hidden" name="service2427_price" id="service2427-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2430" data-service-name="Ремонт двери задней правой с удалением лакокрасочного покрытия">
                                <label for="service2430" class="checkbox-btn"> Ремонт двери задней правой с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2430-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2430_name" id="service2430-name" value=" Ремонт двери задней правой с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service2430_section" value="work">
                                <input type="hidden" name="service2430_service_id" value="2430">
                                <input type="hidden" name="service2430_price" id="service2430-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2433" data-service-name="Замена шарниров двери задней левой">
                                <label for="service2433" class="checkbox-btn"> Замена шарниров двери задней левой </label>
                                <input type="number" class="service-cost" id="service2433-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2433_name" id="service2433-name" value="Замена шарниров двери задней левой">
                                <input type="hidden" name="service2433_section" value="work">
                                <input type="hidden" name="service2433_service_id" value="2433">
                                <input type="hidden" name="service2433_price" id="service2433-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2436" data-service-name="Замена шарниров двери задней правой">
                                <label for="service2436" class="checkbox-btn"> Замена шарниров двери задней правой </label>
                                <input type="number" class="service-cost" id="service2436-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2436_name" id="service2436-name" value="Замена шарниров двери задней правой">
                                <input type="hidden" name="service2436_section" value="work">
                                <input type="hidden" name="service2436_service_id" value="2436">
                                <input type="hidden" name="service2436_price" id="service2436-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Крылья задние </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2703" data-service-name="Замена крыла заднего левого">
                                <label for="service2703" class="checkbox-btn"> Замена крыла заднего левого </label>
                                <input type="number" class="service-cost" id="service2703-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2703_name" id="service2703-name" value="Замена крыла заднего левого">
                                <input type="hidden" name="service2703_section" value="work">
                                <input type="hidden" name="service2703_service_id" value="2703">
                                <input type="hidden" name="service2703_price" id="service2703-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2706" data-service-name="Замена крыла заднего правого">
                                <label for="service2706" class="checkbox-btn"> Замена крыла заднего правого </label>
                                <input type="number" class="service-cost" id="service2706-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2706_name" id="service2706-name" value="Замена крыла заднего правого">
                                <input type="hidden" name="service2706_section" value="work">
                                <input type="hidden" name="service2706_service_id" value="2706">
                                <input type="hidden" name="service2706_price" id="service2706-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2709" data-service-name="Ремонт крыла заднего левого">
                                <label for="service2709" class="checkbox-btn"> Ремонт крыла заднего левого </label>
                                <input type="number" class="service-cost" id="service2709-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2709_name" id="service2709-name" value="Ремонт крыла заднего левого">
                                <input type="hidden" name="service2709_section" value="work">
                                <input type="hidden" name="service2709_service_id" value="2709">
                                <input type="hidden" name="service2709_price" id="service2709-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2712" data-service-name="Ремонт крыла заднего правого">
                                <label for="service2712" class="checkbox-btn"> Ремонт крыла заднего правого </label>
                                <input type="number" class="service-cost" id="service2712-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2712_name" id="service2712-name" value="Ремонт крыла заднего правого">
                                <input type="hidden" name="service2712_section" value="work">
                                <input type="hidden" name="service2712_service_id" value="2712">
                                <input type="hidden" name="service2712_price" id="service2712-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2715" data-service-name="Ремонт крыла заднего левого без удаления лакокрасочного покрытия">
                                <label for="service2715" class="checkbox-btn"> Ремонт крыла заднего левого без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2715-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2715_name" id="service2715-name" value="Ремонт крыла заднего левого без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service2715_section" value="work">
                                <input type="hidden" name="service2715_service_id" value="2715">
                                <input type="hidden" name="service2715_price" id="service2715-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2718" data-service-name="Ремонт крыла заднего правого без удаления лакокрасочного покрытия">
                                <label for="service2718" class="checkbox-btn"> Ремонт крыла заднего правого без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2718-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2718_name" id="service2718-name" value="Ремонт крыла заднего правого без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service2718_section" value="work">
                                <input type="hidden" name="service2718_service_id" value="2718">
                                <input type="hidden" name="service2718_price" id="service2718-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2721" data-service-name="Ремонт крыла заднего левого с удалением лакокрасочного покрытия">
                                <label for="service2721" class="checkbox-btn"> Ремонт крыла заднего левого с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2721-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2721_name" id="service2721-name" value="Ремонт крыла заднего левого с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service2721_section" value="work">
                                <input type="hidden" name="service2721_service_id" value="2721">
                                <input type="hidden" name="service2721_price" id="service2721-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2724" data-service-name="Ремонт крыла заднего правого с удалением лакокрасочного покрытия">
                                <label for="service2724" class="checkbox-btn"> Ремонт крыла заднего правого с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service2724-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2724_name" id="service2724-name" value="Ремонт крыла заднего правого с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service2724_section" value="work">
                                <input type="hidden" name="service2724_service_id" value="2724">
                                <input type="hidden" name="service2724_price" id="service2724-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2727" data-service-name="Замена наружной арки крыла задней левой">
                                <label for="service2727" class="checkbox-btn"> Замена наружной арки крыла задней левой </label>
                                <input type="number" class="service-cost" id="service2727-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2727_name" id="service2727-name" value=" Замена наружной арки крыла задней левой">
                                <input type="hidden" name="service2727_section" value="work">
                                <input type="hidden" name="service2727_service_id" value="2727">
                                <input type="hidden" name="service2727_price" id="service2727-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2730" data-service-name="Замена наружной арки крыла задней правой">
                                <label for="service2730" class="checkbox-btn"> Замена наружной арки крыла задней правой </label>
                                <input type="number" class="service-cost" id="service2730-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2730_name" id="service2730-name" value=" Замена наружной арки крыла задней правой">
                                <input type="hidden" name="service2730_section" value="work">
                                <input type="hidden" name="service2730_service_id" value="2730">
                                <input type="hidden" name="service2730_price" id="service2730-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2733" data-service-name="Замена внутренней арки крыла задней левой">
                                <label for="service2733" class="checkbox-btn"> Замена внутренней арки крыла задней левой </label>
                                <input type="number" class="service-cost" id="service2733-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2733_name" id="service2733-name" value="Замена внутренней арки крыла задней левой">
                                <input type="hidden" name="service2733_section" value="work">
                                <input type="hidden" name="service2733_service_id" value="2733">
                                <input type="hidden" name="service2733_price" id="service2733-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2736" data-service-name="Замена внутренней арки крыла задней правой">
                                <label for="service2736" class="checkbox-btn"> Замена внутренней арки крыла задней правой </label>
                                <input type="number" class="service-cost" id="service2736-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2736_name" id="service2736-name" value="Замена внутренней арки крыла задней правой">
                                <input type="hidden" name="service2736_section" value="work">
                                <input type="hidden" name="service2736_service_id" value="2736">
                                <input type="hidden" name="service2736_price" id="service2736-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2739" data-service-name="Ремонт наружной арки крыла задней левой">
                                <label for="service2739" class="checkbox-btn"> Ремонт наружной арки крыла задней левой </label>
                                <input type="number" class="service-cost" id="service2739-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2739_name" id="service2739-name" value="Ремонт наружной арки крыла задней левой">
                                <input type="hidden" name="service2739_section" value="work">
                                <input type="hidden" name="service2739_service_id" value="2739">
                                <input type="hidden" name="service2739_price" id="service2739-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2742" data-service-name="Ремонт наружной арки крыла задней правой">
                                <label for="service2742" class="checkbox-btn"> Ремонт наружной арки крыла задней правой </label>
                                <input type="number" class="service-cost" id="service2742-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2742_name" id="service2742-name" value="Ремонт наружной арки крыла задней правой">
                                <input type="hidden" name="service2742_section" value="work">
                                <input type="hidden" name="service2742_service_id" value="2742">
                                <input type="hidden" name="service2742_price" id="service2742-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2745" data-service-name="Ремонт внутренней арки крыла задней левой">
                                <label for="service2745" class="checkbox-btn"> Ремонт внутренней арки крыла задней левой </label>
                                <input type="number" class="service-cost" id="service2745-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2745_name" id="service2745-name" value="Ремонт внутренней арки крыла задней левой">
                                <input type="hidden" name="service2745_section" value="work">
                                <input type="hidden" name="service2745_service_id" value="2745">
                                <input type="hidden" name="service2745_price" id="service2745-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service2748" data-service-name="Ремонт внутренней арки крыла задней правой">
                                <label for="service2748" class="checkbox-btn"> Ремонт внутренней арки крыла задней правой </label>
                                <input type="number" class="service-cost" id="service2748-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service2748_name" id="service2748-name" value="Ремонт внутренней арки крыла задней правой">
                                <input type="hidden" name="service2748_section" value="work">
                                <input type="hidden" name="service2748_service_id" value="2748">
                                <input type="hidden" name="service2748_price" id="service2748-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Крышка багажника (задняя дверь) </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3003" data-service-name="Снятие, установка крышки багажника">
                                <label for="service3003" class="checkbox-btn"> Снятие, установка крышки багажника </label>
                                <input type="number" class="service-cost" id="service3003-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3003_name" id="service3003-name" value="Снятие, установка крышки багажника">
                                <input type="hidden" name="service3003_section" value="work">
                                <input type="hidden" name="service3003_service_id" value="3003">
                                <input type="hidden" name="service3003_price" id="service3003-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3006" data-service-name="Снятие, установка задней двери">
                                <label for="service3006" class="checkbox-btn"> Снятие, установка задней двери </label>
                                <input type="number" class="service-cost" id="service3006-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3006_name" id="service3006-name" value="Снятие, установка задней двери">
                                <input type="hidden" name="service3006_section" value="work">
                                <input type="hidden" name="service3006_service_id" value="3006">
                                <input type="hidden" name="service3006_price" id="service3006-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3009" data-service-name="Замена крышки багажника">
                                <label for="service3009" class="checkbox-btn"> Замена крышки багажника </label>
                                <input type="number" class="service-cost" id="service3009-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3009_name" id="service3009-name" value="Замена крышки багажника">
                                <input type="hidden" name="service3009_section" value="work">
                                <input type="hidden" name="service3009_service_id" value="3009">
                                <input type="hidden" name="service3009_price" id="service3009-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3012" data-service-name="Замена задней двери">
                                <label for="service3012" class="checkbox-btn"> Замена задней двери </label>
                                <input type="number" class="service-cost" id="service3012-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3012_name" id="service3012-name" value="Замена задней двери">
                                <input type="hidden" name="service3012_section" value="work">
                                <input type="hidden" name="service3012_service_id" value="3012">
                                <input type="hidden" name="service3012_price" id="service3012-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3015" data-service-name="Ремонт крышки багажника без удаления лакокрасочного покрытия">
                                <label for="service3015" class="checkbox-btn"> Ремонт крышки багажника без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service3015-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3015_name" id="service3015-name" value="Ремонт крышки багажника без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service3015_section" value="work">
                                <input type="hidden" name="service3015_service_id" value="3015">
                                <input type="hidden" name="service3015_price" id="service3015-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3018" data-service-name="Ремонт задней двери без удаления лакокрасочного покрытия">
                                <label for="service3018" class="checkbox-btn"> Ремонт задней двери без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service3018-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3018_name" id="service3018-name" value="Ремонт задней двери без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service3018_section" value="work">
                                <input type="hidden" name="service3018_service_id" value="3018">
                                <input type="hidden" name="service3018_price" id="service3018-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3021" data-service-name="Ремонт крышки багажника с удалением лакокрасочного покрытия">
                                <label for="service3021" class="checkbox-btn"> Ремонт крышки багажника с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service3021-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3021_name" id="service3021-name" value="Ремонт крышки багажника с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service3021_section" value="work">
                                <input type="hidden" name="service3021_service_id" value="3021">
                                <input type="hidden" name="service3021_price" id="service3021-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3024" data-service-name="Ремонт задней двери с удалением лакокрасочного покрытия">
                                <label for="service3024" class="checkbox-btn"> Ремонт задней двери с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service3024-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3024_name" id="service3024-name" value="Ремонт задней двери с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service3024_section" value="work">
                                <input type="hidden" name="service3024_service_id" value="3024">
                                <input type="hidden" name="service3024_price" id="service3024-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3027" data-service-name="Замена задней панели">
                                <label for="service3027" class="checkbox-btn"> Замена задней панели </label>
                                <input type="number" class="service-cost" id="service3027-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3027_name" id="service3027-name" value=" Замена задней панели">
                                <input type="hidden" name="service3027_section" value="work">
                                <input type="hidden" name="service3027_service_id" value="3027">
                                <input type="hidden" name="service3027_price" id="service3027-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3030" data-service-name="Ремонт задней панели">
                                <label for="service3030" class="checkbox-btn"> Ремонт задней панели </label>
                                <input type="number" class="service-cost" id="service3030-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3030_name" id="service3030-name" value="Ремонт задней панели">
                                <input type="hidden" name="service3030_section" value="work">
                                <input type="hidden" name="service3030_service_id" value="3030">
                                <input type="hidden" name="service3030_price" id="service3030-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3033" data-service-name="Замена обоих шарниров багажника">
                                <label for="service3033" class="checkbox-btn"> Замена обоих шарниров багажника </label>
                                <input type="number" class="service-cost" id="service3033-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3033_name" id="service3033-name" value="Замена обоих шарниров багажника">
                                <input type="hidden" name="service3033_section" value="work">
                                <input type="hidden" name="service3033_service_id" value="3033">
                                <input type="hidden" name="service3033_price" id="service3033-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3036" data-service-name="Замена обоих шарниров задней двери">
                                <label for="service3036" class="checkbox-btn"> Замена обоих шарниров задней двери </label>
                                <input type="number" class="service-cost" id="service3036-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3036_name" id="service3036-name" value="Замена обоих шарниров задней двери">
                                <input type="hidden" name="service3036_section" value="work">
                                <input type="hidden" name="service3036_service_id" value="3036">
                                <input type="hidden" name="service3036_price" id="service3036-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3039" data-service-name="Замена шарнира багажника левого">
                                <label for="service3039" class="checkbox-btn"> Замена шарнира багажника левого </label>
                                <input type="number" class="service-cost" id="service3039-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3039_name" id="service3039-name" value="Замена шарнира багажника левого">
                                <input type="hidden" name="service3039_section" value="work">
                                <input type="hidden" name="service3039_service_id" value="3039">
                                <input type="hidden" name="service3039_price" id="service3039-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3042" data-service-name="Замена шарнира багажника правого">
                                <label for="service3042" class="checkbox-btn"> Замена шарнира багажника правого </label>
                                <input type="number" class="service-cost" id="service3042-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3042_name" id="service3042-name" value="Замена шарнира багажника правого">
                                <input type="hidden" name="service3042_section" value="work">
                                <input type="hidden" name="service3042_service_id" value="3042">
                                <input type="hidden" name="service3042_price" id="service3042-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3045" data-service-name="Замена шарнира задней двери левого">
                                <label for="service3045" class="checkbox-btn"> Замена шарнира задней двери левого </label>
                                <input type="number" class="service-cost" id="service3045-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3045_name" id="service3045-name" value="Замена шарнира задней двери левого">
                                <input type="hidden" name="service3045_section" value="work">
                                <input type="hidden" name="service3045_service_id" value="3045">
                                <input type="hidden" name="service3045_price" id="service3045-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3048" data-service-name="Замена шарнира задней двери правого">
                                <label for="service3048" class="checkbox-btn"> Замена шарнира задней двери правого </label>
                                <input type="number" class="service-cost" id="service3048-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3048_name" id="service3048-name" value="Замена шарнира задней двери правого">
                                <input type="hidden" name="service3048_section" value="work">
                                <input type="hidden" name="service3048_service_id" value="3048">
                                <input type="hidden" name="service3048_price" id="service3048-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3051" data-service-name="Замена внутренней части багажного отсека (без гарантии)">
                                <label for="service3051" class="checkbox-btn"> Замена внутренней части багажного отсека </label>
                                <input type="number" class="service-cost" id="service3051-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3051_name" id="service3051-name" value="Замена внутренней части багажного отсека (без гарантии)">
                                <input type="hidden" name="service3051_section" value="work">
                                <input type="hidden" name="service3051_service_id" value="3051">
                                <input type="hidden" name="service3051_price" id="service3051-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3054" data-service-name="Замена задней панели с внутренней частью багажного отсека">
                                <label for="service3054" class="checkbox-btn"> Замена задней панели с внутренней частью багажного отсека </label>
                                <input type="number" class="service-cost" id="service3054-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3054_name" id="service3054-name" value="Замена задней панели с внутренней частью багажного отсека">
                                <input type="hidden" name="service3054_section" value="work">
                                <input type="hidden" name="service3054_service_id" value="3054">
                                <input type="hidden" name="service3054_price" id="service3054-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Бампер задний </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3303" data-service-name="Снятие, установка заднего бампера">
                                <label for="service3303" class="checkbox-btn"> Снятие, установка </label>
                                <input type="number" class="service-cost" id="service3303-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3303_name" id="service3303-name" value="Снятие, установка заднего бампера">
                                <input type="hidden" name="service3303_section" value="work">
                                <input type="hidden" name="service3303_service_id" value="3303">
                                <input type="hidden" name="service3303_price" id="service3303-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3306" data-service-name="Мелкий ремонт заднего бампера">
                                <label for="service3306" class="checkbox-btn"> Мелкий ремонт </label>
                                <input type="number" class="service-cost" id="service3306-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3306_name" id="service3306-name" value="Мелкий ремонт заднего бампера">
                                <input type="hidden" name="service3306_section" value="work">
                                <input type="hidden" name="service3306_service_id" value="3306">
                                <input type="hidden" name="service3306_price" id="service3306-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3309" data-service-name="Ремонт бампера заднего без удаления лакокрасочного покрытия">
                                <label for="service3309" class="checkbox-btn"> Ремонт без удаления лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service3309-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3309_name" id="service3309-name" value="Ремонт бампера заднего без удаления лакокрасочного покрытия">
                                <input type="hidden" name="service3309_section" value="work">
                                <input type="hidden" name="service3309_service_id" value="3309">
                                <input type="hidden" name="service3309_price" id="service3309-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3312" data-service-name="Ремонт бампера заднего с удалением лакокрасочного покрытия">
                                <label for="service3312" class="checkbox-btn"> Ремонт с удалением лакокрасочного покрытия </label>
                                <input type="number" class="service-cost" id="service3312-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3312_name" id="service3312-name" value="Ремонт бампера заднего с удалением лакокрасочного покрытия">
                                <input type="hidden" name="service3312_section" value="work">
                                <input type="hidden" name="service3312_service_id" value="3312">
                                <input type="hidden" name="service3312_price" id="service3312-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3315" data-service-name="Изготовление отверстий в заднем бампере под сонары">
                                <label for="service3315" class="checkbox-btn"> Изготовление отверстий под сонары </label>
                                <input type="number" class="service-cost" id="service3315-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3315_name" id="service3315-name" value="Изготовление отверстий в заднем бампере под сонары">
                                <input type="hidden" name="service3315_section" value="work">
                                <input type="hidden" name="service3315_service_id" value="3315">
                                <input type="hidden" name="service3315_price" id="service3315-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Светотехника </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3603" data-service-name="Замена фар головного света">
                                <label for="service3603" class="checkbox-btn"> Замена фар головного света </label>
                                <input type="number" class="service-cost" id="service3603-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3603_name" id="service3603-name" value="Замена фар головного света">
                                <input type="hidden" name="service3603_section" value="work">
                                <input type="hidden" name="service3603_service_id" value="3603">
                                <input type="hidden" name="service3603_price" id="service3603-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3606" data-service-name="Замена противотуманных фар">
                                <label for="service3606" class="checkbox-btn"> Замена противотуманных фар </label>
                                <input type="number" class="service-cost" id="service3606-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3606_name" id="service3606-name" value="Замена противотуманных фар">
                                <input type="hidden" name="service3606_section" value="work">
                                <input type="hidden" name="service3606_service_id" value="3606">
                                <input type="hidden" name="service3606_price" id="service3606-price-hidden" value="0">
                            </div>

                                <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3609" data-service-name="Замена фары головного света передней левой">
                                <label for="service3609" class="checkbox-btn"> Замена фары передней левой </label>
                                <input type="number" class="service-cost" id="service3609-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3609_name" id="service3609-name" value="Замена фары головного света передней левой">
                                <input type="hidden" name="service3609_section" value="work">
                                <input type="hidden" name="service3609_service_id" value="3609">
                                <input type="hidden" name="service3609_price" id="service3609-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3612" data-service-name="Замена фары головного света передней правой">
                                <label for="service3612" class="checkbox-btn"> Замена фары передней правой </label>
                                <input type="number" class="service-cost" id="service3612-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3612_name" id="service3612-name" value="Замена фары головного света передней правой">
                                <input type="hidden" name="service3612_section" value="work">
                                <input type="hidden" name="service3612_service_id" value="3612">
                                <input type="hidden" name="service3612_price" id="service3612-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3615" data-service-name="Замена фары противотуманной левой">
                                <label for="service3615" class="checkbox-btn"> Замена фары противотуманной левой </label>
                                <input type="number" class="service-cost" id="service3615-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3615_name" id="service3615-name" value="Замена фары противотуманной левой">
                                <input type="hidden" name="service3615_section" value="work">
                                <input type="hidden" name="service3615_service_id" value="3615">
                                <input type="hidden" name="service3615_price" id="service3615-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3618" data-service-name="Замена фары противотуманной правой">
                                <label for="service3618" class="checkbox-btn"> Замена фары противотуманной правой </label>
                                <input type="number" class="service-cost" id="service3618-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3618_name" id="service3618-name" value="Замена фары противотуманной правой">
                                <input type="hidden" name="service3618_section" value="work">
                                <input type="hidden" name="service3618_service_id" value="3618">
                                <input type="hidden" name="service3618_price" id="service3618-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3621" data-service-name="Замена указателя поворота переднего левого">
                                <label for="service3621" class="checkbox-btn"> Замена указателя поворота переднего левого </label>
                                <input type="number" class="service-cost" id="service3621-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3621_name" id="service3621-name" value="Замена указателя поворота переднего левого">
                                <input type="hidden" name="service3621_section" value="work">
                                <input type="hidden" name="service3621_service_id" value="3621">
                                <input type="hidden" name="service3621_price" id="service3621-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3624" data-service-name="Замена указателя поворота переднего правого">
                                <label for="service3624" class="checkbox-btn"> Замена указателя поворота переднего правого </label>
                                <input type="number" class="service-cost" id="service3624-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3624_name" id="service3624-name" value="Замена указателя поворота переднего правого">
                                <input type="hidden" name="service3624_section" value="work">
                                <input type="hidden" name="service3624_service_id" value="3624">
                                <input type="hidden" name="service3624_price" id="service3624-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3627" data-service-name="Замена фары задней левой">
                                <label for="service3627" class="checkbox-btn"> Замена фары задней левой </label>
                                <input type="number" class="service-cost" id="service3627-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3627_name" id="service3627-name" value="Замена фары задней левой">
                                <input type="hidden" name="service3627_section" value="work">
                                <input type="hidden" name="service3627_service_id" value="3627">
                                <input type="hidden" name="service3627_price" id="service3627-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3630" data-service-name="Замена фары задней правой">
                                <label for="service3630" class="checkbox-btn"> Замена фары задней правой </label>
                                <input type="number" class="service-cost" id="service3630-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3630_name" id="service3630-name" value="Замена фары задней правой">
                                <input type="hidden" name="service3630_section" value="work">
                                <input type="hidden" name="service3630_service_id" value="3630">
                                <input type="hidden" name="service3630_price" id="service3630-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Стекла </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3903" data-service-name="Замена лобового стекла">
                                <label for="service3903" class="checkbox-btn"> Замена лобового стекла </label>
                                <input type="number" class="service-cost" id="service3903-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3903_name" id="service3903-name" value="Замена лобового стекла">
                                <input type="hidden" name="service3903_section" value="work">
                                <input type="hidden" name="service3903_service_id" value="3903">
                                <input type="hidden" name="service3903_price" id="service3903-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3906" data-service-name="Замена заднего стекла">
                                <label for="service3906" class="checkbox-btn"> Замена заднего стекла </label>
                                <input type="number" class="service-cost" id="service3906-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3906_name" id="service3906-name" value="Замена заднего стекла">
                                <input type="hidden" name="service3906_section" value="work">
                                <input type="hidden" name="service3906_service_id" value="3906">
                                <input type="hidden" name="service3906_price" id="service3906-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3909" data-service-name="Замена бокового стекла двери передней левой">
                                <label for="service3909" class="checkbox-btn"> Замена стекла двери передней левой </label>
                                <input type="number" class="service-cost" id="service3909-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3909_name" id="service3909-name" value="Замена бокового стекла двери передней левой">
                                <input type="hidden" name="service3909_section" value="work">
                                <input type="hidden" name="service3909_service_id" value="3909">
                                <input type="hidden" name="service3909_price" id="service3909-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3912" data-service-name="Замена бокового стекла двери передней правой">
                                <label for="service3912" class="checkbox-btn"> Замена стекла двери передней правой </label>
                                <input type="number" class="service-cost" id="service3912-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3912_name" id="service3912-name" value="Замена бокового стекла двери передней правой">
                                <input type="hidden" name="service3912_section" value="work">
                                <input type="hidden" name="service3912_service_id" value="3912">
                                <input type="hidden" name="service3912_price" id="service3912-price-hidden" value="0">
                            </div>

                                <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3915" data-service-name="Замена бокового стекла двери задней левой">
                                <label for="service3915" class="checkbox-btn"> Замена стекла двери задней левой </label>
                                <input type="number" class="service-cost" id="service3915-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3915_name" id="service3915-name" value="Замена бокового стекла двери задней левой">
                                <input type="hidden" name="service3915_section" value="work">
                                <input type="hidden" name="service3915_service_id" value="3915">
                                <input type="hidden" name="service3915_price" id="service3915-price-hidden" value="0">
                            </div>

                                <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3918" data-service-name="Замена бокового стекла двери задней правой">
                                <label for="service3918" class="checkbox-btn"> Замена стекла двери задней правой </label>
                                <input type="number" class="service-cost" id="service3918-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3918_name" id="service3918-name" value="Замена бокового стекла двери задней правой">
                                <input type="hidden" name="service3918_section" value="work">
                                <input type="hidden" name="service3918_service_id" value="3918">
                                <input type="hidden" name="service3918_price" id="service3918-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3921" data-service-name="Замена стекла форточки задней левой">
                                <label for="service3921" class="checkbox-btn"> Замена форточки задней левой </label>
                                <input type="number" class="service-cost" id="service3921-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3921_name" id="service3921-name" value="Замена стекла форточки задней левой">
                                <input type="hidden" name="service3921_section" value="work">
                                <input type="hidden" name="service3921_service_id" value="3921">
                                <input type="hidden" name="service3921_price" id="service3921-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3924" data-service-name="Замена стекла форточки задней правой">
                                <label for="service3924" class="checkbox-btn"> Замена форточки задней правой </label>
                                <input type="number" class="service-cost" id="service3924-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3924_name" id="service3924-name" value="Замена стекла форточки задней правой">
                                <input type="hidden" name="service3924_section" value="work">
                                <input type="hidden" name="service3924_service_id" value="3924">
                                <input type="hidden" name="service3924_price" id="service3924-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3927" data-service-name="Врезка форточки задней левой с последующей установкой">
                                <label for="service3927" class="checkbox-btn"> Врезка форточки левой с последующей установкой </label>
                                <input type="number" class="service-cost" id="service3927-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3927_name" id="service3927-name" value="Врезка форточки задней левой с последующей установкой">
                                <input type="hidden" name="service3927_section" value="work">
                                <input type="hidden" name="service3927_service_id" value="3927">
                                <input type="hidden" name="service3927_price" id="service3927-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service3930" data-service-name="Врезка форточки задней правой с последующей установкой">
                                <label for="service3930" class="checkbox-btn"> Врезка форточки правой с последующей установкой </label>
                                <input type="number" class="service-cost" id="service3930-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service3930_name" id="service3930-name" value="Врезка форточки задней правой с последующей установкой">
                                <input type="hidden" name="service3930_section" value="work">
                                <input type="hidden" name="service3930_service_id" value="3930">
                                <input type="hidden" name="service3930_price" id="service3930-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title">
                    <h4> 3. Запасные части и расходные материалы: </h4>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                         <label class="form-label"> Бампера, решетка радиатора </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6003" data-service-name="Бампер передний">
                                <label for="service6003" class="checkbox-btn"> Бампер передний </label>
                                <input type="number" class="service-cost" id="service6003-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6003_name" id="service6003-name" value="Бампер передний">
                                <input type="hidden" name="service6003_section" value="parts">
                                <input type="hidden" name="service6003_service_id" value="6003">
                                <input type="hidden" name="service6003_price" id="service6003-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6006" data-service-name="Бампер задний">
                                <label for="service6006" class="checkbox-btn"> Бампер задний </label>
                                <input type="number" class="service-cost" id="service6006-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6006_name" id="service6006-name" value="Бампер задний">
                                <input type="hidden" name="service6006_section" value="parts">
                                <input type="hidden" name="service6006_service_id" value="6006">
                                <input type="hidden" name="service6006_price" id="service6006-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6009" data-service-name="Решетка радиатора">
                                <label for="service6009" class="checkbox-btn"> Решетка радиатора </label>
                                <input type="number" class="service-cost" id="service6009-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6009_name" id="service6009-name" value="Решетка радиатора">
                                <input type="hidden" name="service6009_section" value="parts">
                                <input type="hidden" name="service6009_service_id" value="6009">
                                <input type="hidden" name="service6009_price" id="service6009-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Капот </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6303" data-service-name="Шарнир капота левый">
                                <label for="service6303" class="checkbox-btn"> Шарнир капота левый </label>
                                <input type="number" class="service-cost" id="service6303-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6303_name" id="service6303-name" value="Шарнир капота левый">
                                <input type="hidden" name="service6303_section" value="parts">
                                <input type="hidden" name="service6303_service_id" value="6303">
                                <input type="hidden" name="service6303_price" id="service6303-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6306" data-service-name="Шарнир капота правый">
                                <label for="service6306" class="checkbox-btn"> Шарнир капота правый </label>
                                <input type="number" class="service-cost" id="service6306-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6306_name" id="service6306-name" value="Шарнир капота правый">
                                <input type="hidden" name="service6306_section" value="parts">
                                <input type="hidden" name="service6306_service_id" value="6306">
                                <input type="hidden" name="service6306_price" id="service6306-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6309" data-service-name="Капот">
                                <label for="service6309" class="checkbox-btn"> Капот </label>
                                <input type="number" class="service-cost" id="service6309-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6309_name" id="service6309-name" value="Капот">
                                <input type="hidden" name="service6309_section" value="parts">
                                <input type="hidden" name="service6309_service_id" value="6309">
                                <input type="hidden" name="service6309_price" id="service6309-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Моторный отсек </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6603" data-service-name="Нижний брус">
                                <label for="service6603" class="checkbox-btn"> Нижний брус </label>
                                <input type="number" class="service-cost" id="service6603-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6603_name" id="service6603-name" value="Нижний брус">
                                <input type="hidden" name="service6603_section" value="parts">
                                <input type="hidden" name="service6603_service_id" value="6603">
                                <input type="hidden" name="service6603_price" id="service6603-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6606" data-service-name="Передняя панель радиатора">
                                <label for="service6606" class="checkbox-btn"> Передняя панель радиатора </label>
                                <input type="number" class="service-cost" id="service6606-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6606_name" id="service6606-name" value="Передняя панель радиатора">
                                <input type="hidden" name="service6606_section" value="parts">
                                <input type="hidden" name="service6606_service_id" value="6606">
                                <input type="hidden" name="service6606_price" id="service6606-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6609" data-service-name="Лонжерон передний левый">
                                <label for="service6609" class="checkbox-btn"> Лонжерон передний левый </label>
                                <input type="number" class="service-cost" id="service6609-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6609_name" id="service6609-name" value="Лонжерон передний левый">
                                <input type="hidden" name="service6609_section" value="parts">
                                <input type="hidden" name="service6609_service_id" value="6609">
                                <input type="hidden" name="service6609_price" id="service6609-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6612" data-service-name="Лонжерон передний правый">
                                <label for="service6612" class="checkbox-btn"> Лонжерон передний правый </label>
                                <input type="number" class="service-cost" id="service6612-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6612_name" id="service6612-name" value="Лонжерон передний правый">
                                <input type="hidden" name="service6612_section" value="parts">
                                <input type="hidden" name="service6612_service_id" value="6612">
                                <input type="hidden" name="service6612_price" id="service6612-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6615" data-service-name="Моторный щит">
                                <label for="service6615" class="checkbox-btn"> Моторный щит </label>
                                <input type="number" class="service-cost" id="service6615-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6615_name" id="service6615-name" value="Моторный щит">
                                <input type="hidden" name="service6615_section" value="parts">
                                <input type="hidden" name="service6615_service_id" value="6615">
                                <input type="hidden" name="service6615_price" id="service6615-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Крылья </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6903" data-service-name="Крыло переднее левое">
                                <label for="service6903" class="checkbox-btn"> Крыло переднее левое </label>
                                <input type="number" class="service-cost" id="service6903-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6903_name" id="service6903-name" value="Крыло переднее левое">
                                <input type="hidden" name="service6903_section" value="parts">
                                <input type="hidden" name="service6903_service_id" value="6903">
                                <input type="hidden" name="service6903_price" id="service6903-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6906" data-service-name="Крыло переднее правое">
                                <label for="service6906" class="checkbox-btn"> Крыло переднее правое </label>
                                <input type="number" class="service-cost" id="service6906-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6906_name" id="service6906-name" value="Крыло переднее правое">
                                <input type="hidden" name="service6906_section" value="parts">
                                <input type="hidden" name="service6906_service_id" value="6906">
                                <input type="hidden" name="service6906_price" id="service6906-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6909" data-service-name="Крыло заднее левое">
                                <label for="service6909" class="checkbox-btn"> Крыло заднее левое </label>
                                <input type="number" class="service-cost" id="service6909-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6909_name" id="service6909-name" value="Крыло заднее левое">
                                <input type="hidden" name="service6909_section" value="parts">
                                <input type="hidden" name="service6909_service_id" value="6909">
                                <input type="hidden" name="service6909_price" id="service6909-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6912" data-service-name="Крыло заднее правое">
                                <label for="service6912" class="checkbox-btn"> Крыло заднее правое </label>
                                <input type="number" class="service-cost" id="service6912-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6912_name" id="service6912-name" value="Крыло заднее правое">
                                <input type="hidden" name="service6912_section" value="parts">
                                <input type="hidden" name="service6912_service_id" value="6912">
                                <input type="hidden" name="service6912_price" id="service6912-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6915" data-service-name="Брызговик передний левый (метал)">
                                <label for="service6915" class="checkbox-btn"> Брызговик передний левый (метал) </label>
                                <input type="number" class="service-cost" id="service6915-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6915_name" id="service6915-name" value="Брызговик передний левый (метал)">
                                <input type="hidden" name="service6915_section" value="parts">
                                <input type="hidden" name="service6915_service_id" value="6915">
                                <input type="hidden" name="service6915_price" id="service6915-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6918" data-service-name="Брызговик передний правый (метал)">
                                <label for="service6918" class="checkbox-btn"> Брызговик передний правый (метал) </label>
                                <input type="number" class="service-cost" id="service6918-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6918_name" id="service6918-name" value="Брызговик передний правый (метал)">
                                <input type="hidden" name="service6918_section" value="parts">
                                <input type="hidden" name="service6918_service_id" value="6918">
                                <input type="hidden" name="service6918_price" id="service6918-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6921" data-service-name="Усилитель крыла передний левый">
                                <label for="service6921" class="checkbox-btn"> Усилитель крыла передний левый </label>
                                <input type="number" class="service-cost" id="service6921-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6921_name" id="service6921-name" value="Усилитель крыла передний левый">
                                <input type="hidden" name="service6921_section" value="parts">
                                <input type="hidden" name="service6921_service_id" value="6921">
                                <input type="hidden" name="service6921_price" id="service6921-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6924" data-service-name="Усилитель крыла передний правый">
                                <label for="service6924" class="checkbox-btn"> Усилитель крыла передний правый </label>
                                <input type="number" class="service-cost" id="service6924-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6924_name" id="service6924-name" value="Усилитель крыла передний правый">
                                <input type="hidden" name="service6924_section" value="parts">
                                <input type="hidden" name="service6924_service_id" value="6924">
                                <input type="hidden" name="service6924_price" id="service6924-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6927" data-service-name="Наружная арка крыла заднего левого">
                                <label for="service6927" class="checkbox-btn"> Наружная арка крыла заднего левого </label>
                                <input type="number" class="service-cost" id="service6927-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6927_name" id="service6927-name" value=" Наружная арка крыла заднего левого">
                                <input type="hidden" name="service6927_section" value="parts">
                                <input type="hidden" name="service6927_service_id" value="6927">
                                <input type="hidden" name="service6927_price" id="service6927-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6930" data-service-name="Наружная арка крыла заднего правого">
                                <label for="service6930" class="checkbox-btn"> Наружная арка крыла заднего правого </label>
                                <input type="number" class="service-cost" id="service6930-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6930_name" id="service6930-name" value="Наружная арка крыла заднего правого">
                                <input type="hidden" name="service6930_section" value="parts">
                                <input type="hidden" name="service6930_service_id" value="6930">
                                <input type="hidden" name="service6930_price" id="service6930-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6933" data-service-name="Внутренняя арка крыла заднего левого">
                                <label for="service6933" class="checkbox-btn"> Внутренняя арка крыла заднего левого </label>
                                <input type="number" class="service-cost" id="service6933-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6933_name" id="service6933-name" value="Внутренняя арка крыла заднего левого">
                                <input type="hidden" name="service6933_section" value="parts">
                                <input type="hidden" name="service6933_service_id" value="6933">
                                <input type="hidden" name="service6933_price" id="service6933-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service6936" data-service-name="Внутренняя арка крыла заднего правого">
                                <label for="service6936" class="checkbox-btn"> Внутренняя арка крыла заднего правого </label>
                                <input type="number" class="service-cost" id="service6936-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service6936_name" id="service6936-name" value="Внутренняя арка крыла заднего правого">
                                <input type="hidden" name="service6936_section" value="parts">
                                <input type="hidden" name="service6936_service_id" value="6936">
                                <input type="hidden" name="service6936_price" id="service6936-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Двери </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7203" data-service-name="Дверь передняя левая">
                                <label for="service7203" class="checkbox-btn"> Дверь передняя левая </label>
                                <input type="number" class="service-cost" id="service7203-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7203_name" id="service7203-name" value="Дверь передняя левая">
                                <input type="hidden" name="service7203_section" value="parts">
                                <input type="hidden" name="service7203_service_id" value="7203">
                                <input type="hidden" name="service7203_price" id="service7203-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7206" data-service-name="Дверь передняя правая">
                                <label for="service7206" class="checkbox-btn"> Дверь передняя правая </label>
                                <input type="number" class="service-cost" id="service7206-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7206_name" id="service7206-name" value="Дверь передняя правая">
                                <input type="hidden" name="service7206_section" value="parts">
                                <input type="hidden" name="service7206_service_id" value="7206">
                                <input type="hidden" name="service7206_price" id="service7206-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7209" data-service-name="Дверь задняя левая">
                                <label for="service7209" class="checkbox-btn"> Дверь задняя левая </label>
                                <input type="number" class="service-cost" id="service7209-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7209_name" id="service7209-name" value="Дверь задняя левая">
                                <input type="hidden" name="service7209_section" value="parts">
                                <input type="hidden" name="service7209_service_id" value="7209">
                                <input type="hidden" name="service7209_price" id="service7209-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7212" data-service-name="Дверь задняя правая">
                                <label for="service7212" class="checkbox-btn"> Дверь задняя правая </label>
                                <input type="number" class="service-cost" id="service7212-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7212_name" id="service7212-name" value="Дверь задняя правая">
                                <input type="hidden" name="service7212_section" value="parts">
                                <input type="hidden" name="service7212_service_id" value="7212">
                                <input type="hidden" name="service7212_price" id="service7212-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7215" data-service-name="Средняя стойка кузова левая">
                                <label for="service7215" class="checkbox-btn"> Средняя стойка кузова левая </label>
                                <input type="number" class="service-cost" id="service7215-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7215_name" id="service7215-name" value="Средняя стойка кузова левая">
                                <input type="hidden" name="service7215_section" value="parts">
                                <input type="hidden" name="service7215_service_id" value="7215">
                                <input type="hidden" name="service7215_price" id="service7215-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7218" data-service-name="Средняя стойка кузова правая">
                                <label for="service7218" class="checkbox-btn"> Средняя стойка кузова правая </label>
                                <input type="number" class="service-cost" id="service7218-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7218_name" id="service7218-name" value="Средняя стойка кузова правая">
                                <input type="hidden" name="service7218_section" value="parts">
                                <input type="hidden" name="service7218_service_id" value="7218">
                                <input type="hidden" name="service7218_price" id="service7218-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7221" data-service-name="Порог двери левый">
                                <label for="service7221" class="checkbox-btn"> Порог двери левый </label>
                                <input type="number" class="service-cost" id="service7221-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7221_name" id="service7221-name" value="Порог двери левый">
                                <input type="hidden" name="service7221_section" value="parts">
                                <input type="hidden" name="service7221_service_id" value="7221">
                                <input type="hidden" name="service7221_price" id="service7221-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7224" data-service-name="Порог двери правый">
                                <label for="service7224" class="checkbox-btn"> Порог двери правый </label>
                                <input type="number" class="service-cost" id="service7224-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7224_name" id="service7224-name" value="Порог двери правый">
                                <input type="hidden" name="service7224_section" value="parts">
                                <input type="hidden" name="service7224_service_id" value="7224">
                                <input type="hidden" name="service7224_price" id="service7224-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7227" data-service-name="Усилитель левого порога">
                                <label for="service7227" class="checkbox-btn"> Усилитель левого порога </label>
                                <input type="number" class="service-cost" id="service7227-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7227_name" id="service7227-name" value="Усилитель левого порога">
                                <input type="hidden" name="service7227_section" value="parts">
                                <input type="hidden" name="service7227_service_id" value="7227">
                                <input type="hidden" name="service7227_price" id="service7227-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7230" data-service-name="Усилитель правого порога">
                                <label for="service7230" class="checkbox-btn"> Усилитель правого порога </label>
                                <input type="number" class="service-cost" id="service7230-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7230_name" id="service7230-name" value="Усилитель правого порога">
                                <input type="hidden" name="service7230_section" value="parts">
                                <input type="hidden" name="service7230_service_id" value="7230">
                                <input type="hidden" name="service7230_price" id="service7230-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7233" data-service-name="Шарнир двери передней левой">
                                <label for="service7233" class="checkbox-btn"> Шарнир двери передней левой </label>
                                <input type="number" class="service-cost" id="service7233-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7233_name" id="service7233-name" value="Шарнир двери передней левой">
                                <input type="hidden" name="service7233_section" value="parts">
                                <input type="hidden" name="service7233_service_id" value="7233">
                                <input type="hidden" name="service7233_price" id="service7233-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7236" data-service-name="Шарнир двери передней правой">
                                <label for="service7236" class="checkbox-btn"> Шарнир двери передней правой </label>
                                <input type="number" class="service-cost" id="service7236-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7236_name" id="service7236-name" value="Шарнир двери передней правой">
                                <input type="hidden" name="service7236_section" value="parts">
                                <input type="hidden" name="service7236_service_id" value="7236">
                                <input type="hidden" name="service7236_price" id="service7236-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7239" data-service-name="Шарнир двери задней левой">
                                <label for="service7239" class="checkbox-btn"> Шарнир двери задней левой </label>
                                <input type="number" class="service-cost" id="service7239-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7239_name" id="service7239-name" value="Шарнир двери задней левой">
                                <input type="hidden" name="service7239_section" value="parts">
                                <input type="hidden" name="service7239_service_id" value="7239">
                                <input type="hidden" name="service7239_price" id="service7239-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7242" data-service-name="Шарнир двери задней правой">
                                <label for="service7242" class="checkbox-btn"> Шарнир двери задней правой </label>
                                <input type="number" class="service-cost" id="service7242-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7242_name" id="service7242-name" value="Шарнир двери задней правой">
                                <input type="hidden" name="service7242_section" value="parts">
                                <input type="hidden" name="service7242_service_id" value="7242">
                                <input type="hidden" name="service7242_price" id="service7242-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Крышка багажника (задняя дверь) </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7503" data-service-name="Крышка багажника">
                                <label for="service7503" class="checkbox-btn"> Крышка багажника </label>
                                <input type="number" class="service-cost" id="service7503-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7503_name" id="service7503-name" value="Крышка багажника">
                                <input type="hidden" name="service7503_section" value="parts">
                                <input type="hidden" name="service7503_service_id" value="7503">
                                <input type="hidden" name="service7503_price" id="service7503-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7506" data-service-name="Задняя дверь">
                                <label for="service7506" class="checkbox-btn"> Задняя дверь </label>
                                <input type="number" class="service-cost" id="service7506-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7506_name" id="service7506-name" value="Задняя дверь">
                                <input type="hidden" name="service7506_section" value="parts">
                                <input type="hidden" name="service7506_service_id" value="7506">
                                <input type="hidden" name="service7506_price" id="service7506-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7509" data-service-name="Шарнир багажника левый">
                                <label for="service7509" class="checkbox-btn"> Шарнир багажника левый </label>
                                <input type="number" class="service-cost" id="service7509-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7509_name" id="service7509-name" value="Шарнир багажника левый">
                                <input type="hidden" name="service7509_section" value="parts">
                                <input type="hidden" name="service7509_service_id" value="7509">
                                <input type="hidden" name="service7509_price" id="service7509-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7512" data-service-name="Шарнир багажника правый">
                                <label for="service7512" class="checkbox-btn"> Шарнир багажника правый </label>
                                <input type="number" class="service-cost" id="service7512-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7512_name" id="service7512-name" value="Шарнир багажника правый">
                                <input type="hidden" name="service7512_section" value="parts">
                                <input type="hidden" name="service7512_service_id" value="7512">
                                <input type="hidden" name="service7512_price" id="service7512-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7515" data-service-name="Шарнир задней двери левый">
                                <label for="service7515" class="checkbox-btn"> Шарнир задней двери левый  </label>
                                <input type="number" class="service-cost" id="service7515-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7515_name" id="service7515-name" value="Шарнир задней двери левый">
                                <input type="hidden" name="service7515_section" value="parts">
                                <input type="hidden" name="service7515_service_id" value="7515">
                                <input type="hidden" name="service7515_price" id="service7515-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7518" data-service-name="Шарнир задней двери правый">
                                <label for="service7518" class="checkbox-btn"> Шарнир задней двери правый </label>
                                <input type="number" class="service-cost" id="service7518-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7518_name" id="service7518-name" value="Шарнир задней двери правый">
                                <input type="hidden" name="service7518_section" value="parts">
                                <input type="hidden" name="service7518_service_id" value="7518">
                                <input type="hidden" name="service7518_price" id="service7518-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7521" data-service-name="Задняя панель">
                                <label for="service7521" class="checkbox-btn"> Задняя панель </label>
                                <input type="number" class="service-cost" id="service7521-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7521_name" id="service7521-name" value="Задняя панель">
                                <input type="hidden" name="service7521_section" value="parts">
                                <input type="hidden" name="service7521_service_id" value="7521">
                                <input type="hidden" name="service7521_price" id="service7521-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7524" data-service-name="Внутренняя часть багажного отсека">
                                <label for="service7524" class="checkbox-btn"> Внутренняя часть багажного отсека </label>
                                <input type="number" class="service-cost" id="service7524-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7524_name" id="service7524-name" value="Внутренняя часть багажного отсека">
                                <input type="hidden" name="service7524_section" value="parts">
                                <input type="hidden" name="service7524_service_id" value="7524">
                                <input type="hidden" name="service7524_price" id="service7524-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Светотехника </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7803" data-service-name="Фара головного света передняя левая">
                                <label for="service7803" class="checkbox-btn"> Фара головного света передняя левая </label>
                                <input type="number" class="service-cost" id="service7803-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7803_name" id="service7803-name" value="Фара головного света передняя левая">
                                <input type="hidden" name="service7803_section" value="parts">
                                <input type="hidden" name="service7803_service_id" value="7803">
                                <input type="hidden" name="service7803_price" id="service7803-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7806" data-service-name="Фара головного света передняя правая">
                                <label for="service7806" class="checkbox-btn"> Фара головного света передняя правая </label>
                                <input type="number" class="service-cost" id="service7806-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7806_name" id="service7806-name" value="Фара головного света передняя правая">
                                <input type="hidden" name="service7806_section" value="parts">
                                <input type="hidden" name="service7806_service_id" value="7806">
                                <input type="hidden" name="service7806_price" id="service7806-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7809" data-service-name="Противотуманная фара левая">
                                <label for="service7809" class="checkbox-btn"> Противотуманная фара левая </label>
                                <input type="number" class="service-cost" id="service7809-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7809_name" id="service7809-name" value="Противотуманная фара левая">
                                <input type="hidden" name="service7809_section" value="parts">
                                <input type="hidden" name="service7809_service_id" value="7809">
                                <input type="hidden" name="service7809_price" id="service7809-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7812" data-service-name="Противотуманная фара правая">
                                <label for="service7812" class="checkbox-btn"> Противотуманная фара правая </label>
                                <input type="number" class="service-cost" id="service7812-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7812_name" id="service7812-name" value="Противотуманная фара правая">
                                <input type="hidden" name="service7812_section" value="parts">
                                <input type="hidden" name="service7812_service_id" value="7812">
                                <input type="hidden" name="service7812_price" id="service7812-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7815" data-service-name="Указатель поворота левый">
                                <label for="service7815" class="checkbox-btn"> Указатель поворота левый </label>
                                <input type="number" class="service-cost" id="service7815-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7815_name" id="service7815-name" value="Указатель поворота левый">
                                <input type="hidden" name="service7815_section" value="parts">
                                <input type="hidden" name="service7815_service_id" value="7815">
                                <input type="hidden" name="service7815_price" id="service7815-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7818" data-service-name="Указатель поворота правый">
                                <label for="service7818" class="checkbox-btn"> Указатель поворота правый </label>
                                <input type="number" class="service-cost" id="service7818-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7818_name" id="service7818-name" value="Указатель поворота правый">
                                <input type="hidden" name="service7818_section" value="parts">
                                <input type="hidden" name="service7818_service_id" value="7818">
                                <input type="hidden" name="service7818_price" id="service7818-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7821" data-service-name="Повторитель указателя поворота левый">
                                <label for="service7821" class="checkbox-btn"> Повторитель указателя поворота левый </label>
                                <input type="number" class="service-cost" id="service7821-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7821_name" id="service7821-name" value="Повторитель указателя поворота левый">
                                <input type="hidden" name="service7821_section" value="parts">
                                <input type="hidden" name="service7821_service_id" value="7821">
                                <input type="hidden" name="service7821_price" id="service7821-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7824" data-service-name="Повторитель указателя поворота правый">
                                <label for="service7824" class="checkbox-btn"> Повторитель указателя поворота правый </label>
                                <input type="number" class="service-cost" id="service7824-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7824_name" id="service7824-name" value="Повторитель указателя поворота правый">
                                <input type="hidden" name="service7824_section" value="parts">
                                <input type="hidden" name="service7824_service_id" value="7824">
                                <input type="hidden" name="service7824_price" id="service7824-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7827" data-service-name="Фара задняя левая">
                                <label for="service7827" class="checkbox-btn"> Фара задняя левая </label>
                                <input type="number" class="service-cost" id="service7827-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7827_name" id="service7827-name" value=" Фара задняя левая">
                                <input type="hidden" name="service7827_section" value="parts">
                                <input type="hidden" name="service7827_service_id" value="7827">
                                <input type="hidden" name="service7827_price" id="service7827-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service7830" data-service-name="Фара задняя правая">
                                <label for="service7830" class="checkbox-btn"> Фара задняя правая </label>
                                <input type="number" class="service-cost" id="service7830-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service7830_name" id="service7830-name" value="Фара задняя правая">
                                <input type="hidden" name="service7830_section" value="parts">
                                <input type="hidden" name="service7830_service_id" value="7830">
                                <input type="hidden" name="service7830_price" id="service7830-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-container">
                    <div class="collapsible-header">
                        <label class="form-label"> Стекла </label>
                        <span class="collapsible-arrow">↓</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="wrapper">
                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service8103" data-service-name="Стекло лобовое">
                                <label for="service8103" class="checkbox-btn"> Стекло лобовое </label>
                                <input type="number" class="service-cost" id="service8103-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service8103_name" id="service8103-name" value="Стекло лобовое">
                                <input type="hidden" name="service8103_section" value="parts">
                                <input type="hidden" name="service8103_service_id" value="8103">
                                <input type="hidden" name="service8103_price" id="service8103-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service8106" data-service-name="Стекло заднее">
                                <label for="service8106" class="checkbox-btn"> Стекло заднее </label>
                                <input type="number" class="service-cost" id="service8106-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service8106_name" id="service8106-name" value="Стекло заднее">
                                <input type="hidden" name="service8106_section" value="parts">
                                <input type="hidden" name="service8106_service_id" value="8106">
                                <input type="hidden" name="service8106_price" id="service8106-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service8109" data-service-name="Стекло двери передней левой">
                                <label for="service8109" class="checkbox-btn"> Стекло двери передней левой </label>
                                <input type="number" class="service-cost" id="service8109-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service8109_name" id="service8109-name" value="Стекло двери передней левой">
                                <input type="hidden" name="service8109_section" value="parts">
                                <input type="hidden" name="service8109_service_id" value="8109">
                                <input type="hidden" name="service8109_price" id="service8109-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service8112" data-service-name="Стекло двери передней правой">
                                <label for="service8112" class="checkbox-btn"> Стекло двери передней правой </label>
                                <input type="number" class="service-cost" id="service8112-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service8112_name" id="service8112-name" value="Стекло двери передней правой">
                                <input type="hidden" name="service8112_section" value="parts">
                                <input type="hidden" name="service8112_service_id" value="8112">
                                <input type="hidden" name="service8112_price" id="service8112-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service8115" data-service-name="Стекло двери задней левой">
                                <label for="service8115" class="checkbox-btn"> Стекло двери задней левой </label>
                                <input type="number" class="service-cost" id="service8115-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service8115_name" id="service8115-name" value="Стекло двери задней левой">
                                <input type="hidden" name="service8115_section" value="parts">
                                <input type="hidden" name="service8115_service_id" value="8115">
                                <input type="hidden" name="service8115_price" id="service8115-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service8118" data-service-name="Стекло двери задней правой">
                                <label for="service8118" class="checkbox-btn"> Стекло двери задней правой </label>
                                <input type="number" class="service-cost" id="service8118-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service8118_name" id="service8118-name" value="Стекло двери задней правой">
                                <input type="hidden" name="service8118_section" value="parts">
                                <input type="hidden" name="service8118_service_id" value="8118">
                                <input type="hidden" name="service8118_price" id="service8118-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service8121" data-service-name="Стекло форточки задней левой">
                                <label for="service8121" class="checkbox-btn"> Стекло форточки задней левой </label>
                                <input type="number" class="service-cost" id="service8121-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service8121_name" id="service8121-name" value="Стекло форточки задней левой">
                                <input type="hidden" name="service8121_section" value="parts">
                                <input type="hidden" name="service8121_service_id" value="8121">
                                <input type="hidden" name="service8121_price" id="service8121-price-hidden" value="0">
                            </div>

                            <div class="service-item">
                                <input type="checkbox" class="service-checkbox" id="service8124" data-service-name="Стекло форточки задней правой">
                                <label for="service8124" class="checkbox-btn"> Стекло форточки задней правой </label>
                                <input type="number" class="service-cost" id="service8124-cost" placeholder="0.00" disabled>
                                <input type="hidden" name="service8124_name" id="service8124-name" value="Стекло форточки задней правой">
                                <input type="hidden" name="service8124_section" value="parts">
                                <input type="hidden" name="service8124_service_id" value="8124">
                                <input type="hidden" name="service8124_price" id="service8124-price-hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Итоговая сумма, отображаемая на экране -->
                <!-- Отображаем сумму для пользователя -->
                <div class="title">
                    <h4> Итого: <span id="totalPrice">0</span> руб. </h4>
                </div>
                <!-- Поле для отправки суммы. Сейчас оно текстовое, чтобы видеть значение -->
                <input type="hidden" id="total_price_hidden" name="total_price" value="0" readonly>

                <button type="submit" class="btn btn-success"> ОФОРМИТЬ ЗАКАЗ </button>
            </form>
        </div>

        <footer>
            <div class="all_footer_block">
                <div class="footer_column_1">
                    <img class="bottom_logo" src="filles/black_logo.svg" alt="STANDOX logo">
                    <div class="contacts">
                        <p>
                            СТО "STANDOX" <br>
                            672039, г. Чита, ул. Верхоленская 51 <br>
                            телефон: 8 914 472-10-10, 8 924 472-30-30 <br>
                            email: lider00@list.ru <br>
                            web-site: www.standox.chita.ru
                        </p>
                    </div>
                </div>

                <div class="property">
                    <p>
                        Данное программное обеспечение является интеллектуальной собственностью <br>
                        Индивидуального предпринимателя Фарафонова Владимира Владимировича <br>
                        ОГРНИП: 306753636100113, ИНН: 753610458920 <br>
                        Все права защищены
                    </p>
                </div>

                <div class="sbwlab">
                    <p>
                        © 2025 SUBWAY LAB COMPANY <br>
                        <span class="other_font_size"> программа разработана в рамках проекта «STANDOX» </span>
                    </p>
                </div>
            </div>
        </footer>


        <script src="script.js"></script>
        <script>
            // Поиск всех заголовков раскрывающихся блоков
            const collapsibles = document.querySelectorAll('.collapsible-header');
        
            // Добавляем обработчик событий для каждого заголовка
            collapsibles.forEach(collapsible => {
                collapsible.addEventListener('click', () => {
                    const container = collapsible.parentElement;
                    container.classList.toggle('open');
                });
            });
        </script>

        <script>
            // Функция для обработки ошибки
            function handleInputValidation(event) {
                const input = event.target;
                const errorMessage = input.closest('.customer').querySelector(`.error-message[data-for="${input.id}"]`);
        
                // Проверяем поле на валидность
                if (!input.validity.valid) {
                    // Меняем текст placeholder на ошибку
                    input.placeholder = input.dataset.defaultPlaceholder;  // Оставляем текст как был
                    // Изменяем цвет placeholder
                    input.classList.add("error-placeholder");  // Добавляем класс для изменения цвета placeholder
                    // Добавляем класс для отображения ошибки
                    input.classList.add("error");
                    // Показываем текст ошибки
                    errorMessage.style.visibility = 'visible';
                }
            else {
                    // Восстанавливаем стандартный фон
                    input.style.backgroundColor = "";
                    // Восстанавливаем исходный placeholder
                    input.placeholder = input.dataset.defaultPlaceholder;
                    // Убираем класс ошибки
                    input.classList.remove("error");
                    // Скрываем текст ошибки
                    errorMessage.style.visibility = 'hidden';
                }
            }
        
            // Получаем все поля ввода
            const inputs = document.querySelectorAll('.user_input');
        
            // Устанавливаем дефолтный placeholder в data-атрибут
            inputs.forEach(input => {
                input.dataset.defaultPlaceholder = input.placeholder;
                input.addEventListener('blur', handleInputValidation);
            });
        </script>
    </body>
</html>