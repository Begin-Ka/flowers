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
$title9 = $_POST['title9'];
$value9 = $_POST['value9'];
$text9 = $_POST['text9'];
$description9 = $_POST['description9'];
$photo9 = $_POST['image9'];
$id9 = $_POST['id9'];


$save = "UPDATE `flowerstable3` SET `title9` = '$title9', `value9` = '$value9', `text9` = '$text9', `description9` = '$description9' WHERE `flowerstable3`.`id9` = $id9 ";

if ($connect->query($save) === TRUE) {
   header('Location: /admin/update9.php');
  } else {
          echo "Error: " . $save . "<br>" . $connect->error;
  }

$connect->close();
