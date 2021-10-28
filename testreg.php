<?php

require "db.php";

$email = $_POST['email'];
$password = $_POST['password'];
// echo $email, $password;
$users = "SELECT * FROM `user` WHERE `email` = '$email'";
$pass = "SELECT * FROM `user` WHERE `password` = '$password'";
$users = mysqli_query($connect, $users);
$num_email = mysqli_num_rows($users);
$pass = mysqli_query($connect, $pass);
$num_pass = mysqli_num_rows($pass);
if ($num_email >= 1 and $num_pass >= 1 ) {
   header("Location: page_profil.php");
}else {
  echo "Error";
}

?>