<?php

session_start();

    $login = "admin";
    $password = "12345678";

    if($_SESSION ["login"]!== $login || $_SESSION ["password"]!== $password) {
        header('Location: /admin/admin.php');
    }

    require_once 'includes/connect.php';

    $flowerstable = mysqli_query($connect, "SELECT * FROM `flowerstable`");
    $flowerstable2 = mysqli_query($connect, "SELECT * FROM `flowerstable2`");
    //catalog-carts//
    $catalogcart1 = mysqli_query($connect, "SELECT * FROM `catalog-cart_1`");
    $catalogcart2 = mysqli_query($connect, "SELECT * FROM `catalog-cart_2`");
    $catalogcart3 = mysqli_query($connect, "SELECT * FROM `catalog-cart_3`");
    $catalogcart4 = mysqli_query($connect, "SELECT * FROM `catalog-cart_4`");
    $catalogcart5 = mysqli_query($connect, "SELECT * FROM `catalog-cart_5`");
    $catalogcart6 = mysqli_query($connect, "SELECT * FROM `catalog-cart_6`");
    //*//
    $flowerstable3 = mysqli_query($connect, "SELECT * FROM `flowerstable3`");

    $id = $_GET['id'];
    $var = mysqli_query($connect, "SELECT * FROM `flowerstable` WHERE (`id`)");

    $id2 = $_GET['id2'];
    $var2 = mysqli_query($connect, "SELECT * FROM `flowerstable2` WHERE (`id2`)");

    $id3 = $_GET['id3'];
    $var3 = mysqli_query($connect, "SELECT * FROM `catalog-cart_1` WHERE (`id3`)");

    $id4 = $_GET['id4'];
    $var4 = mysqli_query($connect, "SELECT * FROM `catalog-cart_2` WHERE (`id4`)");

    $id5 = $_GET['id5'];
    $var5 = mysqli_query($connect, "SELECT * FROM `catalog-cart_3` WHERE (`id5`)");

    $id6 = $_GET['id6'];
    $var6 = mysqli_query($connect, "SELECT * FROM `catalog-cart_4` WHERE (`id6`)");

    $id7 = $_GET['id7'];
    $var7 = mysqli_query($connect, "SELECT * FROM `catalog-cart_5` WHERE (`id7`)");

    $id8 = $_GET['id8'];
    $var8 = mysqli_query($connect, "SELECT * FROM `catalog-cart_6` WHERE (`id8`)");

    $id9 = $_GET['id9'];
    $var9 = mysqli_query($connect, "SELECT * FROM `flowerstable3` WHERE (`id9`)");

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
<!--admin-block1-->
                <div id="admin-block1" class="probel">
                    <div class="probel-title"></div>
                </div>                
                <h2 class="name-block_catalog">Блок сайта 1 - (Презентация)<p>Здесь Вы можете редактировать текстовую информацию блока сайта</p></h2>

                <div class="all-blocks">
                    <div class="panels">                       
<!--form 
                        <form action="includes/add-variable.php" method="POST" id="admin-block1"   class="admin-block1" enctype="multipart/form-data">
                            <h2 class="name-block">Блок 1-(Презентация)</h2> Здесь Вы можете отредактировать содержимое блока сайта

                            <p>Добавить заголовок:</p>
                            <input type="text" name="title" class="title" placeholder="Заголовок"> 
                            <input type="text" id="mytextarea"  class="value" name="value">

                            <p>Добавить описание:</p>
                            <input type="text" name="text" class="title" placeholder="Описание">
                            <input type="text" id="mytextarea"  class="value" name="description">
 
                            
                            <p>Прикрепить фото:</p>
                            <input id="form-image" accept=".ipg, .png, .gif" type="file" name="image"class="file-input">

                            <button type="submit" class="button">Сохранить</button>                
                        </form>
<!--form-->   
<!--onsubmit="return false" -->                       
                            
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

                            while($var = mysqli_fetch_assoc($flowerstable)){
                                echo '<tr>
                                <td class="col">' . $var["id"] . '</td>
                                <td class="col">' . $var["title"] . '</td> 
                                <td class="col">' . $var["value"] . '</td>
                                <td class="col">' . $var["text"] . '</td> 
                                <td class="col">' . $var["description"] . '</td>
                                <td class="col">' . $var["image"] . '</td>
                                <td class="col">                                
                                    <a type="button" class="fas fa-trash-alt" href="includes/delete-variable.php?id =' . $var["id"] . '"></a>                            
                                </td> 
                                <a type="button" class="button" href="update.php#admin-block1?id=' . $var["id"] . '">Изменить</a>
                            </tr>';                            
                            }                            
                            ?>
                            
                            </tbody>    
                        </table>

                        <div class="name_block-add">
                             Для того, чтобы внести изменения нажмите "Изменить"</br>
                         </div>  

                    </div>
                </div>
<!--admin-block1--> 
                <div id="admin-block2" class="probel">
                    <div class="probel-title"></div>
                </div>
                <h2 class="name-block_catalog">Блок сайта 2 - (Условия доставки)<p>Здесь Вы можете редактировать текстовую информацию блока сайта</p></h2>
<!--admin-block2-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form  
                        <form action="includes/add-variable2.php" method="POST" class="admin-block1" enctype="multipart/form-data">
                            <h2 class="name-block">Блок 2-(Доставка)</h2>Здесь Вы можете отредактировать содержимое блока сайта

                            <p>Добавить заголовок:</p>
                            <input type="text" name="title2" class="title" placeholder="Заголовок" value="Заголовок">
                            <input type="text" id="mytextarea"  class="value" name="value2">

                            <p>Добавить описание:</p>
                            <input type="text" name="text2" class="title" placeholder="Описание">
                            <input type="text" id="mytextarea"  class="value" name="description2">
 
                            <!--
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

                            while($var2 = mysqli_fetch_assoc($flowerstable2)){
                                echo '<tr>
                                <td class="col">' . $var2["id2"] . '</td>
                                <td class="col">' . $var2["title2"] . '</td> 
                                <td class="col">' . $var2["value2"] . '</td>
                                <td class="col">' . $var2["text2"] . '</td> 
                                <td class="col">' . $var2["description2"] . '</td>
                                <td class="col">' . $var2["image2"] . '</td>
                                <td class="col">                                    
                                   
                                    <a type="button" class="fas fa-trash-alt" href="includes/delete-variable2.php?id =' . $var2["id2"] . '"></a>                            
                                </td> 
                                <a type="button" class="button" href="update2.php#admin-block1?id=' . $var2["id2"] . '">Изменить</a>
                            </tr>';
                            }
                            ?>
                            
                            </tbody>    
                        </table>
                        <div class="name_block-add">
                            Для того, чтобы внести изменения нажмите "Изменить"</br>
                         </div>                                                  
                    </div>
                </div> 
<!--admin-block2-->
                <div id="admin-block3" class="probel">
                    <div class="probel-title"></div>                    
                </div>
                <h2 class="name-block_catalog">Блок сайта 3 - (Каталог)<p>Здесь Вы можете редактировать карточки Вашего каталога.</p></h2>
<!--admin-block3-CATALOG-->
<!--cartochka 1-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form 
                        <form action="includes/add-catalog-cart_1.php" method="POST" id="admin-block3-1"   class="admin-block1" enctype="multipart/form-data">
                            <h2 class="name-block">Карточка товара № 1 - (Каталог)</h2>Здесь Вы можете отредактировать содержимое карточки товара
                            
                            <p>Добавить заголовок:</p>
                            <input type="text" name="title3" class="title" placeholder="Заголовок">
                            <input type="text" id="mytextarea"  class="value" name="value3">

                            <p>Добавить описание:</p>
                            <input type="text" name="text3" class="title" placeholder="Описание">
                            <input type="text" id="mytextarea"  class="value" name="description3"> 
                            
                            <p>Прикрепить фото:</p>
                            <input id="form-image" accept=".ipg, .png, .gif" type="file" name="image3"class="file-input">

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

                            while($var3 = mysqli_fetch_assoc($catalogcart1)){
                                echo '<tr>
                                <td class="col">' . $var3["id3"] . '</td>
                                <td class="col">' . $var3["title3"] . '</td> 
                                <td class="col">' . $var3["value3"] . '</td>
                                <td class="col">' . $var3["text3"] . '</td> 
                                <td class="col">' . $var3["description3"] . '</td>
                                <td class="col">' . $var3["image3"] . '</td>
                                <td class="col">                                    
                                    
                                    <a type="button" class="fas fa-trash-alt" href="includes/delete-variable3.php?id =' . $var3["id3"] . '"></a>                            
                                </td> 
                                <a type="button" class="button" href="update3.php?id=' . $var3["id3"] . '">Изменить</a>
                            </tr>';
                            }
                            ?>                            
                            </tbody>    
                        </table>
                        <div class="name_block-add">
                             Для того, чтобы внести изменения нажмите "Изменить"</br>
                         </div>                                                
                    </div>
                </div>
<!--cartochka 1-->
<!--cartochka 2-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form 
                        <form action="includes/add-catalog-cart_2.php" method="POST" id="admin-block3-2"   class="admin-block1" enctype="multipart/form-data">
                            <h2 class="name-block">Карточка товара № 2 - (Каталог)</h2>Здесь Вы можете отредактировать содержимое карточки товара
                            
                            <p>Добавить заголовок:</p>
                            <input type="text" name="title4" class="title" placeholder="Заголовок">
                            <input type="text" id="mytextarea"  class="value" name="value4">

                            <p>Добавить описание:</p>
                            <input type="text" name="text4" class="title" placeholder="Описание">
                            <input type="text" id="mytextarea"  class="value" name="description4"> 
                            
                            <p>Прикрепить фото:</p>
                            <input id="form-image" accept=".ipg, .png, .gif" type="file" name="image4"class="file-input">

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
                                <a type="button" class="button" href="update4.php?id=' . $var4["id4"] . '">Изменить</a> 
                            </tr>';
                            }
                            ?>
                            
                            </tbody>    
                        </table>
                        <div class="name_block-add">
                             Для того, чтобы внести изменения нажмите "Изменить"</br>
                         </div>                                               
                    </div>
                </div>
<!--cartochka 2-->
<!--cartochka 3-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form  
                        <form action="includes/add-catalog-cart_3.php" method="POST" id="admin-block3-3"   class="admin-block1" enctype="multipart/form-data">
                            <h2 class="name-block">Карточка товара № 3 - (Каталог)</h2>Здесь Вы можете отредактировать содержимое карточки товара
                            
                            <p>Добавить заголовок:</p>
                            <input type="text" name="title5" class="title" placeholder="Заголовок">
                            <input type="text" id="mytextarea"  class="value" name="value5">

                            <p>Добавить описание:</p>
                            <input type="text" name="text5" class="title" placeholder="Описание">
                            <input type="text" id="mytextarea"  class="value" name="description5"> 
                            
                            <p>Прикрепить фото:</p>
                            <input id="form-image" accept=".ipg, .png, .gif" type="file" name="image5"class="file-input">

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

                            while($var5 = mysqli_fetch_assoc($catalogcart3)){
                                echo '<tr>
                                <td class="col">' . $var5["id5"] . '</td>
                                <td class="col">' . $var5["title5"] . '</td> 
                                <td class="col">' . $var5["value5"] . '</td>
                                <td class="col">' . $var5["text5"] . '</td> 
                                <td class="col">' . $var5["description5"] . '</td>
                                <td class="col">' . $var5["image5"] . '</td>
                                <td class="col">                                    
                                    
                                    <a type="button" class="fas fa-trash-alt" href="includes/delete-variable5.php?id =' . $var5["id5"] . '"></a>                            
                                </td>
                                <a type="button" class="button" href="update5.php?id=' . $var5["id5"] . '">Изменить</a> 
                            </tr>';
                            }
                            ?>

                           </tbody>    
                        </table>  
                        <div class="name_block-add">
                             Для того, чтобы внести изменения нажмите "Изменить"</br>
                         </div>                                              
                    </div>
                </div>
<!--cartochka 3-->
<!--cartochka 4-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form 
                        <form action="includes/add-catalog-cart_4.php" method="POST" id="admin-block3-4"   class="admin-block1" enctype="multipart/form-data">
                            <h2 class="name-block">Карточка товара № 4 - (Каталог)</h2>Здесь Вы можете отредактировать содержимое карточки товара
                            
                            <p>Добавить заголовок:</p>
                            <input type="text" name="title6" class="title" placeholder="Заголовок">
                            <input type="text" id="mytextarea"  class="value" name="value6">

                            <p>Добавить описание:</p>
                            <input type="text" name="text6" class="title" placeholder="Описание">
                            <input type="text" id="mytextarea"  class="value" name="description6"> 
                            
                            <p>Прикрепить фото:</p>
                            <input id="form-image" accept=".ipg, .png, .gif" type="file" name="6"class="file-input">

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

                            while($var6 = mysqli_fetch_assoc($catalogcart4)){
                                echo '<tr>
                                <td class="col">' . $var6["id6"] . '</td>
                                <td class="col">' . $var6["title6"] . '</td> 
                                <td class="col">' . $var6["value6"] . '</td>
                                <td class="col">' . $var6["text6"] . '</td> 
                                <td class="col">' . $var6["description6"] . '</td>
                                <td class="col">' . $var6["image6"] . '</td>
                                <td class="col">                                    
                                   
                                    <a type="button" class="fas fa-trash-alt" href="includes/delete-variable6.php?id =' . $var6["id6"] . '"></a>                            
                                </td> 
                                <a type="button" class="button" href="update6.php?id=' . $var6["id6"] . '">Изменить</a>
                            </tr>';
                            }
                            ?>
                           
                            </tbody>    
                        </table>
                        <div class="name_block-add">
                             Для того, чтобы внести изменения нажмите "Изменить"</br>
                         </div>                                                
                    </div>
                </div>
<!--cartochka 4-->
<!--cartochka 5-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form 
                        <form action="includes/add-catalog-cart_5.php" method="POST" id="admin-block3-5"   class="admin-block1" enctype="multipart/form-data">
                            <h2 class="name-block">Карточка товара № 5 - (Каталог)</h2>Здесь Вы можете отредактировать содержимое карточки товара
                            
                            <p>Добавить заголовок:</p>
                            <input type="text" name="title7" class="title" placeholder="Заголовок">
                            <input type="text" id="mytextarea"  class="value" name="value7">

                            <p>Добавить описание:</p>
                            <input type="text" name="text7" class="title" placeholder="Описание">
                            <input type="text" id="mytextarea"  class="value" name="description7"> 
                            
                            <p>Прикрепить фото:</p>
                            <input id="form-image" accept=".ipg, .png, .gif" type="file" name="image7"class="file-input">

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

                            while($var7 = mysqli_fetch_assoc($catalogcart5)){
                                echo '<tr>
                                <td class="col">' . $var7["id7"] . '</td>
                                <td class="col">' . $var7["title7"] . '</td> 
                                <td class="col">' . $var7["value7"] . '</td>
                                <td class="col">' . $var7["text7"] . '</td> 
                                <td class="col">' . $var7["description7"] . '</td>
                                <td class="col">' . $var7["image7"] . '</td>
                                <td class="col">                                    
                                   
                                    <a type="button" class="fas fa-trash-alt" href="includes/delete-variable7.php?id =' . $var2["id7"] . '"></a>                            
                                </td>
                                <a type="button" class="button" href="update7.php?id=' . $var7["id7"] . '">Изменить</a> 
                            </tr>';
                            }
                            ?>
                           
                            </tbody>    
                        </table> 
                        <div class="name_block-add">
                             Для того, чтобы внести изменения нажмите "Изменить"</br>
                         </div>                                               
                    </div>
                </div>
<!--cartochka 5-->
<!--cartochka 6-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form  
                        <form action="includes/add-catalog-cart_6.php" method="POST" id="admin-block3-6"   class="admin-block1" enctype="multipart/form-data">
                            <h2 class="name-block">Карточка товара № 6 - (Каталог)</h2>Здесь Вы можете отредактировать содержимое карточки товара
                            
                            <p>Добавить заголовок:</p>
                            <input type="text" name="title8" class="title" placeholder="Заголовок">
                            <input type="text" id="mytextarea"  class="value" name="value8">

                            <p>Добавить описание:</p>
                            <input type="text" name="text8" class="title" placeholder="Описание">
                            <input type="text" id="mytextarea"  class="value" name="description8"> 
                            
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
                                <a type="button" class="button" href="update8.php?id=' . $var8["id8"] . '">Изменить</a>
                            </tr>';
                            }
                            ?>
                            
                            </tbody>    
                        </table>
                        <div class="name_block-add">
                             Для того, чтобы внести изменения нажмите "Изменить"</br>
                         </div>                                                
                    </div>
                </div>
<!--cartochka 6-->
<!--admin-block-3-CATALOG-->
                <div id="admin-block4" class="probel">
                    <div class="probel-title"></div>                    
                </div>
                <h2 class="name-block_catalog">Блок сайта 4 - (Контакты)<p>Здесь Вы можете редактировать текстовую информацию блока сайта.</p></h2>

<!--admin-block-4 - CONTACTS-->
                <div class="all-blocks">
                    <div class="panels">                       
<!--form 
                        <form action="includes/add-variable3.php" method="POST" id="admin-block4"   class="admin-block1" enctype="multipart/form-data"> 
                            <h2 class="name-block">Блок сайта № 4 - (Контакты)</h2>Здесь Вы можете отредактировать содержимое блока сайта
                            
                            <p>Добавить заголовок:</p>
                            <input type="text" name="title9" class="title" placeholder="Заголовок">
                            <input type="text" id="mytextarea"  class="value" name="value9">

                            <p>Добавить описание:</p>
                            <input type="text" name="text9" class="title" placeholder="Описание">
                            <input type="text" id="mytextarea"  class="value" name="description9">

                            <!--
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

                            while($var9 = mysqli_fetch_assoc($flowerstable3)){
                                echo '<tr>
                                <td class="col">' . $var9["id9"] . '</td>
                                <td class="col">' . $var9["title9"] . '</td> 
                                <td class="col">' . $var9["value9"] . '</td>
                                <td class="col">' . $var9["text9"] . '</td> 
                                <td class="col">' . $var9["description9"] . '</td>
                                <td class="col">' . $var9["image9"] . '</td>
                                <td class="col">                                    
                                    
                                    <a type="button" class="fas fa-trash-alt" href="includes/delete-variable9.php?id =' . $var2["id9"] . '"></a>                            
                                </td> 
                                <a type="button" class="button" href="update9.php?id=' . $var9["id9"] . '">Изменить</a>
                            </tr>';
                            }
                            ?>
                            
                            </tbody>    
                        </table>
                        <div class="name_block-add">
                             Для того, чтобы внести изменения нажмите "Изменить"</br>
                         </div>                                                
                    </div>
                </div>
            </div>
        </div>        
    </div> 
    


<!--текстовый редактор Tinymce  
   

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
    </script>-->
    
    <script src="content.js"></script>

</body>
</html>