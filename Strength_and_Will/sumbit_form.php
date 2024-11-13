<?php
// Подключаем базу данных
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверяем, заполнены ли все поля
    if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['contact_method'])) {
        die("Пожалуйста, заполните все поля.");
    }

    // Получаем значения из формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $contact_method = $_POST['contact_method'];

    // Выполняем SQL-запрос для вставки данных
    $sql = "INSERT INTO applications (name, phone, contact_method) VALUES (:name, :phone, :contact_method)";
    
    // Подготавливаем и выполняем запрос
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':name' => $name, ':phone' => $phone, ':contact_method' => $contact_method]);
        echo "Заявка успешно отправлена!";
    } catch (PDOException $e) {
        echo "Ошибка: " . $e->getMessage();
    }
}
?>
