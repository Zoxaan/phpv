<?php include "headet.php"; ?>
<?php
$id=$_SESSION['user_id'];
$conn = mysqli_connect("localhost", "root", "", "zoxan");
$query = $conn->query("SELECT * FROM users WHERE id='$id'");
while($user = mysqli_fetch_assoc($query))
{
    $users[] = $user;
}
if ($_SESSION['idrolle'] != 2){
    header("location:reg.php");
}
?>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="avatar.jpg" class="card-img-top" alt="Avatar">
                <div class="card-body">
                    <h5 class="card-title">Имя Фамилия</h5>
                    <p class="card-text">Дата рождения: 01.01.2000</p>
                    <p class="card-text">Пол: Мужской</p>
                    <p class="card-text">Адрес: г. Москва, ул. Пушкина, д. 1</p>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Медицинские карты</h5>
                    <a class="btn btn-primary" href="MedCarts.php" role="button">Добавить мед.карту</a>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Карта 1
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">
                                    Редактировать
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                    Удалить
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Карта 2
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">
                                    Редактировать
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                    Удалить
                                </button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Карта 3
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">
                                    Редактировать
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                    Удалить
                                </button>
                            </div>
                        </li>
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
                <form>
                    <div class="form-group">
                        <label for="editCard">Новое название карты</label>
                        <input type="text" class="form-control" id="editCard">
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