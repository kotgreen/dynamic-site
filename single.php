<?php include("path.php"); ?>

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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

    <title>Hello world!</title>
</head>

<body>
    <?php include("app/include/header.php"); ?>

    <!-- блок main START-->
    <div class="container">
        <div class="content row">
            <!-- Main content -->
            <div class="main-content col-md-9 col-12">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nostrum, itaque omnis ducimus quisquam rem ad veritatis repellendus ratione.</h2>

                <div class="single_post row">
                    <div class="img col-12">
                        <img src="images/image_3.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="info">
                        <i class="far fa-user"> Имя Автора</i>
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                    </div>
                    <div class="single_post_text col-12">
                        <h3>Заголовок третьего уровня</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam perferendis libero
                            veritatis rerum nesciunt, molestiae culpa blanditiis fugit! Optio maxime voluptates soluta
                            voluptas voluptatem atque perferendis, explicabo eum distinctio dolorum?</p>
                        <p>Lorem, ipsum dolor sit amet <a href="">consectetur</a> adipisicing elit. Pariatur qui fuga,
                            in non facilis,
                            et optio explicabo molestias error labore voluptate, ipsum odit perspiciatis earum. Libero
                            commodi iure illo. Aperiam.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci tenetur enim quis
                            quibusdam, nulla doloremque quisquam ex fugit perspiciatis quaerat quas nostrum nihil sit ab
                            veritatis repudiandae sint rem dicta!</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, error voluptatum incidunt sit
                            temporibus corrupti quia nesciunt optio nobis quod eveniet, dolore deserunt totam
                            praesentium saepe quisquam architecto nostrum! Corrupti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, error voluptatum incidunt sit
                            temporibus corrupti quia nesciunt optio nobis quod eveniet, dolore deserunt totam
                            praesentium saepe quisquam architecto nostrum! Corrupti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, error voluptatum incidunt sit
                            temporibus corrupti quia nesciunt optio nobis quod eveniet, dolore deserunt totam
                            praesentium saepe quisquam architecto nostrum! Corrupti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, error voluptatum incidunt sit
                            temporibus corrupti quia nesciunt optio nobis quod eveniet, dolore deserunt totam
                            praesentium saepe quisquam architecto nostrum! Corrupti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, error voluptatum incidunt sit
                            temporibus corrupti quia nesciunt optio nobis quod eveniet, dolore deserunt totam
                            praesentium saepe quisquam architecto nostrum! Corrupti.</p>
                    </div>
                </div>

            </div>
            <!-- sidebar content -->
            <div class="sidebar col-md-3 col-12">

                <div class="section search">
                    <h3>Поиск</h3>
                    <form action="/" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
                    </form>
                </div>

                <div class="section topics">
                    <h3>Категории</h3>
                    <ul>
                        <li><a href="#"></a>Программирование</li>
                        <li><a href="#"></a>Дизайн</li>
                        <li><a href="#"></a>Визуализация</li>
                        <li><a href="#"></a>Кейсы</li>
                        <li><a href="#"></a>Мотивация</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- блок main END-->
    <!-- footer START-->
    <?php include("app/include/footer.php"); ?>
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