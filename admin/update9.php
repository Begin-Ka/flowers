<?php

session_start();

    $login = "admin";
    $password = "12345678";

    if($_SESSION ["login"]!== $login || $_SESSION ["password"]!== $password) {
        header('Location: /admin/admin.php');
    }

    require_once 'includes/connect.php';

    $flowerstable3 = mysqli_query($connect, "SELECT * FROM `flowerstable3`");

    $id9 = $_GET['id9'];
    $var9 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `flowerstable3` WHERE (`id9`)"));
    
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
                <h2 class="name-block_catalog">Блок сайта 4 - (Контакты)<p>Здесь Вы можете редактировать текстовую информацию блока сайта</p></h2>
<!--admin-block2-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form-->  
                        <form action="includes/save9.php" method="POST" id="admin-block2"   class="admin-block1" enctype="multipart/form-data">
                            <input type="hidden" value="<?php 
                            echo $var9["id9"]
                            ?>" name="id9">

                            <h2 class="name-block">Блок сайта 4 - (Контакты)</h2>Здесь Вы можете отредактировать содержимое блока сайта

                            <p>Добавить заголовок:</p>
                            <input type="hidden" name="title9" class="title" placeholder="Заголовок" value="Заголовок">
                            <input type="text" class="value" name="value9" value="<?php 
                            echo $var9["value9"]
                            ?>">

                            <p>Добавить описание:</p>
                            <input type="hidden" name="text9" class="title" placeholder="Описание" value="Описание">
                            <input type="text" id="mytextarea"  class="value_text" name="description9" value="<?php 
                            echo $var9["description9"]
                            ?>">
 
                            <!--
                            <p>Прикрепить фото:</p>
                            <input id="form-image" accept=".ipg, .png, .gif" type="file" name="image2"class="file-input">
                            -->
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

                            while($var9 = mysqli_fetch_assoc($flowerstable3)){
                                echo '<tr>
                                <td class="col">' . $var9["id9"] . '</td>
                                <td class="col">' . $var9["title9"] . '</td> 
                                <td class="col">' . $var9["value9"] . '</td>
                                <td class="col">' . $var9["text9"] . '</td> 
                                <td class="col">' . $var9["description9"] . '</td>
                                <td class="col">' . $var9["image9"] . '</td>
                                <td class="col">                                    
                                   
                                    <a type="button" class="fas fa-trash-alt" href="includes/delete-variable9.php?id =' . $var9["id9"] . '"></a>                            
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