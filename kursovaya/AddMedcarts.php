<?php
$conn = mysqli_connect("localhost", "root", "", "zoxan");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Проверка, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $datepost = $_POST["datepost"];
    $diagnoz = $_POST["diagnoz"];
    $heal = $_POST["heal"];
    $doctor = $_POST["doctor"];
    $user_id = $_POST["user_id"];


    $sql = "INSERT INTO medcarts (datepost, diagnoz, heal, doctor, user_id) VALUES ('$datepost', '$diagnoz', '$heal', '$doctor', '$user_id')";
    if(mysqli_query($conn, $sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }

    // Закрытие запроса
}

?>