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
$title2 = $_POST['title2'];
$value2 = $_POST['value2'];
$text2 = $_POST['text2'];
$description2 = $_POST['description2'];
$photo2 = $_POST['image2'];
$id2 = $_POST['id2'];


$save = "UPDATE `flowerstable2` SET `title2` = '$title2', `value2` = '$value2', `text2` = '$text2', `description2` = '$description2' WHERE `flowerstable2`.`id2` = $id2 ";

if ($connect->query($save) === TRUE) {
   header('Location: /admin/update2.php');
  } else {
          echo "Error: " . $save . "<br>" . $connect->error;
  }

$connect->close();
