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

    <title>Недорогой хостел в Москве у метро Fusion Hostel | Хостел в Москве у Павелецкого вокзала</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <link rel="icon" href="./uploads/2017/09/favicon-1.png" sizes="32x32" />
    <link rel="icon" href="./uploads/2017/09/favicon-1.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="./uploads/2017/09/favicon-1.png" />
    <meta name="msapplication-TileImage" content="./uploads/2017/09/favicon-1.png" />
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#ef4b51">
    <!-- Custom Browsers Color End -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.min.css">
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
                    <a class="navbar-brand col-1 pl-0" href="./">
                        <img src="./images/logo45.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse col-6" id="navbarNavDropdown">
                        <ul class="navbar-nav col-12 p-0 justify-content-between">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Комнаты и цены</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="./xostel-na-paveleckoj.php">Хостел на Павелецкой</a>
                                    <a class="dropdown-item" href="./xostel-na-prospekte-mira.php">Хостел на Проспекте мира</a>
                                    <a class="dropdown-item" href="./room/apartamenty-na-kolomenskoi.php">Апартаменты на Коломенской</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Фотогалерея</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="./gallery-na-paveleckoj.php">Павелецкая</a>
                                    <a class="dropdown-item" href="./gallery-na-prospekte-mira.php">Проспект мира</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./buy.php">Оплата</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="socials-header col-3 d-flex justify-content-around align-items-center">
                        <!--
                        <a href="viber://chat?number=+79092332590"><img src="./images/socials-neon/viber.png" alt="" class="socials-neon"></a>
                        <a href="https://api.whatsapp.com/send?phone=+79629809926"><img src="./images/socials-neon/whatsapp.png" alt="" class="socials-neon"></a>
-->
                        <a href="https://vk.com/hostelfusion" target="_blank"><img src="./images/socials-neon/vk.png" alt="" class="socials-neon"></a>
                        <a href="https://www.instagram.com/hostelfusion/" target="_blank"><img src="./images/socials-neon/instagram.png" alt="" class="socials-neon"></a>
                        <a href="https://facebook.com/fusionhostel/" target="_blank"><img src="./images/socials-neon/facebook.png" alt="" class="socials-neon"></a>
                    </div>
                    <div class="header-phone-box d-flex col-2 pr-0">
                        <div class="info-box padr-5 d-flex flex-column text-right">
                            <a class="phone" href="tel:+79037903911">+7 (903) 790-39-11</a>
                            <a class="mail" href="mailTo:hostelfusion@mail.ru">hostelfusion@mail.ru</a>
                        </div>
                    </div>
                </nav>
                <nav class="navbar mobile-navbar col-12 d-lg-none navbar-expand-lg relative">
                    <a class="navbar-brand col-2 pl-0 mr-0" href="./">
                        <img src="./images/logo45.png" alt="">
                    </a>
                    <div class="hdr-btn-wrapper ">
                        <button data-fancybox data-position="Шапка мобильного меню" data-src="#find-hostel" class="btn red-btn">Подбор номера</button>
                    </div>
                    <div class="icon-wrapper d-flex justify-content-center align-items-center">
                        <a href="tel:+79037903911">
                            <img src="./images/socials-neon/phone.png" alt="" class="phone">
                        </a>
                    </div>
                    <button class="navbar-toggler p-0 hamburger hamburger--spring collapsed" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarNavAltMarkup" style="">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="./xostel-na-paveleckoj.php">Хостел на Павелецкой</a>
                            <a class="nav-item nav-link" href="./xostel-na-prospekte-mira.php">Хостел на Проспекте мира</a>
                            <a class="nav-item nav-link" href="./room/apartamenty-na-kolomenskoi.php">Апартаменты на Коломенской</a>
                            <a class="nav-item nav-link" href="./buy.php">Оплата</a>
                            <a class="nav-link" href="./contact.php">Контакты</a>
                            <div class="socials-header p-0 col-sm-5 col-8 d-flex justify-content-between align-items-center">
                                <!--
                                <a href="viber://chat?number=+79092332590"><img src="./images/socials-neon/viber.png" alt="" class="socials-neon"></a>
                                <a href="https://api.whatsapp.com/send?phone=+79629809926"><img src="./images/socials-neon/whatsapp.png" alt="" class="socials-neon"></a>
-->
                                <a href="https://vk.com/hostelfusion" target="_blank"><img src="./images/socials-neon/vk.png" alt="" class="socials-neon"></a>
                                <a href="https://www.instagram.com/hostelfusion/" target="_blank"><img src="./images/socials-neon/instagram.png" alt="" class="socials-neon"></a>
                                <a href="https://facebook.com/fusionhostel/" target="_blank"><img src="./images/socials-neon/facebook.png" alt="" class="socials-neon"></a>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </header>
    <div class="main">
        <section class="main-screen">
            <div class="main-section">
                <div class="container">
                    <div class="column">
                        <h1 class="text-center">
                            СЕТЬ ХОСТЕЛОВ FUSION В МОСКВЕ
                        </h1>
                        <p class="desc-section text-center">
                            от 500 <span class="rub">₽</span> сутки
                        </p>
<!--
                        <p class="desc-section text-center">
                            , для студентов - <del>500</del> 370 <span class="rub">₽</span> сутки
                        </p>
-->
                        <div class="col d-flex justify-content-center flex-column flex-md-row adresses-wrapper">
                            <div class="col-12 col-md-4 d-flex align-items-center justify-content-center justify-content-md-end">
                                <img class="checkmark" src="./images/adress-header.png">
                                <a href="#hostel-paveleckaya" class="address-on-main">
                                    Хостел на Павелецкой<br>
                                    <span class="d-md-inline d-none">(12 минут пешком)</span>
                                </a>
                                <span class="d-md-none"><img onclick="location.href='tel:+79037903911'" class="main-phone-small" src="./images/socials-neon/phone.png" alt=""></span>
                            </div>
                            <div class="col-12 col-md-4 offset-md-2 d-flex align-items-center justify-content-center justify-content-md-start">
                                <img class="checkmark" src="./images/adress-header.png">
                                <a href="#hostel-pr-mira" class="address-on-main">
                                    Хостел на Проспекте мира<br>
                                    <span class="d-md-inline d-none">(7 минут пешком)</span>
                                </a>
                                <span class="d-md-none"><img onclick="location.href='tel:+79037903911'" class="main-phone-small" src="./images/socials-neon/phone.png" alt=""></span>
                            </div>
                        </div>
                    </div>
                    <div class="service-block">
                        <div class="row d-none d-md-flex justify-content-between">
                            <div class="service-box d-flex flex-column align-items-center justify-content-start">
                                <div class="service-img">
                                    <img src="./images/1-header.png" />
                                </div>
                                <p class="desc text-center">
                                    Стойка регистрации<br> 24/7
                                </p>
                            </div>
                            <div class="service-box d-flex flex-column align-items-center justify-content-start">
                                <div class="service-img">
                                    <img src="./images/2-header.png" />
                                </div>
                                <p class="desc text-center">
                                    Чисто<br>и уютно
                                </p>
                            </div>
                            <div class="service-box d-flex flex-column align-items-center justify-content-start">
                                <div class="service-img">
                                    <img src="./images/5-header.png" />
                                </div>
                                <p class="desc text-center">
                                    Кофе и чай<br> с вареньем
                                </p>
                            </div>
                            <div class="service-box d-flex flex-column align-items-center justify-content-start">
                                <div class="service-img">
                                    <img src="./images/icon3.png" />
                                </div>
                                <p class="desc text-center">
                                    Бесплатный<br> Wi-Fi
                                </p>
                            </div>
                            <div class="service-box d-flex flex-column align-items-center justify-content-start">
                                <div class="service-img">
                                    <img src="./images/4-header.png" />
                                </div>
                                <p class="desc text-center">
                                    Кино и настольные<br> игры по вечерам
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="socials-main d-md-none col-12 col-sm-8 d-flex justify-content-around">
<!--
                        <a href="viber://chat?number=+79092332590"><img src="./images/socials-neon/viber.png" alt="" class="socials-neon"></a>
                        <a href="https://api.whatsapp.com/send?phone=+79629809926"><img src="./images/socials-neon/whatsapp.png" alt="" class="socials-neon"></a>
-->
                        <a href="https://vk.com/hostelfusion" target="_blank"><img src="./images/socials-neon/vk.png" alt="" class="socials-neon"></a>
                        <a href="https://www.instagram.com/hostelfusion/" target="_blank"><img src="./images/socials-neon/instagram.png" alt="" class="socials-neon"></a>
                        <a href="https://facebook.com/fusionhostel/" target="_blank"><img src="./images/socials-neon/facebook.png" alt="" class="socials-neon"></a>
                    </div>
                    <div class="btn-wrapper">
                        <div class="row d-flex justify-content-center">
                            <div class="button-block">
                                <button data-fancybox data-src="#find-hostel" data-position="Главный экран" class="btn btn-red btn-order">ПОЛУЧИТЬ ПОДБОР ХОСТЕЛА</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="second-screen">
        <div class="container">
            <div class="column">
                <h2 class="text-center after">КОМНАТЫ И ЦЕНЫ</h2>
            </div>
            <div id="hostel-pr-mira" class="row flex-md-row flex-column justify-content-center align-items-center">
                <div class="img-wrapper col-12 col-md-2">
                    <a href="./xostel-na-prospekte-mira.php">
                        <img src="./images/circ-wom.png" alt="">
                    </a>
                    <p class="text-center rooms-count">11 номеров</p>
                </div>
                <div class="col-12 col-md-7">
                    <div class="row justify-content-center justify-content-md-start">
                        <h3 class="hostel-label">ХОСТЕЛ FUSION НА ПРОСПЕКТЕ МИРА ОТ <span class="red">500</span> <span class="rub">₽</span> </h3>
                    </div>
                    <div class="col p-0 d-flex flex-column flex-lg-row align-items-center justify-content-between justify-content-md-start align-items-md-start">
                        <div class="col-12 col-lg-5 grp" onclick="location.href='tel:+79037903911'">
                            <img src="./images/phone.png" alt="phone">
                            <span>+7 (903) 790-39-11</span>
                        </div>
                        <div class="col-12 col-lg-5 grp">
                            <img src="./images/metro-gray.png" alt="metro">
                            <span>7 мин. пешком</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row justify-content-center justify-content-md-start popover-wrapper">
                            <div class="col-12 d-flex justify-content-center justify-content-md-start">
                                <button class="dotted-underline popover-btn popover-pr-myra" data-toggle="popover" data-placement="bottom">
                                    <img class="adress-img" src="./images/adress-header.png">
                                    г. Москва, Банный проезд, д. 3 стр. 1
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="col-12 col-md-10 offset-md-2 p-0">
                    <h4 class="order-hostel text-left">Забронируйте хостел сейчас</h4>
                    <div class="col-12 d-flex flex-column flex-lg-row p-0 room-wrapper">
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/nomer-na-6-chelovek.php">
                                <img src="./uploads/2018/05/pm-mini-1.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/nomer-na-6-chelovek.php" class="room-link">Общий номер на 6 человек</a>
                                </p>
                                <p class="room-price">
                                    <span>650</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Общий номер на 6 человек" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/8-man-room.php">
                                <img src="./uploads/2018/05/pm-mini-2.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/8-man-room.php" class="room-link">Общий номер на 8 человек (мужской)</a>
                                </p>
                                <p class="room-price">
                                    <span>550</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Общий номер на 8 человек (мужской)" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-lg-row p-0 room-wrapper">
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/nomer-na-8-chelovek-shenskii.php">
                                <img src="./uploads/2018/05/pm-mini-3.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/nomer-na-8-chelovek-shenskii.php" class="room-link">Общий номер на 8 человек (женский)</a>
                                </p>
                                <p class="room-price">
                                    <span>550</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Общий номер на 8 человек (женский)" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/obshhij-nomer-na-10-chelovek.php">
                                <img src="./uploads/2018/05/pm-mini-4.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/obshhij-nomer-na-10-chelovek.php" class="room-link">Общий номер на 10 человек</a>
                                </p>
                                <p class="room-price">
                                    <span>500</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Общий номер на 10 человек" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-lg-row p-0 room-wrapper">
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/dvuxmestnyj-nomer-s-odnoj-kro-4.php">
                                <img src="./uploads/2018/05/pm-mini-5.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/dvuxmestnyj-nomer-s-odnoj-kro-4.php" class="room-link">Двухместный номер с одной двуспальной кроватью</a>
                                </p>
                                <p class="room-price">
                                    <span>1 900</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Двухместный номер с одной двуспальной кроватью" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/dvuxmestnyj-dvumya-odnospalnymi-krovatyami-2.php">
                                <img src="./uploads/2018/05/pm-mini-6.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/dvuxmestnyj-dvumya-odnospalnymi-krovatyami-2.php" class="room-link">Двухместный номер с раздельными кроватями</a>
                                </p>
                                <p class="room-price">
                                    <span>1 900</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Двухместный номер с раздельными кроватями" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-lg-row p-0 room-wrapper">
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/tryoxmestnyj-nomer.php">
                                <img src="./uploads/2018/05/pm-mini-7.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/tryoxmestnyj-nomer.php" class="room-link">Трехместный номер</a>
                                </p>
                                <p class="room-price">
                                    <span>1 800</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Трехместный номер" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/dvuxmestnyj-nomer-s-dushem.php">
                                <img src="./uploads/2018/05/pm-mini-8.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/dvuxmestnyj-nomer-s-dushem.php" class="room-link">Двухместный номер с душем</a>
                                </p>
                                <p class="room-price">
                                    <span>2 500</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Двухместный номер с душем" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-lg-row p-0 room-wrapper">
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/2-places-room-with-tv.php">
                                <img src="./uploads/2018/05/pm-mini-9.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/2-places-room-with-tv.php" class="room-link">Двухкомнатный номер с ТВ</a>
                                </p>
                                <p class="room-price">
                                    <span>2 500</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Двухкомнатный номер с ТВ" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/dvuxmestnyj-dvumya-odnospalnymi-krovatyami.php">
                                <img src="./uploads/2018/05/pm-mini-10.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/dvuxmestnyj-dvumya-odnospalnymi-krovatyami.php" class="room-link">Место в двухместном номере</a>
                                </p>
                                <p class="room-price">
                                    <span>999</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Место в двухместном номере" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex p-0 room-wrapper">
                        <div class="col-12 p-0 d-flex room-card">
                            <a href="./room/family-room-mira.php">
                                <img src="./uploads/2018/05/pm-mini-11.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/family-room-mira.php" class="room-link">Семейный номер</a>
                                </p>
                                <p class="room-price">
                                    <span>2 500</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Семейный номер" data-hostel="Проспект мира" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="red text-center">В выходные и праздники цены могут отличаться, актуальные цены уточняйте у администратора по телефону <a class="phone-to" href="tel:+79037903911">+7 (903) 790-39-11</a></h4>
            </div>
            <div id="hostel-paveleckaya" class="row flex-md-row flex-column justify-content-center align-items-center">
                <div class="img-wrapper col-12 col-md-2">
                    <a href="./xostel-na-paveleckoj.php">
                        <img src="./images/circ-room.png" alt="">
                    </a>
                    <p class="text-center rooms-count">8 номеров</p>
                </div>
                <div class="col-12 col-md-7">
                    <div class="row justify-content-center justify-content-md-start">
                        <h3 class="hostel-label">ХОСТЕЛ FUSION НА ПАВЕЛЕЦКОЙ ОТ <span class="red">600</span> <span class="rub">₽</span></h3>
                    </div>
                    <div class="col p-0 d-flex flex-column flex-lg-row align-items-center justify-content-between justify-content-md-start align-items-md-start">
                        <div class="col-12 col-lg-5 grp" onclick="location.href='tel:+79037903911'">
                            <img src="./images/phone.png" alt="phone">
                            <span>+7 (903) 790-39-11</span>
                        </div>
                        <div class="col-12 col-lg-5 grp">
                            <img src="./images/metro-gray.png" alt="metro">
                            <span>12 мин. пешком</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-12 d-flex justify-content-center justify-content-md-start">
                                <button class="dotted-underline popover-btn popover-paveleckaya" data-toggle="popover" data-placement="bottom">
                                    <img class="adress-img" src="./images/adress-header.png">
                                    г. Москва, Дубининская улица, д. 67. Корп. 1
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="col-12 col-md-10 offset-md-2 p-0">
                    <h4 class="order-hostel text-left">Забронируйте хостел сейчас</h4>
                    <div class="col-12 d-flex flex-column flex-lg-row p-0 room-wrapper">
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/one-bed-room.php">
                                <img src="./uploads/2018/05/pav-mini-1.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/one-bed-room.php" class="room-link">Одноместный номер</a>
                                </p>
                                <p class="room-price">
                                    <span>1 500</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Одноместный номер" data-hostel="Павелецкая" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/standard-room-one-king-bed.php">
                                <img src="./uploads/2018/05/pav-mini-2.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/standard-room-one-king-bed.php" class="room-link">Двухместный номер с санузлом</a>
                                </p>
                                <p class="room-price">
                                    <span>2 900</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Двухместный номер с санузлом" data-hostel="Павелецкая" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-lg-row p-0 room-wrapper">
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/superior-room-two-double-beds.php">
                                <img src="./uploads/2018/05/pav-mini-3.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/superior-room-two-double-beds.php" class="room-link">Двухместный номер с раздельными кроватями</a>
                                </p>
                                <p class="room-price">
                                    <span>2 200</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Двухместный номер с раздельными кроватями" data-hostel="Павелецкая" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/family-room-pavel.php">
                                <img src="./uploads/2018/05/pav-mini-4.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/family-room-pavel.php" class="room-link">Семейный номер</a>
                                </p>
                                <p class="room-price">
                                    <span>2 600</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Семейный номер" data-hostel="Павелецкая" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-lg-row p-0 room-wrapper">
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/8-places-room-man.php">
                                <img src="./uploads/2018/05/pav-mini-5.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/8-places-room-man.php" class="room-link">Восьмиместный номер (для мужчин)</a>
                                </p>
                                <p class="room-price">
                                    <span>600</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Восьмиместный номер (для мужчин)" data-hostel="Павелецкая" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/vosmimestnyj-nomer-shenshini.php">
                                <img src="./uploads/2018/05/pav-mini-6.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/vosmimestnyj-nomer-shenshini.php" class="room-link">Восьмиместный номер (для женщин)</a>
                                </p>
                                <p class="room-price">
                                    <span>600</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Восьмиместный номер (для женщин)" data-hostel="Павелецкая" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-column flex-lg-row p-0 room-wrapper">
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/dvuxmestnyj-nomer-s-odnoj-krovatyu.php">
                                <img src="./uploads/2018/05/pav-mini-7.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/dvuxmestnyj-nomer-s-odnoj-krovatyu.php" class="room-link">Двухместный номер с одной двуспальной кроватью</a>
                                </p>
                                <p class="room-price">
                                    <span>1 900</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Двухместный номер с одной двуспальной кроватью" data-hostel="Павелецкая" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 p-0 d-flex room-card">
                            <a href="./room/6-places-room.php">
                                <img src="./uploads/2018/05/pav-mini-8.jpg">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/6-places-room.php" class="room-link">Шестиместный номер</a>
                                </p>
                                <p class="room-price">
                                    <span>650</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Шестиместный номер" data-hostel="Павелецкая" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="red text-center">В выходные и праздники цены могут отличаться, актуальные цены уточняйте у администратора по телефону <a class="phone-to" href="tel:+79037903911">+7 (903) 790-39-11</a></h4>
            </div>
            <div class="row flex-md-row flex-column justify-content-center align-items-center">
                <div class="img-wrapper col-12 col-md-2">
                    <a href="./room/apartamenty-na-kolomenskoi.php">
                        <img src="./images/kolomenskaya.png" alt="">
                    </a>
                    <p class="text-center rooms-count">7 фото</p>
                </div>
                <div class="col-12 col-md-7">
                    <div class="row justify-content-center justify-content-md-start">
                        <h3 class="hostel-label">АПАРТАМЕНТЫ НА КОЛОМЕНСКОЙ: <span class="red">2800</span> <span class="rub">₽</span></h3>
                    </div>
                    <div class="col p-0 d-flex flex-column flex-lg-row align-items-center justify-content-between justify-content-md-start align-items-md-start">
                        <div class="col-12 col-lg-5 grp" onclick="location.href='tel:+79037903911'">
                            <img src="./images/phone.png" alt="phone">
                            <span>+7 (903) 790-39-11</span>
                        </div>
                        <div class="col-12 col-lg-5 grp">
                            <img src="./images/metro-gray.png" alt="metro">
                            <span>700 метров</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-12 d-flex justify-content-center justify-content-md-start">
                                <button class="dotted-underline popover-btn popover-kolomenskaya" data-toggle="popover" data-placement="bottom">
                                    <img class="adress-img" src="./images/adress-header.png">
                                    г. Москва, Проспект Андропова, д. 44, корп. 2
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="col-12 col-md-10 offset-md-2 p-0">
                    <h4 class="order-hostel text-left">Забронируйте хостел сейчас</h4>
                    <div class="col-12 col-lg-6 d-flex p-0 room-wrapper">
                        <div class="col-12 p-0 d-flex room-card">
                            <a href="./room/apartamenty-na-kolomenskoi.php">
                                <img src="./images/room-min-9.png">
                            </a>
                            <div class="col">
                                <p class="room-name">
                                    <a href="./room/apartamenty-na-kolomenskoi.php" class="room-link">Апартаменты на Коломенской</a>
                                </p>
                                <p class="room-price">
                                    <span>2 800</span> <span class="rub">₽</span>/сутки
                                </p>
                                <button data-fancybox data-src="#popup" data-room="Апартаменты на Коломенской" data-hostel="Коломенская" class="btn red-btn btn-order">Забронировать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="red text-center">В выходные и праздники цены могут отличаться, актуальные цены уточняйте у администратора по телефону <a class="phone-to" href="tel:+79037903911">+7 (903) 790-39-11</a></h4>
            </div>
        </div>
    </div>
    <div class="third-screen">
        <div class="container">
            <div class="row">
                <div class="bullit-block col-12 d-flex flex-column flex-md-row justify-content-between">
                    <div class="bullit-box d-flex flex-column justify-content-center">
                        <div class="image-box">
                            <img src="./images/3-header.png" style="opacity: 1;">
                        </div>
                        <p class="title-box red">
                            Экскурсионное<br>обслуживание
                        </p>
                        <p class="desc-box">
                            Для наших любимых
                            <br>гостей
                        </p>
                    </div>
                    <div class="bullit-box d-flex flex-column justify-content-center">
                        <div class="image-box">
                            <img src="./images/icon7.png" style="opacity: 1;">
                        </div>
                        <p class="title-box red">
                            Визовая<br>поддержка
                        </p>
                        <p class="desc-box">
                            Поможем в получении<br>визы
                        </p>
                    </div>
                    <div class="bullit-box d-flex flex-column justify-content-center">
                        <div class="image-box">
                            <img src="./images/icon5.png" style="opacity: 1;">
                        </div>
                        <p class="title-box red">
                            Большая общая<br>зона
                        </p>
                        <p class="desc-box">
                            С комфортными диванами<br> и уютными столиками
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--
    <div class="fourth-screen">
        <div class="container">
            <div class="column relative">
                <h3 class="reviews-title text-center">Отзывы</h3>
                <div class="reviews-controls">
                    <i class="icon-angle-left flex-prev"></i>
                    <i class="icon-angle-right flex-next"></i>
                </div>
                <div class="slider-wrapper">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="review">
                                    <p class="review-descr text-center">Комфортный и чистый хостел с удобным расположением. Удачный вариант для тех, кто вылетает из Домодедово &#8212; до аэроэкспресса рукой подать. Кроме того, есть быстрый WiFi, для меня это важно.</p>
                                    <p class="review-author text-center">Андрей, деловая поездка</p>
                                </div>
                            </li>
                            <li>
                                <div class="review">
                                    <p class="review-descr text-center">Хороший недорогой хостел с приятными ценами. Отдыхали с подругой в комнате для женщин, очень понравилось. Рекомендуем всем гостям столицы, особенно если бюджет небольшой. Заедем еще, если будем в Москве!</p>
                                    <p class="review-author text-center">Полина, турист</p>
                                </div>
                            </li>
                            <li>
                                <div class="review">
                                    <p class="review-descr text-center">Отличный хостел, есть все необходимое. Не кормят разве что, но рядом хватает кафе с магазинами. А еще мне понравился общительный и доброжелательный персонал – девушки рассказали, как добраться до метро, и что интересного есть рядом. Осмотреть успел не все, так что еще вернусь)</p>
                                    <p class="review-author text-center">Максим, турист</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <footer>
        <div class="container">
            <div class="row flex-column flex-md-row">
                <div class="col-12 col-md-3">
                    <h4 class="footer-heading">Забронируйте сейчас</h4>
                    <div class="textwidget">
                        <p>
                            <i class="fa fa-phone" style="color: #333; font-size: 16px; "></i>
                            <a href="tel:+79037903911">+7 (903) 790-39-11</a>
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
                            <a href="tel:+74991166878">+7 (499) 116-68-78</a>
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
                        <a href="viber://chat?number=+79092332590"><img src="./images/socials-neon/viber.png" alt="" class="socials-neon"></a>
                        <a href="https://api.whatsapp.com/send?phone=+79629809926"><img src="./images/socials-neon/whatsapp.png" alt="" class="socials-neon"></a>
-->
                        <a href="https://vk.com/hostelfusion" target="_blank"><img src="./images/socials-neon/vk.png" alt="" class="socials-neon"></a>
                        <a href="https://www.instagram.com/hostelfusion/" target="_blank"><img src="./images/socials-neon/instagram.png" alt="" class="socials-neon"></a>
                        <a href="https://facebook.com/fusionhostel/" target="_blank"><img src="./images/socials-neon/facebook.png" alt="" class="socials-neon"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--  popup  -->
    <div class="popup" id="popup">
        <div class="container">
            <h2 class="text-center">Забронировать <span class="room-type"></span></h2>
            <form class="form" action="" id="form_order">
                <div class="form-row">
                    <input name="room" value="" type="hidden">
                    <input name="hostel" value="" type="hidden">
                    <div class="col-12 col-md">
                        <input required="" name="in" type="text" class="form-control date" placeholder="Дата заезда" />
                    </div>
                    <div class="col-12 col-md">
                        <input required="" name="out" type="text" class="form-control date" placeholder="Дата отъезда" />
                    </div>
                    <div class="form-group col-12">
                        <input required="" name="guests" type="number" class="form-control" placeholder="Количество гостей" />
                    </div>
                    <div class="form-group col-12">
                        <input required="" type="name" name="name" class="form-control" placeholder="Введите ваше имя" />
                    </div>
                    <div class="form-group col-12">
                        <input required="" type="tel" name="phone" class="form-control" placeholder="Введите номер телефона" />
                    </div>
                    <div class="form-group col-12">
                        <input type="submit" id="submit_order" class="btn btn-red btn-order" value="Забронировать сейчас">
                    </div>
                    <div class="form-group col-12">
                        <p class="text-center">
                            Или забронируйте по номеру:<br>
                            <strong><a href="tel:+79037903911"> +7 (903) 790-39-11</a></strong>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="popup popup-find" id="find-hostel">
        <div class="container">
            <h2 class="text-center">Получить подбор хостела</h2>
            <p class="text-center">Заполните поля ниже сейчас</p>
            <form action="" class="form" id="form_find">
                <input type="hidden" name="position" value="">
                <div class="form-row">
                    <div class="form-group col-12">
                        <input required="" type="name" name="name" class="form-control" placeholder="Введите ваше имя" />
                    </div>
                    <div class="form-group col-12">
                        <input required="" type="tel" name="phone" class="form-control" placeholder="Введите номер телефона" />
                    </div>
                    <div class="form-group col-12">
                        <input type="submit" id="submit_find" class="btn btn-red btn-order" value="ПОЛУЧИТЬ ПОДБОР ХОСТЕЛА">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--  popup  -->
    <script src="./js/scripts.min.js"></script>
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
