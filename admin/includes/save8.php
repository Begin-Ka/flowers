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
$title8 = $_POST['title8'];
$value8 = $_POST['value8'];
$text8 = $_POST['text8'];
$description8 = $_POST['description8'];
$photo8 = $_POST['image8'];
$id8 = $_POST['id8'];


$save = "UPDATE `catalog-cart_6` SET `title8` = '$title8', `value8` = '$value8', `text8` = '$text8', `description8` = '$description8' WHERE `catalog-cart_6`.`id8` = $id8 ";

if ($connect->query($save) === TRUE) {
   header('Location: /admin/update8.php');
  } else {
          echo "Error: " . $save . "<br>" . $connect->error;
  }

$connect->close();
