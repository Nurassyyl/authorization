<?php

require "db.php";
$id = $_GET['reg_id'];
$del = mysqli_query($connect, "DELETE FROM `user` WHERE `user`.`id` = $id");
// $delete = mysqli_fetch_array($del);
header("Location: /");


?>