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
$title4 = $_POST['title4'];
$value4 = $_POST['value4'];
$text4 = $_POST['text4'];
$description4 = $_POST['description4'];
$photo4 = $_POST['image4'];
$id4 = $_POST['id4'];


$save = "UPDATE `catalog-cart_2` SET `title4` = '$title4', `value4` = '$value4', `text4` = '$text4', `description4` = '$description4' WHERE `catalog-cart_2`.`id4` = $id4 ";

if ($connect->query($save) === TRUE) {
   header('Location: /admin/update4.php');
  } else {
          echo "Error: " . $save . "<br>" . $connect->error;
  }

$connect->close();
