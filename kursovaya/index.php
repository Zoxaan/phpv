<?php include "headet.php";
?>
<form class="form" method="post" action="reg.php" enctype="multipart/form-data">
    <div class="row  w-25 mx-auto">
        <h1>Регистрация <span class="badge bg-secondary"></span></h1>
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" >
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" >
        <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto mt-3">Зарегаться</button>
<input class="files" type="file" name="img">
    </div>

</form>
