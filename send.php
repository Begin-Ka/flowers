<?php

// получим данные с элементов формы
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//обработаем полученные данные (3 метода)
//1 метод -  преобразование символов в сущности (мнемоники)
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);

//2 метод - декодирование url
$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);

//3 метод - удаление пробельных символов с обоих сторон
$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$message = trim($message);

// отправляем данные на почту

if(mail("1215451b@gmail.com",
        "Новое письмо с сайта",
        "Имя:".$name."\n".
        "Email:".$email."\n".
        "Телефон:".$phone,
        "Сообщение:".$message,
        "From: absolutkrin@mail.ru \r\n")
){
    echo ('Письмо успешно отправлено!');
}
else {
    echo ('Есть ошибки! Проверьте данные....');
}



?>