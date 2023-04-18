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
$title = $_POST['title'];
$value = $_POST['value'];
$text = $_POST['text'];
$description = $_POST['description'];
$photo = $_POST['image'];
$id = $_POST['id'];


$save = "UPDATE `flowerstable` SET `title` = '$title', `value` = '$value', `text` = '$text', `description` = '$description' WHERE `flowerstable`.`id` = $id ";

if ($connect->query($save) === TRUE) {
   header('Location: /admin/update.php');
  } else {
          echo "Error: " . $save . "<br>" . $connect->error;
  }

$connect->close();

