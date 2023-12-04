<?php
session_start();
if(!empty($_SESSION['error'])){
echo $_SESSION['error'];
}
 include "headet.php";?>
<form class="form" method="post" action="login.php">
    <div class="row  w-25 mx-auto">
        <h1>Авторизация <span class="badge bg-secondary"></span></h1>
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" >
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" >
        <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto mt-3">Авторизация</button>
        <a class=" text-center icon-link-hover" href="index.php">
            Зарегистрироваться
            <svg class="bi " aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
        </a>
    </div>
</form>
