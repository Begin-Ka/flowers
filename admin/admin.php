<?php 
    session_start();

    $login = "admin";
    $password = "12345678";

    if($_SESSION ["login"]=== $login && $_SESSION ["password"]=== $password) {
        header('Location: /admin/content.php');
    }
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="admin.css">

    <title>Панель администратора сайта</title>

</head>
<body>
    <div class='wrapper'>
        <main class='main' id='main'>
            <?echo $echo;?>
        </main>
    </div>

    <!--Form inter-->

    <!--$echo = -->
    <div class='table'>
        <div class='table-wrapper'>            
            <div class='table-title'>Войти в <br>панель администратора</div>
            <div class='table-content'>
                <form action="includes/login.php" method='post' id='login-form' class='login-form'>
                    <input type='text' placeholder='Логин' class='input'name='login' required><br>
                    <input type='password' placeholder='Пароль' class='input'name='password' required><br>
                    <input type='submit' value='Войти' class='button'>
                </form>
            </div>
        </div>
    </div>

    <!--Form inter-->
    
</body>
</html>
