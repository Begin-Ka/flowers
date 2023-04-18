<?php

//Блок сайта №3 - КАТАЛОГ - карточка товара 6//

$title8 = $_POST['title8'];
$value8 = $_POST['value8'];
$text8 = $_POST['text8'];
$description8 = $_POST['description8'];
$photo8 = $_POST['image8'];


$servername = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'flowers';

$connect = mysqli_connect ($servername, $user, $password, $database);

// добавляем изображение (  добавить изображение нельязя, так как не предусмотрено по дизайну)
$path = "uploads/" . time() . $_FILES["image8"]["name"];
move_uploaded_file($_FILES["image8"]["tmp_name"], '../' .$path);

$photo8 = "admin/" . $path;

// добавляем текст и описание
$sql = "INSERT INTO `catalog-cart_6` (`id8`, `title8`, `value8`, `text8`, `description8`, `image8`) VALUES (8, '$title8', '$value8', '$text8','$description8','$photo8')";

if ($connect->query($sql) === TRUE) {
    header('Location: /admin/content.php');
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }

$connect->close();

?>
