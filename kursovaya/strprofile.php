<?php include "headet.php"; ?>
<?php
$id=$_SESSION['user_id'];
$conn = mysqli_connect("localhost", "root", "", "zoxan");
$query = $conn->query("SELECT * FROM users WHERE id='$id'");
$users = [];
while($user = mysqli_fetch_assoc($query))
{
    $users[] = $user;
}
if ($_SESSION['idrolle'] != 2){
    header("location:reg.php");
}
$query = $conn->query("SELECT * FROM medcarts");
$medcarts = [];
while ($medcart = mysqli_fetch_assoc($query)) {
    $medcarts[] = $medcart;
}

?>


<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
            <!-- ... Код для информации о пациенте ... -->
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="<?=$users[0]['avatars']?>" class="card-img-top" alt="Avatar">
                    <div class="card-body">
                        <h5 class="card-title"><?=$users[0]['fio']?></h5>
                        <p class="card-text"><?=$users[0]['date']?></p>
                        <p class="card-text"><?=$users[0]['sex']?></p>
                        <p class="card-text"><?=$users[0]['adres']?></p>
                        <p class="card-text"><?=$users[0]['telephone']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Медицинские карты пользователей</h5>
                        <ul class="list-group">
                            <?php foreach ($medcarts as $medcart): ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <p class="card-text"><?php
                                        $user_id=$medcart['user_id'];
                                        $query = $conn->query("SELECT * FROM users WHERE id='$user_id'");
                                       $us = mysqli_fetch_assoc($query);
                                        echo $us['fio'];

                                        ?></p>



                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#medcart<?=$medcart['id']?>" aria-expanded="false" aria-controls="medcart<?=$medcart['id']?>" id="toggleBtn<?=$medcart['id']?>">
                                        Развернуть
                                    </button>
                                    <button type="button" class="btn btn-warning btn-sm edit-btn" data-toggle="modal" data-target="#editModal" data-medcart-id="<?=$medcart['id']?>">
                                        Редактировать
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                        Удалить
                                    </button>

                                    <!-- Развернутая информация -->
                                    <div class="collapse" id="medcart<?=$medcart['id']?>">
                                        <div class="card card-body mt-2">
                                            <p><strong>Дата поступления:</strong> <?=$medcart['datepost']?></p>
                                            <p><strong>Диагноз:</strong> <?=$medcart['diagnoz']?></p>
                                            <p><strong>Лечение:</strong> <?=$medcart['heal']?></p>
                                            <p><strong>Доктор:</strong> <?=$medcart['doctor']?></p>
                                        </div>
                                    </div>
                                </li>
                                <script>
                                    $('#medcart<?=$medcart['id']?>').on('hidden.bs.collapse', function () {
                                        $('#toggleBtn<?=$medcart['id']?>').text('Развернуть');
                                    });
                                    $('#medcart<?=$medcart['id']?>').on('shown.bs.collapse', function () {
                                        $('#toggleBtn<?=$medcart['id']?>').text('Свернуть');
                                    });
                                </script>


                            <?php endforeach; ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Модальное окно для редактирования -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Редактировать карту</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Форма редактирования -->
                    <form id="editForm" method="post" action="">
                        <input type="hidden" name="medcart_id" id="medcartIdField" value="">
                        <div class="form-group">
                            <label for="editDoctor">Имя нового доктора</label>
                            <input type="text" class="form-control" id="editDoctor" name="doctor">
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Модальное окно для удаления -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Удалить карту?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Вы уверены, что хотите удалить эту карту?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-danger">Удалить</button>
            </div>
        </div>
    </div>
</div>

<!-- Подключение необходимых скриптов Bootstrap и jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>