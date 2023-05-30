

<?php
$user="root";
$password="";
$host="localhost";
$db="bd_sweet";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo = new PDO($dbh, $user, $password);
?>

<?php if(isset($_POST["update"])){

$list=['.php', '.zip', '.js', '.rar', '.html', '.exe'];
  foreach($list as $item){
    if(preg_match("/$item$/", $_FILES['im'] ['name'])) exit("Расширение не подходит");
  }
  $type=getimagesize($_FILES['im'] ['tmp_name']);
    if($type && ($type['mime'] !='image/jpg' || $type['mime'] !='image/png' || $type['mime'] !='image/jpeg')){
      if($_FILES['im']['name']<1024*1000){
        $upload='../../img/prace/' .$_FILES['im'] ['name'];

        if(move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "<h1 class='mt-10' style='text-aling:center'>Фаил загружен</h1>";
        else echo "Ошибка загрузки";
      }
      else exit("Размер фаила привышен");
    }
    else exit("Размер фаила Фаил не подходит");
}
?>

<?php
// Подключение к базе данных


// Обработка обновления
if (isset($_POST['update'])) {
  $id = $_GET['id']; // Получение ID записи из URL или другого места

  // Получение данных из формы
  $name = $_POST['name'];
  $sales = $_POST['sales'];
  $hotsales = $_POST['hotsales'];
  $description = $_POST['description'];
  $filename = $_POST['filename'];
  $categories = $_POST['categories'];
  $url=$_SERVER['REQUEST_URI'];
  $url=explode('/', $url);
  $str=$url[4];

  // Подготовка и выполнение SQL-запроса для обновления записи в базе
  
  $sql="UPDATE prace SET name=:name, sales=:sales, hotsales=:hotsales, description=:description, filename=:filename, categories=:categories WHERE id=$str" ;
  $query=$pdo->prepare($sql);
  $query->execute(["name"=>$name, "sales"=>$sales, "hotsales"=>$hotsales, "description"=>$description,  
   "filename"=>$_FILES['im'] ['name'], "categories"=>$categories ]);
  

  // Дополнительные действия, например, перенаправление пользователя
  echo '<meta HTTP-EQUIV="Refresh" Content="1; URL=../prace.php">';
  exit();
}


// Обработка удаления
if (isset($_POST['delete'])) {
  
  $url=$_SERVER['REQUEST_URI'];
  $url=explode('/', $url);
  $str=$url[4];

  // Подготовка и выполнение SQL-запроса для удаления записи из базы
  $statement = $pdo->prepare("DELETE FROM prace WHERE id = $str");
  $statement->bindParam(':id', $id);
  $statement->execute();

  // Дополнительные действия, например, перенаправление пользователя
  echo '<meta HTTP-EQUIV="Refresh" Content="1; URL=../prace.php">';
  exit();
}
?>

