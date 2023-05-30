

<?php
$user="root";
$password="";
$host="localhost";
$db="bd_sweet";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo = new PDO($dbh, $user, $password);
?>


<?php
if(isset($_POST["save"])){

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
  $name = $_POST['name'];
  $sales = $_POST['sales'];
  $hotsales = $_POST['hotsales'];
  $description = $_POST['description'];
  $filename = $_POST['filename'];
  $categories = $_POST['categories'];
  
  $sql = "INSERT INTO prace (name, sales, hotsales, description, filename, categories) VALUES (:name, :sales, :hotsales, :description, :filename, :categories)";
  $query = $pdo->prepare($sql);
  $query->execute([
      'name' => $name,
      'sales' => $sales,
      'hotsales' => $hotsales,
      'description' => $description,
      'filename' => $_FILES['im'] ['name'],
      'categories' => $categories
  ]);
  
  echo '<meta HTTP-EQUIV="Refresh" Content="1; URL=../prace.php">';
  ?>