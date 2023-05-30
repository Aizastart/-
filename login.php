<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Вход в админ панель</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body >


  <form action="admin/admin.php"  method="post" class=" form-signin p-3" style='text-align:center'>
      <img class="mb-4" src="img/sweet/ava.png" alt="" width="72" height="72" style='text-align:center'>
      <h1 class="h3 mb-3 font-weight-normal">Вход в Админ панель</h1>
      <label for="inputEmail" class="sr-only">Логин</label>
      <input type="text" name="login" id="lodin" class="form-control mb-3 " placeholder="Введите логин" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Введите пароль" required="">
      <div class="checkbox mb-3">
        
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      
    </form>
  
</body>
</html>