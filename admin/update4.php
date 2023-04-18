<?php

session_start();

    $login = "admin";
    $password = "12345678";

    if($_SESSION ["login"]!== $login || $_SESSION ["password"]!== $password) {
        header('Location: /admin/admin.php');
    }

    require_once 'includes/connect.php';

    $catalogcart2 = mysqli_query($connect, "SELECT * FROM `catalog-cart_2`");

    $id4 = $_GET['id4'];
    $var4 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `catalog-cart_2` WHERE (`id4`)"));
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/content.css">

    <script src="https://kit.fontawesome.com/3e9d8ab38b.js" crossorigin="anonymous"></script>

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
                <h2 class="name-block_catalog">Карточка товара № 2 - (Каталог)<p>Здесь Вы можете редактировать текстовую информацию блока сайта</p></h2>
<!--admin-block2-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form-->  
                        <form action="includes/save4.php" method="POST" id="admin-block2"   class="admin-block1" enctype="multipart/form-data">
                            <input type="hidden" value="<?php 
                            echo $var4["id4"]
                            ?>" name="id4">

                            <h2 class="name-block">Карточка товара № 2 - (Каталог)</h2>Здесь Вы можете отредактировать содержимое карточки товара

                            <p>Добавить заголовок:</p>
                            <input type="hidden" name="title4" class="title" placeholder="Заголовок" value="Заголовок">
                            <input type="text" class="value" name="value4" value="<?php 
                            echo $var4["value4"]
                            ?>">

                            <p>Добавить описание:</p>
                            <input type="hidden" name="text4" class="title" placeholder="Описание" value="Описание">
                            <input type="text" id="mytextarea"  class="value_text" name="description4" value="<?php 
                            echo $var4["description4"]
                            ?>">
 
                            <p>Прикрепить фото:</p>
                            <input id="form-image" accept=".ipg, .png, .gif" type="file" name="image2"class="file-input">
                            
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

                            while($var4 = mysqli_fetch_assoc($catalogcart2)){
                                echo '<tr>
                                <td class="col">' . $var4["id4"] . '</td>
                                <td class="col">' . $var4["title4"] . '</td> 
                                <td class="col">' . $var4["value4"] . '</td>
                                <td class="col">' . $var4["text4"] . '</td> 
                                <td class="col">' . $var4["description4"] . '</td>
                                <td class="col">' . $var4["image4"] . '</td>
                                <td class="col">                                    
                                   
                                    <a type="button" class="fas fa-trash-alt" href="includes/delete-variable4.php?id =' . $var4["id4"] . '"></a>                            
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
    


<!--текстовый редактор Tinymce
   
   -->

    <script src="https://cdn.tiny.cloud/1/t7hfn8pzf9gyb358foed00oyzia7q0xhlsrjm8affa5q9bhc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
      selector:'#mytextarea1,#mytextarea2, #mytextarea3,#mytextarea4,#mytextarea5',         
      
      plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
      ],

      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons',

      menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
      },
      menubar: 'favs file edit view insert format tools table help',
      
    
      content_css: 'content.css'
    });
    </script>
    
    <script src="content.js"></script>

</body>
</html>