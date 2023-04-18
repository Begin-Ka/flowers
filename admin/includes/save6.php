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
$title6 = $_POST['title6'];
$value6 = $_POST['value6'];
$text6 = $_POST['text6'];
$description6 = $_POST['description6'];
$photo6 = $_POST['image6'];
$id6 = $_POST['id6'];


$save = "UPDATE `catalog-cart_4` SET `title6` = '$title6', `value6` = '$value6', `text6` = '$text6', `description6` = '$description6' WHERE `catalog-cart_4`.`id6` = $id6 ";

if ($connect->query($save) === TRUE) {
   header('Location: /admin/update6.php');
  } else {
          echo "Error: " . $save . "<br>" . $connect->error;
  }

$connect->close();
