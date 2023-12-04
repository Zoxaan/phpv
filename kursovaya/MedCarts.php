<!doctype html>
<?php include "headet.php";?>
<?php
$conn = mysqli_connect("localhost", "root", "", "zoxan");
$query = $conn->query("SELECT * FROM pacients");
while($pacient = mysqli_fetch_assoc($query))
{
    $pacients[] = $pacient;
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
        <label for="inputEmail4" class="form-label">№Номер карты</label>
        <input type="text" class="form-control" name="cartsnomer">
    </div>

    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Дата создания</label>
            <input type="text" class="form-control" name="datecarts">
        </div>
        <div class="col-md-6">
        <select class="form-select" name="pacientnomer" id="cars">
            <?php foreach ($pacients as $pacient): ?>
            <option name="pacientnomer" value="<?=$pacient['id']?>"><?= $pacient['name'] ?></option>
            <?php endforeach; ?>
        </select>
        </div>
            <div class="col-md-6">
            <select  class="form-select" name="status" id="cars">
                <option name="status" value="готов">готов</option>
                <option name="status" value="На обработке">На обработке</option>
                <option name="status" value="не готов">не готов</option>
            </select>
            </div>
            <form class="row g-3">
                <div class="col-6">
                    <button onclick="da()" type="submit" class="btn btn-primary">Добавить мед карту</button>
                </div>
            </form>


</body>
</html>