<?php session_start();?>
<?php
$utm_medium = 'Без utm_medium';
$utm_source = 'Без utm_source';
$utm_campaign = 'Без utm_campaign';
$utm_term = 'Без utm_term';
$utm_content = 'Без utm_content';
$cm_title = 'Без cm_title';

if(isset($_GET['utm_medium'])){
    $utm_medium = urldecode($_GET['utm_medium']);
    $_SESSION['utm_medium'] = urldecode($_GET['utm_medium']);
} elseif(isset($_SESSION['utm_medium'])) {
    $utm_medium = $_SESSION['utm_medium'];
} else{
    $utm_medium = 'Без utm_medium';
}
if(isset($_GET['utm_source'])){
    $utm_source = urldecode($_GET['utm_source']);
    $_SESSION['utm_source'] = urldecode($_GET['utm_source']);
} elseif(isset($_SESSION['utm_source'])) {
    $utm_source = $_SESSION['utm_source'];
} else{
    $utm_source = 'Без utm_source';
}
if(isset($_GET['utm_campaign'])){
    $utm_campaign = urldecode($_GET['utm_campaign']);
    $_SESSION['utm_campaign'] = urldecode($_GET['utm_campaign']);
} elseif(isset($_SESSION['utm_campaign'])) {
    $utm_campaign = $_SESSION['utm_campaign'];
} else{
    $utm_campaign = 'Без utm_campaign';
}
if(isset($_GET['utm_term'])){
    $utm_term = urldecode($_GET['utm_term']);
    $_SESSION['utm_term'] = urldecode($_GET['utm_term']);
} elseif(isset($_SESSION['utm_term'])) {
    $utm_term = $_SESSION['utm_term'];
} else{
    $utm_term = 'Без utm_term';
}
if(isset($_SESSION['utm_content'])) {
    $utm_content = $_SESSION['utm_content'];
} elseif(isset($_GET['utm_content'])){
    $utm_content = urldecode($_GET['utm_content']);
    $_SESSION['utm_content'] = urldecode($_GET['utm_content']);
}else{
    $utm_content = 'Без utm_content';
}
if(isset($_GET['cm_title'])){
    $cm_title = urldecode($_GET['cm_title']);
    $_SESSION['cm_title'] = urldecode($_GET['cm_title']);
}elseif(isset($_SESSION['cm_title'])) {
    $cm_title = $_SESSION['cm_title'];
} else{
    $cm_title = 'Без cm_title';
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="./"> -->

    <title>Двухместный номер с раздельными кроватями — Хостел Фьюжн</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <link rel="icon" href="../uploads/2017/09/favicon-1.png" sizes="32x32" />
    <link rel="icon" href="../uploads/2017/09/favicon-1.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="../uploads/2017/09/favicon-1.png" />
    <meta name="msapplication-TileImage" content="../uploads/2017/09/favicon-1.png" />
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#ef4b51">
    <!-- Custom Browsers Color End -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.min.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N85GL6V');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N85GL6V"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="sticky-top">
        <div class="container">
            <div class="row">
                <nav class="col navbar navbar-expand-lg d-none d-lg-flex">
                    <a class="navbar-brand col-1 pl-0" href="../">
                        <img src="../images/logo45.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse col-6" id="navbarNavDropdown">
                        <ul class="navbar-nav col-12 p-0 justify-content-between">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Комнаты и цены</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../xostel-na-paveleckoj.php">Хостел на Павелецкой</a>
                                    <a class="dropdown-item" href="../xostel-na-prospekte-mira.php">Хостел на Проспекте мира</a>
                                    <a class="dropdown-item" href="../room/apartamenty-na-kolomenskoi.php">Апартаменты на Коломенской</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Фотогалерея</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../gallery-na-paveleckoj.php">Павелецкая</a>
                                    <a class="dropdown-item" href="../gallery-na-prospekte-mira.php">Проспект мира</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../buy.php">Оплата</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../contact.php">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="socials-header col-3 d-flex justify-content-around align-items-center">
                        <!--
                        <a href="viber://chat?number=+79092332590"><img src="../images/socials-neon/viber.png" alt="" class="socials-neon"></a>
                        <a href="https://api.whatsapp.com/send?phone=+79629809926"><img src="../images/socials-neon/whatsapp.png" alt="" class="socials-neon"></a>
-->
                        <a href="https://vk.com/hostelfusion" target="_blank"><img src="../images/socials-neon/vk.png" alt="" class="socials-neon"></a>
                        <a href="https://www.instagram.com/hostelfusion/" target="_blank"><img src="../images/socials-neon/instagram.png" alt="" class="socials-neon"></a>
                        <a href="https://facebook.com/fusionhostel/" target="_blank"><img src="../images/socials-neon/facebook.png" alt="" class="socials-neon"></a>
                    </div>
                    <div class="header-phone-box d-flex col-2 pr-0">
                        <div class="info-box padr-5 d-flex flex-column text-right">
                            <a class="phone" href="tel:88005519784">8 (800) 551-97-84</a>
                            <a class="mail" href="mailTo:hostelfusion@mail.ru">hostelfusion@mail.ru</a>
                        </div>
                    </div>
                </nav>
                <nav class="navbar mobile-navbar col-12 d-lg-none navbar-expand-lg relative">
                    <a class="navbar-brand col-2 pl-0 mr-0" href="../">
                        <img src="../images/logo45.png" alt="">
                    </a>
                    <div class="hdr-btn-wrapper ">
                        <button data-fancybox data-position="Шапка мобильного меню" data-src="#find-hostel" class="btn red-btn">Подбор номера</button>
                    </div>
                    <div class="icon-wrapper d-flex justify-content-center align-items-center">
                        <a href="tel:88005519784">
                            <img src="../images/socials-neon/phone.png" alt="" class="phone">
                        </a>
                    </div>
                    <button class="navbar-toggler p-0 hamburger hamburger--spring collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarNavAltMarkup" style="">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="../xostel-na-paveleckoj.php">Хостел на Павелецкой</a>
                            <a class="nav-item nav-link" href="../xostel-na-prospekte-mira.php">Хостел на Проспекте мира</a>
                            <a class="nav-item nav-link" href="../room/apartamenty-na-kolomenskoi.php">Апартаменты на Коломенской</a>
                            <a class="nav-item nav-link" href="../buy.php">Оплата</a>
                            <a class="nav-link" href="../contact.php">Контакты</a>
                            <div class="socials-header p-0 col-sm-5 col-8 d-flex justify-content-between align-items-center">
                                <!--
                        <a href="viber://chat?number=+79092332590"><img src="../images/socials-neon/viber.png" alt="" class="socials-neon"></a>
                        <a href="https://api.whatsapp.com/send?phone=+79629809926"><img src="../images/socials-neon/whatsapp.png" alt="" class="socials-neon"></a>
-->
                                <a href="https://vk.com/hostelfusion" target="_blank"><img src="../images/socials-neon/vk.png" alt="" class="socials-neon"></a>
                                <a href="https://www.instagram.com/hostelfusion/" target="_blank"><img src="../images/socials-neon/instagram.png" alt="" class="socials-neon"></a>
                                <a href="https://facebook.com/fusionhostel/" target="_blank"><img src="../images/socials-neon/facebook.png" alt="" class="socials-neon"></a>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </header>
    <div class="room-heading">
        <div class="container">
            <div class="column">
                <h2 class="room-header text-center">Двухместный номер с раздельными кроватями</h2>
            </div>
        </div>
    </div>
    <div class="room-info">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 slider-wrapper">
                    <div id="slider-room" class="flexslider-room position-relative">
                        <ul class="slides">
                            <li class="slide-thumb-big">
                                <img src="../uploads/2015/03/fusuion-1-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2015/03/fusuion-6-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2015/03/fusuion-32-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2015/03/fusuion-33-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2015/03/fusuion-35-750x500.jpg" />
                            </li>
                        </ul>
                        <div class="custom-controls-container">
                            <div class="custom-navigation d-flex justify-content-between">
                                <a href="#" class="flex-prev"><i class="icon-angle-left"></i></a>
                                <a href="#" class="flex-next"><i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="carousel-room" class="flexslider-room-carousel">
                        <ul class="slides">
                            <li class="slide-thumb">
                                <img src="../uploads/2015/03/fusuion-1-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2015/03/fusuion-6-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2015/03/fusuion-32-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2015/03/fusuion-33-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2015/03/fusuion-35-150x150.jpg" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-3 offset-lg-1 sidebar-form-wrapper sticky-top sticky-offset">
                    <h3>Забронируйте номер сейчас</h3>
                    <form action="../handlers/order.php" id="form_order" method="post" class="sidebar-form form">
                        <input name="utm_medium" value="<?php echo $utm_medium; ?>" type="hidden">
                        <input name="utm_source" value="<?php echo $utm_source; ?>" type="hidden">
                        <input name="utm_campaign" value="<?php echo $utm_campaign; ?>" type="hidden">
                        <input name="utm_term" value="<?php echo $utm_term; ?>" type="hidden">
                        <input name="utm_content" value="<?php echo $utm_content; ?>" type="hidden">
                        <input name="cm_title" value="<?php echo $cm_title; ?>" type="hidden">
                        <input name="room" value="Двухместный номер с раздельными кроватями" type="hidden">
                        <input name="hostel" value="Павелецкая" type="hidden">
                        <div class="form-group">
                            <input required="" type="text" name="in" class="form-control date" placeholder="Дата заезда" />
                        </div>
                        <div class="form-group">
                            <input required="" type="text" name="out" class="form-control date" placeholder="Дата отъезда" />
                        </div>
                        <div class="form-group">
                            <input required="" type="number" name="guests" class="form-control" placeholder="Количество гостей" />
                        </div>
                        <div class="form-group">
                            <input required="" type="name" name="name" class="form-control" placeholder="Введите ваше имя" />
                        </div>
                        <div class="form-group">
                            <input required="" type="tel" name="phone" class="form-control" placeholder="Введите номер телефона" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-red btn-order" id="submit_order" value="Забронировать сейчас">
                        </div>
                        <div class="form-group">
                            <p>
                                Или забронируйте по номеру:<br>
                                <strong onclick="location.href='tel:88005519784'">8 (800) 551-97-84</strong>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="d-lg-none col-12 sidebar-form-wrapper">
                    <h3>Забронируйте номер сейчас</h3>
                    <form action="../handlers/order.php" id="form_order" method="post" class="sidebar-form form">
                        <input name="utm_medium" value="<?php echo $utm_medium; ?>" type="hidden">
                        <input name="utm_source" value="<?php echo $utm_source; ?>" type="hidden">
                        <input name="utm_campaign" value="<?php echo $utm_campaign; ?>" type="hidden">
                        <input name="utm_term" value="<?php echo $utm_term; ?>" type="hidden">
                        <input name="utm_content" value="<?php echo $utm_content; ?>" type="hidden">
                        <input name="cm_title" value="<?php echo $cm_title; ?>" type="hidden">
                        <input name="room" value="Двухместный номер с раздельными кроватями" type="hidden">
                        <input name="hostel" value="Павелецкая" type="hidden">
                        <div class="form-group">
                            <input required="" type="text" name="in" class="form-control date" placeholder="Дата заезда" />
                        </div>
                        <div class="form-group">
                            <input required="" type="text" name="out" class="form-control date" placeholder="Дата отъезда" />
                        </div>
                        <div class="form-group">
                            <input required="" type="number" name="guests" class="form-control" placeholder="Количество гостей" />
                        </div>
                        <div class="form-group">
                            <input required="" type="name" name="name" class="form-control" placeholder="Введите ваше имя" />
                        </div>
                        <div class="form-group">
                            <input required="" type="tel" name="phone" class="form-control" placeholder="Введите номер телефона" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-red btn-order" id="submit_order" value="Забронировать сейчас">
                        </div>
                        <div class="form-group">
                            <p>
                                Или забронируйте по номеру:<br>
                                <strong onclick="location.href='tel:88005519784'">8 (800) 551-97-84</strong>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-3 room-spec-wrapper">
                    <p>Стоимость: <strong>2 200 <span class="rub">₽</span>/ночь</strong></p>
                    <p>Кровать: <strong>2 односпальные</strong></p>
                    <p>Макс. кол-во человек: <strong>2</strong></p>
                    <p>Площадь комнаты: <strong>15 м<sup>2</sup></strong></p>
                    <p>Wi-Fi: <strong>да</strong></p>
                    <p>Уборка номера: <strong>да</strong></p>
                    <p>Вешалки: <strong>да</strong></p>
                    <p>Шкафчик: <strong>да</strong></p>
                    <p>Зерклако: <strong>да</strong></p>
                </div>
                <div class="col-12 col-lg-5 accordeon-wrapper">
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="collapse-info">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <a>О HOSTEL FUSION</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <p>Сеть "Фьюжн" - это комфортные, семейные и современные хостелы в центре Москвы.</p>
                                <p>Мы готовы предложить Вам номера с разными условиями размещения: 10-ти местные, 8-ми местный, 6-ти местный, 4-х местный, 3-х местные и двухместные. Возможно размещение как посуточное, так и помесячное. Во всех номерах гостям предоставляются самые комфортные условия проживания – удобные кровати, оснащенные шторками, индивидуальными источниками освещения и персональными розетками, белоснежное постельное белье и 2 полотенца. В каждом номере предусмотрены места для хранения вещей и чемоданов, также вы сможете воспользоваться персональными сейфовыми ячейками. Общая кухня и ванные комнаты оборудованы необходимой бытовой техникой. В каждом хостеле есть уютная общая зона, где гости могут посмотреть телевизор, попить травяной чай с вареньем и поиграть в настольные игры.<br>В стоимость проживания включено:</p>
                                <ul>
                                    <li> безлимитный Wi-Fi (100 Мб/с)</li>
                                    <li> чай, сахар</li>
                                    <li> Персональная сейфовая ячейка;</li>
                                    <li> Оборудованная кухня со всей бытовой техникой (чайник, микроволновая печь, мульти варка, тостер, холодильник) и посудой;</li>
                                    <li> сушилка, гладильная доска, утюг, фен;</li>
                                    <li> Постельное белье и полотенце;</li>
                                    <li> Ежедневная влажная уборка;</li>
                                    <li> Услуга Будильник</li>
                                </ul>
                                <p>Ресепшн работает с 24 часа в сутки. Наши заботливые администраторы всегда на связи: подскажут, ответят, встретят!</p>
                                <p>Тепло и уютно по комфортной цене!</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <a class="collapsed">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ И ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <p>Ваши контактные данные используются исключительно для дальнейшей связи с вами и не передается в руки 3-х лиц.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <a class="collapsed">Способы оплаты</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <ul>
                                    <li>Наличный расчет - в хостеле администратору</li>
                                    <li>Банковской картой - оплата происходит через ПАО СБЕРБАНК с использованием Банковских карт следующих платежных систем:
                                        <img src="../images/mir.jpg" alt="">
                                        <img src="../images/visa.png" alt="">
                                        <img src="../images/Mastercard.png" alt="">
                                    </li>
                                    <li>Безналичный расчет - оплата производится на расчетный счет организации. Счет для оплаты запрашивайте по электронному адресу: <strong>hostelfusion@mail.ru</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <a class="collapsed">Условия возврата</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <p>Вы можете отказаться от предоставления услуги, но не позднее 7 дней до дня заезда.</p>
                                <p>Возврат переведенных средств, производится на Ваш банковский счет в течение 5 - 30 рабочих дней (срок зависит от Банка, который выдал Вашу банковскую карту).</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <a class="collapsed">Контакты</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <p>115054, г. Москва, ул. Дубиниская, дом 67 корпус 1.<br> 129110, г. Москва, Банный проезд, дом 3 стр. 1.</p>
                                <p>Электронная почта: hostelfusion@mail.ru<br> Телефоны: 8-499-116-68-78</p>
                                <p>Реквизиты: ООО «Центр» ИНН 7725387510/ ОГРНИП 1177746823649</p>
                                <p>Юридический адрес:115280, г. Москва, ул. Восточная, дом 2 корпус 5/51 Тел.: +7-499-116-68-78</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row flex-column flex-md-row">
                <div class="col-12 col-md-3">
                    <h4 class="footer-heading">Забронируйте сейчас</h4>
                    <div class="textwidget">
                        <p>
                            <i class="fa fa-phone" style="color: #333; font-size: 16px; "></i>
                            <a href="tel:88005519784">8 (800) 551-97-84</a>
                        </p>
                        <a href="mailTo:hostelfusion@mail.ru">
                            <i class="fa fa-envelope-o" style="color: #333; font-size: 16px; "></i>
                            <span style="cursor: pointer">Написать сообщение</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <!--
                    <h4 class="footer-heading">Последние новости</h4>
                    <div class="textwidget">
                        <p>
                            <i class="fa fa-phone" style="color: #333; font-size: 16px; "></i>
                            <a href="tel:88005519784">+7 (499) 116-68-78</a>
                        </p>
                        <p>
                            <i class="fa fa-envelope-o" style="color: #333; font-size: 16px; "></i>
                            <span style="cursor: pointer">Написать сообщение</span>
                        </p>
                    </div>
-->
                </div>
                <div class="col-12 col-md-4">
                    <h4 class="footer-heading">Мы в соцсетях</h4>
                    <div class="socials-footer">
                        <!--
                        <a href="viber://chat?number=+79092332590"><img src="../images/socials-neon/viber.png" alt="" class="socials-neon"></a>
                        <a href="https://api.whatsapp.com/send?phone=+79629809926"><img src="../images/socials-neon/whatsapp.png" alt="" class="socials-neon"></a>
-->
                        <a href="https://vk.com/hostelfusion" target="_blank"><img src="../images/socials-neon/vk.png" alt="" class="socials-neon"></a>
                        <a href="https://www.instagram.com/hostelfusion/" target="_blank"><img src="../images/socials-neon/instagram.png" alt="" class="socials-neon"></a>
                        <a href="https://facebook.com/fusionhostel/" target="_blank"><img src="../images/socials-neon/facebook.png" alt="" class="socials-neon"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/scripts.min.js"></script>
    <!-- calltouch code -->
    <script type="text/javascript">
    (function (w, d, nv, ls, yac){
        var lwait = function (w, on, trf, dly, ma, orf, osf) { var pfx = "ct_await_", sfx = "_completed";  if(!w[pfx + on + sfx]) { var ci = clearInterval, si = setInterval, st = setTimeout , cmld = function () { if (!w[pfx + on + sfx]) {  w[pfx + on + sfx] = true; if ((w[pfx + on] && (w[pfx + on].timer))) { ci(w[pfx + on].timer);  w[pfx + on] = null;   }  orf(w[on]);  } };if (!w[on] || !osf) { if (trf(w[on])) { cmld();  } else { if (!w[pfx + on]) { w[pfx + on] = {  timer: si(function () { if (trf(w[on]) || ma < ++w[pfx + on].attempt) { cmld(); } }, dly), attempt: 0 }; } } }   else { if (trf(w[on])) { cmld();  } else { osf(cmld); st(function () { lwait(w, on, trf, dly, ma, orf); }, 0); } }} else {orf(w[on]);}};
        var ct = function (w, d, e, c, n) { var a = 'all', b = 'tou', src = b + 'c' + 'h';  src = 'm' + 'o' + 'd.c' + a + src; var jsHost = "https://" + src, s = d.createElement(e); var jsf = function (w, d, s, h, c, n, yc) { if (yc !== null) { lwait(w, 'yaCounter'+yc, function(obj) { return (obj && obj.getClientID ? true : false); }, 50, 100, function(yaCounter) { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (yaCounter  && yaCounter.getClientID ? "ya_client_id" + yaCounter.getClientID() + ";" : "") + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":171110}") + ";"; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(s, p); }, function (f) { if(w.jQuery) {  w.jQuery(d).on('yacounter' + yc + 'inited', f ); }}); } else { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":171110}") + ";"; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(s, p); } }; if (!w.jQuery) { var jq = d.createElement(e); jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js'; jq.onload = function () { lwait(w, 'jQuery', function(obj) { return (obj ? true : false); }, 30, 100, function () { jsf(w, d, s, jsHost, c, n, yac); }); }; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(jq, p); } else { jsf(w, d, s, jsHost, c, n, yac); } };
        var gaid = function (w, d, o, ct, n) { if (!!o) { lwait(w, o, function (obj) {  return (obj && obj.getAll ? true : false); }, 200, (nv.userAgent.match(/Opera|OPR\//) ? 10 : 20), function (gaCounter) { var clId = null; try {  var cnt = gaCounter && gaCounter.getAll ? gaCounter.getAll() : null; clId = cnt && cnt.length > 0 && !!cnt[0] && cnt[0].get ? cnt[0].get('clientId') : null; } catch (e) { console.warn("Unable to get clientId, Error: " + e.message); } ct(w, d, 'script', clId, n); }, function (f) { w[o](function () {  f(w[o]); })});} else{ ct(w, d, 'script', null, n); }};
        var cid  = function () { try { var m1 = d.cookie.match('(?:^|;)\\s*_ga=([^;]*)');if (!(m1 && m1.length > 1)) return null; var m2 = decodeURIComponent(m1[1]).match(/(\d+\.\d+)$/); if (!(m2 && m2.length > 1)) return null; return m2[1]} catch (err) {}}();
        if (cid === null && !!w.GoogleAnalyticsObject){
            if (w.GoogleAnalyticsObject=='ga_ckpr') w.ct_ga='ga'; else w.ct_ga = w.GoogleAnalyticsObject;
            if (typeof Promise !== "undefined" && Promise.toString().indexOf("[native code]") !== -1){new Promise(function (resolve) {var db, on = function () {  resolve(true)  }, off = function () {  resolve(false)}, tryls = function tryls() { try { ls && ls.length ? off() : (ls.x = 1, ls.removeItem("x"), off());} catch (e) { nv.cookieEnabled ? on() : off(); }};w.webkitRequestFileSystem ? webkitRequestFileSystem(0, 0, off, on) : "MozAppearance" in d.documentElement.style ? (db = indexedDB.open("test"), db.onerror = on, db.onsuccess = off) : /constructor/i.test(w.HTMLElement) ? tryls() : !w.indexedDB && (w.PointerEvent || w.MSPointerEvent) ? on() : off();}).then(function (pm){
                if (pm){gaid(w, d, w.ct_ga, ct, 2);}else{gaid(w, d, w.ct_ga, ct, 3);}})}else{gaid(w, d, w.ct_ga, ct, 4);}
        }else{ct(w, d, 'script', cid, 1);}})
    (window, document, navigator, localStorage, "47259471");
    </script>
    <!-- /calltouch code -->
</body>

</html>
