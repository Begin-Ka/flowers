<?php

//Блок сайта №3 - КАТАЛОГ - карточка товара 1//

$title3 = $_POST['title3'];
$value3 = $_POST['value3'];
$text3 = $_POST['text3'];
$description3 = $_POST['description3'];
$photo3 = $_POST['image3'];


$servername = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'flowers';

$connect = mysqli_connect ($servername, $user, $password, $database);

// добавляем изображение (  добавить изображение нельязя, так как не предусмотрено по дизайну)
$path = "uploads/" . time() . $_FILES["image3"]["name"];
move_uploaded_file($_FILES["image3"]["tmp_name"], '../' .$path);

$photo3 = "admin/" . $path;

// добавляем текст и описание
$sql = "INSERT INTO `catalog-cart_1` (`id3`, `title3`, `value3`, `text3`, `description3`, `image3`) VALUES (3, '$title3', '$value3', '$text3','$description3','$photo3')";

if ($connect->query($sql) === TRUE) {
    header('Location: /admin/content.php');
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }

$connect->close();

?>
