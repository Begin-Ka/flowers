<?php

//Блок сайта №3 - КАТАЛОГ - карточка товара 2//

$title4 = $_POST['title4'];
$value4 = $_POST['value4'];
$text4 = $_POST['text4'];
$description4 = $_POST['description4'];
$photo4 = $_POST['image4'];


$servername = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'flowers';

$connect = mysqli_connect ($servername, $user, $password, $database);

// добавляем изображение (  добавить изображение нельязя, так как не предусмотрено по дизайну)
$path = "uploads/" . time() . $_FILES["image4"]["name"];
move_uploaded_file($_FILES["image4"]["tmp_name"], '../' .$path);

$photo4 = "admin/" . $path;

// добавляем текст и описание
$sql = "INSERT INTO `catalog-cart_2` (`id4`, `title4`, `value4`, `text4`, `description4`, `image4`) VALUES (4, '$title4', '$value4', '$text4','$description4','$photo4')";

if ($connect->query($sql) === TRUE) {
    header('Location: /admin/content.php');
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }

$connect->close();

?>
