<?php 

// Создаем соединение
$link = new PDO('mysql:host=localhost;dbname=zoxan', 'root', '');
$password=$_POST["password"];
$username=$_POST["username"];
$imgName = time() .'_'. $_FILES['img']['name'];
$img_filder = __DIR__."/avatars/" . $imgName;
$imgtemp = $_FILES['img']['tmp_name'];
$result = move_uploaded_file($imgtemp, $img_filder);
$q = $link->prepare("INSERT INTO users (password,username,idrolle,avatars) VALUES  (:password,:username,:idrolle,:avatars) ");
$q->execute([
    "username"=>$username,
    "password"=>password_hash($password,PASSWORD_DEFAULT),
    "idrolle"=>1,
    "avatars"=>$imgName,
]);
header('Location: user.php');
?>

 