
<?php include "headet.php";?>
<?php
$conn = mysqli_connect("localhost", "root", "", "zoxan");
$query = $conn->query("SELECT * FROM medcarts");
while($medcart = mysqli_fetch_assoc($query))
{
    $medcarts[] = $medcart;
}
?>
<h2>Медицинские карты  </h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">номер карты</th>
        <th scope="col">номер пациента</th>
        <th scope="col">Дата</th>
        <th scope="col">Статус</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($medcarts as $medcart): ?>
        <tr>
            <th>  <?= $medcart['id'] ?></th>
            <td> <?= $medcart['cartsnomer'] ?></td>
            <td> <?= $medcart['pacientnomer'] ?></td>
            <td> <?= $medcart['date'] ?></td>
            <td><?= $medcart['status'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>