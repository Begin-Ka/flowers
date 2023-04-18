<?php

//require_once "connect.php";
//Блок сайта №1//

$id = $_POST['id'];
$title = $_POST['title'];
$value = $_POST['value'];
$text = $_POST['text'];
$description = $_POST['description'];
$photo = $_POST['image'];


$servername = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'flowers';

$connect = mysqli_connect ($servername, $user, $password, $database);

// добавляем изображение
$path = "uploads/" . time() . $_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"], '../' .$path);

$photo = "admin/" . $path;

// добавляем текст и описание
$sql = "INSERT INTO flowerstable (id, title, value, text, description, image)VALUES (1, '$title', '$value', '$text','$description','$photo')";

if ($connect->query($sql) === TRUE) {
    header('Location: /admin/content.php');
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }

$connect->close();



?>



