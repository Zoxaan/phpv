<!DOCTYPE html>
<?php
session_start();
// Проверка, вошел ли пользователь
if (!isset($_SESSION['auth'])){
    $_SESSION['auth']=false;
}

?>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link" href="glavnaya.php">Главная</a>
            </li>
            <?php if ($_SESSION["auth"] === true) {?>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Выйти</a>
            </li>
           <?php } else {?>
            <li class="nav-item">
                <a class="nav-link" href="user.php">Войти</a>
            </li>
                <?php }?>
            <li class="nav-item">
                <a class="nav-link" href="UsersProfile.php">Профиль пациента</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="strprofile.php">Админка</a>
            </li>
        </ul>
</body>
</html>