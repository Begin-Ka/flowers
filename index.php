<!--подключение БД к сайту-->
<?php

require_once 'admin/includes/connect.php';

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

$vars = [];
$descripts =[];

$vars2 = [];
$descripts2 = [];

$vars3 = [];
$descripts3 = [];

$vars4 = [];
$descripts4 = [];

$vars5 = [];
$descripts5 = [];

$vars6 = [];
$descripts6 = [];

$vars7 = [];
$descripts7 = [];

$vars8 = [];
$descripts8 = [];

$vars9 = [];
$descripts9 = [];

//1***************
while($var = mysqli_fetch_assoc($flowerstable)) {
    $vars[$var["title"]] = $var["value"];    
}
while($descript = mysqli_fetch_assoc($flowerstable)) {
    $descripts[$descript["text"]] = $descript["description"];    
}
//2****************
while($var2 = mysqli_fetch_assoc($flowerstable2)) {
    $vars2[$var2["title2"]] = $var2["value2"];    
}
while($descript2 = mysqli_fetch_assoc($flowerstable2)) {
    $descripts2[$descript2["text2"]] = $descript2["description2"];    
}
//3*****************
while($var3 = mysqli_fetch_assoc($catalogcart1)) {
    $vars3[$var3["title3"]] = $var3["value3"];    
}
while($descript3 = mysqli_fetch_assoc($catalogcart1)) {
    $descripts3[$descript3["text3"]] = $descript3["description3"];    
}
//4*************
while($var4 = mysqli_fetch_assoc($catalogcart2)) {
    $vars4[$var4["title4"]] = $var4["value4"];    
}
while($descript4 = mysqli_fetch_assoc($catalogcart2)) {
    $descripts4[$descript4["text4"]] = $descript4["description4"]; 
} 
//5****************
while($var5 = mysqli_fetch_assoc($catalogcart3)) {
    $vars5[$var5["title5"]] = $var5["value5"];    
}
while($descript5 = mysqli_fetch_assoc($catalogcart3)) {
    $descripts5[$descript5["text5"]] = $descript5["description5"];
}  
//6
while($var6 = mysqli_fetch_assoc($catalogcart4)) {
    $vars6[$var6["title6"]] = $var6["value6"];    
}
while($descript6 = mysqli_fetch_assoc($catalogcart4)) {
    $descripts6[$descript6["text6"]] = $descript6["description6"];
}  
//7
while($var7 = mysqli_fetch_assoc($catalogcart5)) {
    $vars7[$var7["title7"]] = $var7["value7"];    
}
while($descript7 = mysqli_fetch_assoc($catalogcart5)) {
    $descripts7[$descript7["text7"]] = $descript7["description7"];
}  
//8
while($var8 = mysqli_fetch_assoc($catalogcart6)) {
    $vars8[$var8["title8"]] = $var8["value8"];    
}
while($descript8 = mysqli_fetch_assoc($catalogcart6)) {
    $descripts8[$descript8["text8"]] = $descript8["description8"];
}  
//9
while($var9 = mysqli_fetch_assoc($flowerstable3)) {
    $vars9[$var9["title9"]] = $var9["value9"];    
}
while($descript9 = mysqli_fetch_assoc($flowerstable3)) {
    $descripts9[$descript9["text9"]] = $descript9["description9"];
}  
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-adapt.css">

    <script src="https://kit.fontawesome.com/3e9d8ab38b.js" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Flowers</title>
</head>

<body>
<!--header-->
    <div class="container">
        <header class="header">
            <div class="header-logo">
                <h2 class="logo">FLOWERS</h2>
            </div>
            <div class="header-nav">
                <a href="#catalog" class="nav-link">Каталог цветов</a>
                <a href="#dostavka" class="nav-link">Доставка и оплата</a>
                <a href="#contacts" class="nav-link">Контакты</a>
                <a href="" class="nav-link">+375-33-888-22-33</a>
            </div>

            <!-- burger-->

            <div class="burger">
                <a class="burger-btn" href="#header">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>  

        </header>

        <div class="burger-menu">
            <ul>
                <li>
                    <a class="burger-link" href="#lentopil">Каталог цыетов</a>
                </li>

                <li>
                    <a class="burger-link" href="#profil">Доставка и оплата</a>
                </li>

                <li>
                    <a class="burger-link" href="#trubogib">Контакты</a>
                </li>
                
            </ul>                
        </div>        
    </div>
    
<!--main-->
    <div class="container">
        <maim class="main">
    <!--main-inner--> 
            <div class="main-inner">                
                <div class="inner-content">
                    <h2 class="inner-text">Доставка цветов по Минску и Минской области</h2>
                </div>
                <a href="#letter" class="inner-btn">Купить цветы</a>
                <div class="mask"></div>
            </div>

            <div class="probel">
                <div class="probel-title"></div>
            </div>
    <!--main-partfolio-->
            <div class="main-partfolio">

                <div class="partfolio-block1">
                    <div id="slider" class="slider">
                        <div id="polosa" class="slider-line">
                            <img class="slider-photo" src="assets/partfolio/1.jpg" alt="">
                            <img class="slider-photo" src="assets/partfolio/2.jpg" alt="">
                            <img class="slider-photo" src="assets/partfolio/3.jpg" alt="">
                            <img class="slider-photo" src="assets/partfolio/4.jpg" alt="">
                        </div>                        
                    </div>
                </div>                   

                <div class="partfolio-block2">
                    <div class="partfolio-content">
                        <div class="partfolio-title">
                            <?php
                                 echo $vars["text"];
                            ?>
                        </div>
                        <div class="partfolio-text">Букет (от фр. bouquet), также цветочный букет, — срезанные или сорванные цветущие растения, красиво подобранные вместе, обычно для подарка или для помещения их в вазу с цель Художественная декоративная композиция составляется из частей растений, а также, иногда, декоративных элементов нерастительного происхождения. В большинстве случаев основой букета являются побеги, несущие распустившиеся цветки (в просторечии называемые </div>
                    </div>
                    <a href="#letter" class="partfolio-btn">Купить цветы</a>
                </div>                               
            </div>

            <div class="probel">
                <div class="probel-title"></div>
            </div>
    <!--main-dostavka-->
            <div id="dostavka" class="main-dostavka">
                <div class="dostavka-content">
                    <div class="dostavka-title">
                        Условия доставки и оплаты
                    </div>
                    <div class = "dostavka-text"><p>Условия доставки</p><p>Букет (от фр. bouquet), также цветочный букет, — срезанные или сорванные цветущие растения, красиво подобранные вместе, обычно для подарка или для помещения их в вазу с цель</p><p>Условия оплаты</p> Художественная декоративная композиция составляется из частей растений, а также, иногда, декоративных элементов нерастительного происхождения. В большинстве случаев основой букета являются побеги, несущие распустившиеся цветки (в просторечии называемые </div>
                </div>
            </div>

            <div class="probel">
                <div class="probel-title"></div>
            </div>
    <!--main-catalog-->
            <div id="catalog" class="main-catalog">
                <div class="catalog-cart">
                    <img class="cart-photo" src="assets/catalog/1.jpg" alt="">
                    <div class="cart-content">
                        <a href="#popup" class="cart-name" href="#">Сборный букет из роз</a>
                        <h4 class="cart-anons">Букет (от фр. bouquet), также цветочный букет, — срезанные или сорванные цветущие растения, красиво подобранные вместе, обычно для подарка </h4>
                    </div>
                    
                    <a href="#letter" class="cart-btn">Заказать букет</a>
                </div>

                <div class="catalog-cart">
                    <img class="cart-photo" src="assets/catalog/2.jpg" alt="">
                    <div class="cart-content">
                        <a href="#popup" class="cart-name" href="#">Сборный букет из роз</a>
                        <h4 class="cart-anons">Букет (от фр. bouquet), также цветочный букет, — срезанные или сорванные цветущие растения, красиво подобранные вместе, обычно для подарка </h4>
                    </div>
                    
                    <a href="#letter" class="cart-btn">Заказать букет</a>
                </div>

                <div class="catalog-cart">
                    <img class="cart-photo" src="assets/catalog/3.jpg" alt="">
                    <div class="cart-content">
                        <a href="#popup" class="cart-name" href="#">Сборный букет из роз</a>
                        <h4 class="cart-anons">Букет (от фр. bouquet), также цветочный букет, — срезанные или сорванные цветущие растения, красиво подобранные вместе, обычно для подарка </h4>
                    </div>
                    
                    <a href="#letter" class="cart-btn">Заказать букет</a>
                </div>

                <div class="catalog-cart">
                    <img class="cart-photo" src="assets/catalog/4.jpg" alt="">
                    <div class="cart-content">
                        <a href="#popup" class="cart-name" href="#">Сборный букет из роз</a>
                        <h4 class="cart-anons">Букет (от фр. bouquet), также цветочный букет, — срезанные или сорванные цветущие растения, красиво подобранные вместе, обычно для подарка </h4>
                    </div>
                    
                    <a href="#letter" class="cart-btn">Заказать букет</a>
                </div>

                <div class="catalog-cart">
                    <img class="cart-photo" src="assets/catalog/5.jpg" alt="">
                    <div class="cart-content">
                        <a href="#popup" class="cart-name" href="#">Сборный букет из роз</a>
                        <h4 class="cart-anons">Букет (от фр. bouquet), также цветочный букет, — срезанные или сорванные цветущие растения, красиво подобранные вместе, обычно для подарка </h4>
                    </div>
                    
                    <a href="#letter" class="cart-btn">Заказать букет</a>
                </div>

                <div class="catalog-cart">
                    <img class="cart-photo" src="assets/catalog/6.jpg" alt="">
                    <div class="cart-content">
                        <a href="#popup" class="cart-name" href="#">Сборный букет из роз</a>
                        <h4 class="cart-anons">Букет (от фр. bouquet), также цветочный букет, — срезанные или сорванные цветущие растения, красиво подобранные вместе, обычно для подарка </h4>
                    </div>
                    
                    <a href="#letter" class="cart-btn">Заказать букет</a>
                </div>
            </div>

            <div class="probel">
                <div class="probel-title"></div>
            </div>
    <!--form to email -->
            <div id="letter" class="main-letter">
                <div class="letter">            
                    <form id="form" action="send.php" method="post">
                        <!--Hidden Required fields-->
                        <input type="hidden" name="project_name" value="Site Name">
                        <input type="hidden" name="admin_email" value="1215451b@gmail.com">
                        <input type="hidden" name="form_subject" value="Form Subject">
                        <!--End Hidden Required fields -->
                        
                        <h2 class="letter-name">Отправить запрос</h2>

                        <input type="text" name="name" placeholder="Введите Ваше имя..." required><br>
                        <input type="text" name="email" placeholder="Введите e-mail..." required><br>
                        <input type="text" name="phone" placeholder="Введите номер телефона..."><br>
                        <input class="massage" type="text" name="message" placeholder="Введите текст запроса..."><br>
                        <input type="submit" class="letter-btn" value="Отправить">
                    </form>
                </div>
            </div>
    <!--main-contacts-->
            <div id="contacts" class="main-contacts">
                <div class="block-contacts1">
                    <div class="map" style="position:relative;overflow:hidden;"><a href="https://yandex.by/maps/157/minsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Минск</a><a href="https://yandex.by/maps/157/minsk/house/Zk4YcgFgS0AHQFtpfXVyc31kZg==/?ll=27.460250%2C53.932172&source=wizgeo&utm_medium=mapframe&utm_source=maps&z=16.73" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Тимирязева, 121/4 — Яндекс.Карты</a><iframe src="https://yandex.by/map-widget/v1/-/CCUuF4TJDD" width="560" height="400" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
                </div>
                <div class="block-contacts2">
                    <div class="contacts-content">
                        <h2 class="contacts-title">Контактная информация</h2>
                        <a href="" class="contacts-text">РБ г. Минск</a>
                        <a href="" class="contacts-text">ул. Тимирязева д 121/4 оф 701</a>
                        <a href="" class="contacts-text">Телефон: +375 375-33-888-22-33</a><a href="" class="contacts-text">Телефон: +375 375-33-888-22-33</a>                        
                    </div>
                </div>
            </div>
    

            
        </maim>
    </div>
    
<!--footer-->
    
    <div class="container">
        <div class="footer">
            <div class="footer-logo">
                <h2 class="logo">FLOWERS</h2>
            </div>

            <div class="footer-znak">
                <a href="admin/admin.php" class="nav-link">@ COLLIDER</a>
            </div>

            <div class="footer-nav">
                <a href="" class="nav-link">Каталог цветов</a>
                <a href="" class="nav-link">Доставка и оплата</a>
                <a href="" class="nav-link">Контакты</a>
                <a href="" class="nav-link">+375-33-888-22-33</a>
            </div>

        </div>
    </div>

    <!--arrowUp-->

    <a id="arrowUp" class="arrowUp">
        <i class="far fa-arrow-alt-circle-up"></i>
    </a>     

       
    <script src="js/app.js"></script>    
</body>
</html>