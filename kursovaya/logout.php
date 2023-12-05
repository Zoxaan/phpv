<?php
session_start();

// Уничтожение сессии и перенаправление на главную страницу
session_destroy();
header("Location: glavnaya.php");
exit();
?>
