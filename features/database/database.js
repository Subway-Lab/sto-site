// NOTE: Файл функции подтверждения удаления заказа

function confirmDeletion(orderId) {
    if (confirm("Вы уверены, что хотите удалить этот заказ?")) {
        window.location.href = "delete.php?id=" + orderId;
    }
}