<?php
$conn = mysqli_connect("localhost", "root", "", "zoxan");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}

$cartsnomer=$_POST["cartsnomer"];
$pacientnomer=$_POST["pacientnomer"];
$datecarts=$_POST["datecarts"];
$status=$_POST["status"];
$sql = "INSERT INTO medcarts (cartsnomer, pacientnomer,date,status) VALUES ('$cartsnomer', '$pacientnomer', '$datecarts', '$status')";
if(mysqli_query($conn, $sql)){
    echo "Мед карта успешно добавлена";
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
