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
$title7 = $_POST['title7'];
$value7 = $_POST['value7'];
$text7 = $_POST['text7'];
$description7 = $_POST['description7'];
$photo7 = $_POST['image7'];
$id7 = $_POST['id7'];


$save = "UPDATE `catalog-cart_5` SET `title7` = '$title7', `value7` = '$value7', `text7` = '$text7', `description7` = '$description7' WHERE `catalog-cart_5`.`id7` = $id7 ";

if ($connect->query($save) === TRUE) {
   header('Location: /admin/update7.php');
  } else {
          echo "Error: " . $save . "<br>" . $connect->error;
  }

$connect->close();
