

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
          $upload='../../img/stock/' .$_FILES['im'] ['name'];

          if(move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "<h1 class='mt-10' style='text-aling:center'>Фаил загружен</h1>";
          else echo "Ошибка загрузки";
        }
        else exit("Размер фаила привышен");
      }
      else exit("Размер фаила Фаил не подходит");
}
?>
<?php
  $name=$_POST['name'];
  $filename=$_POST['filename'];
  $description=$_POST['description'];
  $date=$_POST['date'];
  $url=$_SERVER['REQUEST_URI'];
  $url=explode('/', $url);
  $str=$url[4];
  $sql="UPDATE stock SET name=:name, description=:description, date=:date, filename=:filename WHERE id=$str ";
  $query=$pdo->prepare($sql);
  $query->execute(["name"=>$name, "description"=>$description, "date"=>$date, "filename"=>$_FILES['im'] ['name']] );
  
  
 echo '<meta HTTP-EQUIV="Refresh" Content="2; URL=../stock.php">'?>