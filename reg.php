<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Авторизация</title>
</head>
<body>
  <header class="header">
    <form action="save_user.php" method="POST">
      <input type="text" name="name" placeholder="имя">
      <input type="text" name="fullname" placeholder="фамилия">
      <input type="email" name="email" placeholder="почта">
      <input type="password" name="password" placeholder="пароль">
      <input type="password" name="password1" placeholder="повторите пароль">
      <input type="submit" value="Зарегистрироваться">
    </form>
  </header> 
</body>
</html>

