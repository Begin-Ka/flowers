<?php

//Блок сайта №3 - КАТАЛОГ - карточка товара 4//

$title6 = $_POST['title6'];
$value6 = $_POST['value6'];
$text6 = $_POST['text6'];
$description6 = $_POST['description6'];
$photo6 = $_POST['image6'];


$servername = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'flowers';

$connect = mysqli_connect ($servername, $user, $password, $database);

// добавляем изображение (  добавить изображение нельязя, так как не предусмотрено по дизайну)
$path = "uploads/" . time() . $_FILES["image6"]["name"];
move_uploaded_file($_FILES["image6"]["tmp_name"], '../' .$path);

$photo6 = "admin/" . $path;

// добавляем текст и описание
$sql = "INSERT INTO `catalog-cart_4` (`id6`, `title6`, `value6`, `text6`, `description6`, `image6`) VALUES (6, '$title6', '$value6', '$text6','$description6','$photo6')";

if ($connect->query($sql) === TRUE) {
    header('Location: /admin/content.php');
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }

$connect->close();

?>
