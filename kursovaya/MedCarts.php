<!doctype html>
<?php include "headet.php";?>
<?php
$conn = mysqli_connect("localhost", "root", "", "zoxan");
$query = $conn->query("SELECT * FROM users");
while($user = mysqli_fetch_assoc($query))
{
    $users[] = $user;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="AddMedcarts.php" method="post" class="row g-3">

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Дата поступления</label>
        <input type="date" class="form-control" name="datepost">
    </div>


    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Диагноз</label>
            <input type="text" class="form-control" name="diagnoz">
        </div>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Лечение</label>
                <input type="text" class="form-control" name="heal">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Доктор</label>
                <input type="text" class="form-control" name="doctor">
            </div>
        <div class="col-md-6">
        <select class="form-select"  name="user_id" id="cars">
            <?php foreach ($users as $user): ?>
            <option name="user_id"value="<?=$user["id"]?>" ><?= $user['username'] ?></option>
            <?php endforeach; ?>
        </select>
        </div>
            <form class="row g-3">
                <div class="col-6">
                    <button onclick="da()" type="submit" class="btn btn-primary">Добавить мед карту</button>
                </div>
            </form>


</body>
</html>