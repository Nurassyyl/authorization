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
    <form action="testreg.php" method="POST">
      <input type="email" name="email" placeholder="почта">
      <input type="password" name="password" placeholder="пароль">
      <input type="submit" value="вход">
      <a href="reg.php">Зарегистрируйтесь</a>
    </form>

<?php

require "db.php";
$delete = '<a href="delete.php">Удалить</a>';
$result = mysqli_query($connect, "SELECT * FROM `user`");
foreach ($result as $results) {
  ?>
  <!-- <p><?php echo $results['id']; ?></p> -->
  <p><?php echo $results['name']; ?></p>
  <p><?php echo " "; ?></p>
  <p><?php echo $results['fullname']; ?></p>
  <p><?php echo " "; ?></p>
  <p><?php echo $results['email']; ?></p>
  <p><?php echo " "; ?></p>
  <p><a href="delete.php.?reg_id=<?=$results['id'];?>">удалить</a></p>
  <?php
}

?>


  </header> 
</body>
</html>



