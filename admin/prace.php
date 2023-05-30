<?php session_start(); ?>
<?php require_once '../function/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Все товары</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/card.css">
</head>

<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h4 class="my-0 mr-md-auto font-weight-bog">Админ панель магазина Sweet Store</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 btn btn-primary" href="../index.php">На Главную</a>
      <a class="p-2 btn btn-primary" href="../admin.php">Разделы редоктирования</a>
      <a class="p-2 btn btn-primary" href="slider.php">Банер</a>
      <a class="p-2 btn btn-primary" href="#">Все товары </a>
      <a class="p-2 btn btn-primary" href="stat-baner.php">Статичный банер</a>
      <a class="p-2 btn btn-primary" href="stock.php">Акции</a>
    </nav>
    <a class="btn btn-outline-primary" href="../logout.php">Выйти</a>
  </div>

  <div class="" style="text-align:center">
    <?php if (!empty($_SESSION["login"])): ?>
      <section class="jumbotron text-center">
        <div class="container">
          <?php echo '<h1 class="jumbotron-heading"> Добрый день: ' . $_SESSION['login'] . '</h1>'; ?>
          <p class="lead text-muted">Сегодня:
            <?php echo date("d.m.Y") ?>
          </p>
          <p>Редоктирование всех товаров
          </p>
        </div>
      </section>
    </div>

    <div class="album  bg-light w-100 ">
      <div class="container">
        <div class="row">
          <div class="card card1 ml-3 ">
            <div class="row ">
              <div class="col-md-5">
                <img src="../img/107.png" alt="" width="200" class="mt-2">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <form action="/admin/prace/prace.php" method="POST" enctype="multipart/form-data" class="">
                    <h6 class="card-title">Введите новый Товар
                    </h6>
                    <p>Имя товара<br>
                      <input type="text" name="name" value="Имя товар" class=" card-text mt-2 "><br>
                      Цена<br>
                      <input type="text" name="sales" value="Цена" class="card-text mt-2 "><br>
                      Скидочная цена <br>
                      <input type="text" name="hotsales" value="Цена со скидкой" class="card-text mt-2 "><br>
                      Описание товара<br>
                      <textarea name="description" id="" cols="22" rows="4" class=" card-text mt-2 "></textarea></br>

                      Выберите категорию товара<br>
                      <select size="1" name="categories">
                        
                        <option value="Конфеты">Конфеты</option>
                        <option value="Шоколад">Шоколад</option>
                        <option value="Напитки">Напитки</option>
                        <option value="Зефир">Зефир</option>
                        <option value="Мармелад">Мармелад</option>
                      </select> <br> <br>
                      Загрузка картинки<br>
                      <input type="file" name="im" class="card-text mt-2">
                    </p>
                    <input type="submit" name="save" value="Сохранить" class="btn btn-primary">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php $sql = $pdo->prepare("SELECT * FROM prace");
          $sql->execute();
          while ($res = $sql->fetch(PDO::FETCH_OBJ)): ?>
            <div class="card card1 ml-3 ">
              <div class="row ">
                <div class="col-md-5">
                  <img src="../img/prace/<?php echo $res->filename ?>" alt="" width="200" class="mt-2">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="/admin/prace/deletprace.php/<?php echo $res->id ?>" method="POST"
                      enctype="multipart/form-data" class="">
                      <h6 class="card-title">Товар:
                        <?php echo $res->name ?> <br>
                        ID товара:
                        <?php echo $res->id ?>
                      </h6>
                      <p>Имя товара<br>
                        <input type="text" name="name" value="<?php echo $res->name ?>" class=" card-text mt-2 "><br>
                        Цена<br>
                        <input type="text" name="sales" value="<?php echo $res->sales ?>" class="card-text mt-2 "><br>
                        Скидочная цена <br>
                        <input type="text" name="hotsales" value="<?php echo $res->hotsales ?>" class="card-text mt-2 "><br>
                        Описание товара<br>
                        <textarea name="description" id="<?php echo $res->id ?>" cols="22" rows="4"
                          value="<?php echo $res->description ?>"
                          class=" card-text mt-2 "><?php echo $res->description ?></textarea></br>
                        Имя картинки<br>
                        <input type="text" name="filename" value="<?php echo $res->filename ?>" class="card-text mt-2 "><br>
                        Категория<br>
                        <input type="text" name="categories" value="<?php echo $res->categories ?>"
                          class="card-text mt-2"><br>
                        Загрузка картинки<br>
                        <input type="file" name="im" class="card-text mt-2">
                      </p>
                      <button type="submit" name="update" value="Сохранить" class="btn btn-primary">Сохранить</button>
                      <button type="submit" name="delete" value="Удалить" class="btn btn-primary"
                        style="margin-top: 2px;">Удалить</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile ?>
        </div>
      </div>

    <?php else:
      echo '<h2>Доступ закрыт</h2><br>';
      echo '<a href="/" class="btn btn-primary">На главную</a>';
      ?>





    <?php endif ?>
  </div>