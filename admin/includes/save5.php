<?php

session_start();

$login = "admin";
$password = "12345678";

if($_SESSION ["login"]!== $login || $_SESSION ["password"]!== $password) {
    header('Location: /admin/admin.php');
}

$servername = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'flowers';

$connect = mysqli_connect ($servername, $user, $password, $database);

//****************************************************
$title5 = $_POST['title5'];
$value5 = $_POST['value5'];
$text5 = $_POST['text5'];
$description5 = $_POST['description5'];
$photo5 = $_POST['image5'];
$id5 = $_POST['id5'];


$save = "UPDATE `catalog-cart_3` SET `title5` = '$title5', `value5` = '$value5', `text5` = '$text5', `description5` = '$description5' WHERE `catalog-cart_3`.`id5` = $id5 ";

if ($connect->query($save) === TRUE) {
   header('Location: /admin/update5.php');
  } else {
          echo "Error: " . $save . "<br>" . $connect->error;
  }

$connect->close();
