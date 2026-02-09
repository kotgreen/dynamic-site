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

  <!-- блок карусели START-->
  <div class="container">
    <div class="row">
      <h2 class="slider-title">Топ публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
      <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div> -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/image_1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption-hack carousel-caption d-none d-md-block">
            <h5><a href="#">First slide label</a></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/image_2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption-hack carousel-caption d-none d-md-block">
            <h5><a href="#">Second slide label</a></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/image_3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption-hack carousel-caption d-none d-md-block">
            <h5><a href="#">Third slide label</a></h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- блок карусели END -->

  <!-- блок main START-->
  <div class="container">
    <div class="content row">
      <!-- Main content -->
      <div class="main-content col-md-9 col-12">
        <h2>Последние публикации</h2>

        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="images/img4.png" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3><a href="#">Статья на тему динамического сайта...</a></h3>
            <i class="far fa-user"> Имя Автора</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A sit facilis nulla.
              Minus deserunt vero corrupti, placeat saepe quidem quos quam laborum iure a quia.
            </p>
          </div>
        </div>

        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="images/img4.png" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3><a href="#">Статья на тему динамического сайта...</a></h3>
            <i class="far fa-user"> Имя Автора</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A sit facilis nulla.
              Minus deserunt vero corrupti, placeat saepe quidem quos quam laborum iure a quia.
            </p>
          </div>
        </div>


        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="images/img4.png" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3><a href="#">Статья на тему динамического сайта...</a></h3>
            <i class="far fa-user"> Имя Автора</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A sit facilis nulla.
              Minus deserunt vero corrupti, placeat saepe quidem quos quam laborum iure a quia.
            </p>
          </div>
        </div>


        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="images/img4.png" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3><a href="#">Статья на тему динамического сайта...</a></h3>
            <i class="far fa-user"> Имя Автора</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A sit facilis nulla.
              Minus deserunt vero corrupti, placeat saepe quidem quos quam laborum iure a quia.
            </p>
          </div>
        </div>


        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="images/img4.png" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3><a href="#">Статья на тему динамического сайта...</a></h3>
            <i class="far fa-user"> Имя Автора</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A sit facilis nulla.
              Minus deserunt vero corrupti, placeat saepe quidem quos quam laborum iure a quia.
            </p>
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