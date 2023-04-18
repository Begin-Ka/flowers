<?php

//Блок сайта №3 - КАТАЛОГ - карточка товара 3//

$title5 = $_POST['title5'];
$value5 = $_POST['value5'];
$text5 = $_POST['text5'];
$description5 = $_POST['description5'];
$photo5 = $_POST['image5'];


$servername = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'flowers';

$connect = mysqli_connect ($servername, $user, $password, $database);

// добавляем изображение (  добавить изображение нельязя, так как не предусмотрено по дизайну)
$path = "uploads/" . time() . $_FILES["image5"]["name"];
move_uploaded_file($_FILES["image5"]["tmp_name"], '../' .$path);

$photo5 = "admin/" . $path;

// добавляем текст и описание
$sql = "INSERT INTO `catalog-cart_3` (`id5`, `title5`, `value5`, `text5`, `description5`, `image5`) VALUES (5, '$title5', '$value5', '$text5','$description5','$photo5')";

if ($connect->query($sql) === TRUE) {
    header('Location: /admin/content.php');
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }

$connect->close();

?>
