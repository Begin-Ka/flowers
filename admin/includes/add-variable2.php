<?php

//Блок сайта №2//

$title2 = $_POST['title2'];
$value2 = $_POST['value2'];
$text2 = $_POST['text2'];
$description2 = $_POST['description2'];
$photo2 = $_POST['image2'];


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
$sql = "INSERT INTO `flowerstable2` (`id2`, `title2`, `value2`, `text2`, `description2`, `image2`) VALUES (2, '$title2', '$value2', '$text2','$description2','$photo2')";

if ($connect->query($sql) === TRUE) {
    header('Location: /admin/content.php');
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }

$connect->close();

?>

