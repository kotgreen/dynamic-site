<?php
session_start();
include '../../path.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-CfCrinSRH2IR6a4e6fy2q6ioOX7O6Mtm1L9vRvFZ1trBncWmMePhzvafv7oIcWiW" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

    <title>Hello world!</title>
</head>

<body>

    <?php include("../../app/include/header-admin.php"); ?>

    <div class="container">
        <?php include "../../app/include/sidebar-admin.php"; ?>

        <div class="posts col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/users/create.php"; ?>" class="col-2 btn btn-success">Создать</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/users/index.php"; ?>" class="col-2 btn btn-secondary">Редактировать</a>
            </div>
            <div class="row title-table">
                <h2>Создать пользователя</h2>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Логин</label>
                        <input name="login" value="<?= $login; ?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="введите логин">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="mail" value="<?= $email; ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите email">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2">
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>User</option>
                        <option value="1">Admin</option>
                    </select>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer START-->
    <?php include("../../app/include/footer.php"); ?>
    <!-- footer END-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    -->
</body>

</html>