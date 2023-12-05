<?php include "headet.php";
?>
<form class="row g-3" method="post" action="reg.php"  enctype="multipart/form-data">
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Фамилия Имя Отчество</label>
        <input type="text" class="form-control" name="fio">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Дата рождения</label>
        <input type="date" class="form-control" name="date">
    </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Пол</label>
            <input type="text" class="form-control" name="sex">
        </div>

        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Адрес проживания</label>
                <input type="text" class="form-control" name="adres">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Номер телефона</label>
                <input type="text" class="form-control" name="telephone">
            </div>

<div class="tur" style=" width: 25%;">
            <div class="">
                <label for="inputEmail4" class="form-label">Логин</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="">
                <label for="inputEmail4" class="form-label">Пароль</label>
                <input type="text" class="form-control" name="password">
                <input class="files" type="file" name="avatars" style="padding-top: 5%;">
            </div>
    <div class="form"style="padding-top: 5%;">
        <button  type="submit" class="btn btn-primary">Зарегестрироваться</button>
    </div>
            </form>


