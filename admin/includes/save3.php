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
$title3 = $_POST['title3'];
$value3 = $_POST['value3'];
$text3 = $_POST['text3'];
$description3 = $_POST['description3'];
$photo3 = $_POST['image3'];
$id3 = $_POST['id3'];


$save = "UPDATE `catalog-cart_1` SET `title3` = '$title3', `value3` = '$value3', `text3` = '$text3', `description3` = '$description3' WHERE `catalog-cart_1`.`id3` = $id3 ";

if ($connect->query($save) === TRUE) {
   header('Location: /admin/update3.php');
  } else {
          echo "Error: " . $save . "<br>" . $connect->error;
  }

$connect->close();
