<?php

//Блок сайта №3 - КАТАЛОГ - карточка товара 5//

$title7 = $_POST['title7'];
$value7 = $_POST['value7'];
$text7 = $_POST['text7'];
$description7 = $_POST['description7'];
$photo7 = $_POST['image7'];


$servername = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'flowers';

$connect = mysqli_connect ($servername, $user, $password, $database);

// добавляем изображение (  добавить изображение нельязя, так как не предусмотрено по дизайну)
$path = "uploads/" . time() . $_FILES["image7"]["name"];
move_uploaded_file($_FILES["image3"]["tmp_name"], '../' .$path);

$photo7 = "admin/" . $path;

// добавляем текст и описание
$sql = "INSERT INTO `catalog-cart_5` (`id7`, `title7`, `value7`, `text7`, `description7`, `image7`) VALUES (7, '$title7', '$value7', '$text7','$description7','$photo7')";

if ($connect->query($sql) === TRUE) {
    header('Location: /admin/content.php');
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }

$connect->close();

?>
