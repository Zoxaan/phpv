<?php
$conn = mysqli_connect("localhost", "root", "", "zoxan");
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Обработка формы после отправки
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $newDoctor = $_POST["doctor"];
    $userId = $_POST["user_id"]; // Используем "user_id" вместо "medcart_id"

    // Запрос на обновление поля "doctor"
    $sql = "UPDATE medcarts SET doctor='$newDoctor' WHERE id=$userId";

    if ($conn->query($sql) === TRUE) {
        echo "Поле 'doctor' успешно обновлено";
    } else {
        echo "Ошибка при обновлении поля 'doctor': " . $conn->error;
    }
}