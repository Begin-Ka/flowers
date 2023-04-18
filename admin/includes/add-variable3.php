<?php

//Блок сайта №4 - контакты//

$title9 = $_POST['title9'];
$value9 = $_POST['value9'];
$text9 = $_POST['text9'];
$description9 = $_POST['description9'];
$photo9 = $_POST['image9'];


$servername = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'flowers';

$connect = mysqli_connect ($servername, $user, $password, $database);

// добавляем изображение (  добавить изображение нельязя, так как не предусмотрено по дизайну)
//$path = "uploads/" . time() . $_FILES["image2"]["name"];
//move_uploaded_file($_FILES["image2"]["tmp_name"], '../' .$path);

//$photo2 = "admin/" . $path;

// добавляем текст и описание
$sql = "INSERT INTO `flowerstable3` (`id9`, `title9`, `value9`, `text9`, `description9`, `image9`) VALUES (9, '$title9', '$value9', '$text9','$description9','$photo9')";

if ($connect->query($sql) === TRUE) {
    header('Location: /admin/content.php');
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }

$connect->close();

?>

