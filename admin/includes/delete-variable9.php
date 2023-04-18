<?php

session_start();

$servername = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'flowers';

$connect = mysqli_connect ($servername, $user, $password, $database);

$login = "admin";
$password = "12345678";

if ($login == $_POST["login"] && $password == $_POST["password"]) {
    // audinth
    session_start();
    $_SESSION ["login"] = $_POST["login"];
    $_SESSION ["password"] = $_POST["password"];
    //echo "Вы авторизировались!";
    header('Location: /admin/content.php');
} 


$del = "DELETE FROM `flowerstable3` WHERE (`id9`)" ;

if ($connect->query($del) === TRUE) {
    header('Location: /admin/content.php');
  } else {
    echo "Error:" . $del . "<br>" . $connect->error;
  }





