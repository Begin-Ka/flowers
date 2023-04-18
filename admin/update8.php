<?php

session_start();

    $login = "admin";
    $password = "12345678";

    if($_SESSION ["login"]!== $login || $_SESSION ["password"]!== $password) {
        header('Location: /admin/admin.php');
    }

    require_once 'includes/connect.php';

    $catalogcart6 = mysqli_query($connect, "SELECT * FROM `catalog-cart_6`");
   
    $id8 = $_GET['id8'];
    $var8 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `catalog-cart_6` WHERE (`id8`)"));
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/content.css">

    <script src="https://kit.fontawesome.com/3e9d8ab38b.js" crossorigin="anonymous"></script>

    <script src="https://cdn.tiny.cloud/1/t7hfn8pzf9gyb358foed00oyzia7q0xhlsrjm8affa5q9bhc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <title>Админ панель</title>
</head>
<body>


<!--admin-form-->
    <div class="admin">        
        <div class="admin-inner"> 

            <div class="menu-block">
                <div class="logo">
                    <a href="" class="logo-coll">COLLIDER</a>
                </div>

                <h1 class="head-menu">МЕНЮ</h1>
                <ul>
                    <li><a href="#admin-block1" class="name-menu1">Блок 1-(Презентация)</a></li>
                    <li><a href="#admin-block2" class="name-menu2">Блок 2-(Доставка)</a></li>
                    <li><a href="#admin-block3" class="name-menu3">Блок 3-(Каталог)</a></li>
                    <li><a href="#admin-block4" class="name-menu4">Блок 4-(Контакты)</a></li>                     
                </ul>
            </div>
<!--blocks-->
            <div class="blocks">
                <div class="header-blocks">
                    <div class= "head-name">Админпанель</div>
                    <a href="../" class="btn">Сайт</a>
                    <a href="includes/logout.php" class="btn">Выход</a> 
                </div>
<!--admin-blocks--> 
 
                <div id="admin-block2" class="probel">
                    <div class="probel-title"></div>
                </div>
                <h2 class="name-block_catalog">Карточка товара № 6 - (Каталог)<p>Здесь Вы можете редактировать текстовую информацию блока сайта</p></h2>
<!--admin-block2-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form-->  
                        <form action="includes/save8.php" method="POST" id="admin-block2"   class="admin-block1" enctype="multipart/form-data">
                        <input type="hidden" value="<?php 
                            echo $var8["id8"]
                            ?>" name="id8">

                            <h2 class="name-block">Карточка товара № 6 - (Каталог)</h2>Здесь Вы можете отредактировать содержимое блока сайта

                            <p>Добавить заголовок:</p>
                            <input type="hidden" name="title8" class="title" placeholder="Заголовок" value="Заголовок">
                            <input type="text" class="value" name="value8" value="<?php 
                            echo $var8["value8"]
                            ?>">

                            <p>Добавить описание:</p>
                            <input type="hidden" name="text8" class="title" placeholder="Описание" value="Заголовок">
                            <input type="text" id="mytextarea"  class="value_text" name="description8" value="<?php 
                            echo $var8["description8"]
                            ?>">
                              
                            <p>Прикрепить фото:</p>
                            <input id="form-image" accept=".ipg, .png, .gif" type="file" name="image8"class="file-input">
                            
                            <button type="submit" class="button">Сохранить</button>                
                        </form>
<!--form-->
                    </div>                   

                    <div class="block-add"> 
                         <div class="name_block-add">
                            Здесь отображаются последние сохраненные изменения контента<br>Всю сохраненную информацию Вы можете редактировать или удалить</br>
                         </div>                         
                        <table class="table">                            
                            <tbody class="tbody">
                                <tr>
                                    <td class="col">№</td>
                                    <td class="col">Секция 1</td> 
                                    <td class="col">Значение</td>
                                    <td class="col">Секция 2</td>
                                    <td class="col1">Описание</td>
                                    <td class="col">Фото</td>
                                    <td class="col">Действие                           
                                    </td> 
                                </tr>                            
                            
                            <?php

                            while($var8 = mysqli_fetch_assoc($catalogcart6)){
                                echo '<tr>
                                <td class="col">' . $var8["id8"] . '</td>
                                <td class="col">' . $var8["title8"] . '</td> 
                                <td class="col">' . $var8["value8"] . '</td>
                                <td class="col">' . $var8["text8"] . '</td> 
                                <td class="col">' . $var8["description8"] . '</td>
                                <td class="col">' . $var8["image8"] . '</td>
                                <td class="col">                                    
                                   
                                    <a type="button" class="fas fa-trash-alt" href="includes/delete-variable8.php?id =' . $var8["id8"] . '"></a>                            
                                </td> 

                            </tr>';
                            }
                            ?>
                            
                            </tbody>    
                        </table>  
                        <a href="../" class="btn">Сайт</a>
                        <a href="content.php" class="btn">Главная</a>
                        <div class="name_block-add">
                            ВАЖНО!!! Будьте внимательны</br>Если Вы нажмете кнопку "Удалить". то все данные будут утеряны</br>Для редактирования используйте форму слева</br>После нажатия на кнопку "Сохранить" все внесенные изменения будут обновлены.</br>
                         </div>                                             
                    </div>
                </div> 
<!--admin-block2-->
    
            </div>
        </div>        
    </div> 
   
    
    <script src="content.js"></script>

</body>
</html>