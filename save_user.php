<?php

require "db.php";

$name = $_POST['name'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

// $password = md5($password);

$result = "SELECT * FROM `user` WHERE `name` = '$name' ";
$result = mysqli_query($connect, $result);
$num = mysqli_num_rows($result);
if ($num == 0) {
$sql = "INSERT INTO `user` (`id`, `name`, `fullname`, `email`, `password`, `password1`) VALUES (NULL, '$name', '$fullname', '$email', '$password','$password1')";
mysqli_query($connect, $sql);
header("Location: /");
}else {
  echo "Error";
}





?>