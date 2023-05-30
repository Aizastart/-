<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Админ панель</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h4 class="my-0 mr-md-auto font-weight-bog">Админ панель магазина Sweet Store</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 btn btn-primary" href="../index.php">На Главную</a>
      <a class="p-2 btn btn-primary" href="#">Разделы редоктирования</a>
      <a class="p-2 btn btn-primary" href="admin/slider.php">Банер</a>
      <a class="p-2 btn btn-primary" href="admin/prace.php">Все товары </a>
      <a class="p-2 btn btn-primary" href="admin/stat-baner.php">Статичный банер </a>
      <a class="p-2 btn btn-primary" href="admin/stock.php">Акции </a>
      </nav>
    <a class="btn btn-outline-primary" href="logout.php">Выйти</a>
  </div>
  <div class="" style="text-align:center">
    <?php if (!empty($_SESSION["login"])): ?>
      <main role="main">
        <section class="jumbotron text-center">
          <div class="container">
            <?php echo '<h1 class="jumbotron-heading"> Добрый день: ' . $_SESSION['login'] . '</h1>'; ?>
            <p class="lead text-muted">Сегодня:
              <?php echo date("d.m.Y") ?>
            </p>
            <p>Вы готовы поработа? <br>
              Выбирете раздел редоктирования...
            </p>
          </div>
        </section>
        <div class="album py-5 bg-light">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top"
                    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                    alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="img/titul.png"
                    data-holder-rendered="true">
                  <div class="card-body">
                    <p class="card-text">Банер</p>
                    <div class="d-flex justify-content-center align-items-center">
                      <div class="btn-group">
                        <a href="admin/slider.php" class="btn btn-primary ">Редактировать</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top"
                    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                    alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                    src="img/prace/Все_товары.png" data-holder-rendered="true">
                  <div class="card-body">
                    <p class="card-text">Все товары</p>
                    <div class="d-flex justify-content-center align-items-center">
                      <div class="btn-group">
                        <a href="admin/prace.php" class="btn btn-primary ">Редактировать</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top"
                    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                    alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                    src="img/Статичный банер.png" data-holder-rendered="true">
                  <div class="card-body">
                    <p class="card-text">Статичный банер</p>
                    <div class="d-flex justify-content-center align-items-center">
                      <div class="btn-group">
                        <a href="admin/stat-baner.php" class="btn btn-primary ">Редактировать</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top"
                    data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                    alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="img/Акции.png"
                    data-holder-rendered="true">
                  <div class="card-body">
                    <p class="card-text">Акции</p>
                    <div class="d-flex justify-content-center align-items-center">
                      <div class="btn-group">
                        <a href="admin/stock.php" class="btn btn-primary ">Редактировать</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </main>

    <?php else:
      echo '<h2>Доступ закрыт</h2><br>';
      echo '<a href="/" class="btn btn-primary">На главную</a>';
      ?>
    <?php endif ?>
  </div>
</body>

</html>