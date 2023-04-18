<?php

$login = "admin";
$password = "12345678";

if ($login == $_POST["login"] && $password == $_POST["password"]) {
    // audinth
    session_start();
    $_SESSION ["login"] = $_POST["login"];
    $_SESSION ["password"] = $_POST["password"];
    //echo "Вы авторизировались!";
    header('Location: /admin/content.php');
} else {
    echo "Логин или пароль не верны!";
}