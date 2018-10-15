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

    <title>Контакты | Hostel Fusion</title>
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
    <div class="room-heading hostel-heading">
        <div class="container">
            <div class="column">
                <h2 class="room-header hosttel-header text-center">Контакты</h2>
                <p class="text-center">На связи 24 часа</p>
                <div class="button-block hostels-btn-wrapper text-center d-flex flex-column flex-md-row justify-content-center align-items-center">
                    <button data-fancybox data-position="Контакты" data-src="#find-hostel" class="btn red-btn btn-order">ПОЛУЧИТЬ ПОДБОР ХОСТЕЛА</button>
                    <a class="phone-to text-center" style="color: #fff" href="tel:+79037903911">+7 (903) 790-39-11</a>
                </div>
            </div>
        </div>
    </div>
    <div class="second-screen contacts-screen">
        <div class="container">
            <div class="column">
                <h2 class="text-center after">КАК ДОБРАТЬСЯ ДО FUSION HOSTEL</h2>
                <p class="hf-info">Телефоны: <span onclick="location.href='tel:+74991166406'">+7 (499) 116-64-06</span></p>
                <p class="hf-info">Электронная почта: <span class="mail" href="mailto:hostelfusion@mail.ru">hostelfusion@mail.ru</span></p>
                <div class="hostel-maps-wrapper">
                    <div class="col p-0 d-flex flex-row flex-wrap align-items-baseline">
                        <h3 class="hostel-label">ХОСТЕЛ НА ПАВЕЛЕЦКОЙ</h3> <span class="col-md-3 col-12" onclick="location.href='tel:+749911666296'">+7(499)-116-62-96</span>
                    </div>
                    <p class="hostel-adress__contact">
                        <img class="adress-img" src="./images/adress-header.png"> г. Москва, Дубининская улица, д. 67, корп. 1
                    </p>
                    <div class="hostel-tabs">
                        <div class="row">
                            <div class="col-12 col-md-1 d-flex justify-content-center justify-content-md-start metro-wrapper">
                                <img src="./images/metro.png" alt="metro">
                            </div>
                            <ul class="nav col-12 col-md-10 adress-nav" role="tablist">
                                <li role="presentation" class="col-12 col-sm-4 col-md-4 col-lg-2 text-center padding-text station-name active">
                                    <a class="dotted-underline" href="#first" id="first-tab" role="tab" data-toggle="tab" aria-controls="first" aria-expanded="true">Павелецкая</a>
                                </li>
                                <li role="presentation" class="col-12 col-sm-4 col-md-4 col-lg-2 text-center padding-text station-name">
                                    <a class="dotted-underline" href="#second" role="tab" id="second-tab" data-toggle="tab" aria-controls="second" aria-expanded="false">Серпуховская</a>
                                </li>
                                <li role="presentation" class="col-12 col-sm-4 col-md-4 col-lg-2 text-center padding-text station-name">
                                    <a class="dotted-underline" href="#third" role="tab" id="third-tab" data-toggle="tab" aria-controls="third" aria-expanded="false">Тульская</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="transport-wrapper d-flex align-items-center justify-content-between flex-column flex-md-row">
                        <div class="col-12 col-md-5  d-flex align-items-center transport-item">
                            <img src="./images/man.png">
                            <p>Пешком (1.6 км) 12 минут по Дубининской улице.</p>
                        </div>
                        <div class="col-12 col-sm-2 col-md-2 col-lg-2 text-center" style="padding-bottom: 20px;">
                            <strong>или</strong>
                        </div>
                        <div class="col-12 col-md-5  d-flex align-items-center transport-item">
                            <img src="./images/transport.png">
                            <p>На трамвае (3,35,38,39,А) 7 минут, остановка 1 Павловский переулок.</p>
                        </div>

                    </div>
                    <div class="card-wrapper tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" role="tabpanel" id="first" aria-labelledby="first-tab">
                            <!--<iframe src="https://yandex.by/map-widget/v1/-/CBauaIhT~A" height="400" frameborder="0" style="width:100%"></iframe>-->
                            <div class="map-wrapper position-relative" id="map-paveleckaya" height="400" width="100%"></div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="second" aria-labelledby="second-tab">
                            <!-- <iframe src="https://yandex.by/map-widget/v1/-/CBau4FUQSD" height="400" frameborder="0" style="width:100%"></iframe>
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad59ee0b0851faf8a4983fd746fcc724a5d74c6a5c379a1e63c47720e3dd64426&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>-->
                            <div class="map-wrapper position-relative" id="map-serpukhovskaya" height="400" width="100%"></div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="third" aria-labelledby="third-tab">
                            <!--<iframe src="https://yandex.by/map-widget/v1/-/CBauaMWmgC" height="400" frameborder="0" style="width:100%"></iframe>
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A34cde6b81c40cd2c40ed04d68f14032b85dca83b58d7bd05da4b926f1bc6c22f&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>-->
                            <div class="map-wrapper position-relative" id="map-tulskaya" height="400" width="100%"></div>
                        </div>
                    </div>
                </div>
                <div class="hostel-maps-wrapper">
                    <div class="col p-0 d-flex flex-row flex-wrap align-items-baseline">
                        <h3 class="hostel-label">Хостел на Проспекте мира</h3> <span class="col-md-3 col-12">+7(499)-116-62-96</span>
                    </div>
                    <p class="hostel-adress__contact">
                        <img class="adress-img" src="./images/adress-header.png"> г. Москва, Банный проезд, д. 3 стр. 1
                    </p>
                    <div class="hostel-tabs">
                        <div class="row">
                            <div class="col-12 col-md-1 d-flex justify-content-center justify-content-md-start metro-wrapper">
                                <img src="./images/metro.png" alt="metro">
                            </div>
                            <ul class="nav col-12 col-md-10 adress-nav" role="tablist">
                                <li role="presentation" class="col-12 col-sm-4 col-md-4 col-lg-2 text-center padding-text station-name active">
                                    <a class="dotted-underline" href="#fourth" id="fourth-tab" role="tab" data-toggle="tab" aria-controls="fourth" aria-expanded="true">Проспект мира</a>
                                </li>
                                <li role="presentation" class="col-12 col-sm-4 col-md-4 col-lg-2 text-center padding-text station-name">
                                    <a class="dotted-underline" href="#fifth" role="tab" id="fifth-tab" data-toggle="tab" aria-controls="fifth" aria-expanded="false">Рижская</a>
                                </li>
                                <li role="presentation" class="col-12 col-sm-4 col-md-4 col-lg-2 text-center padding-text station-name">
                                    <a class="dotted-underline" href="#sixth" role="tab" id="sixth-tab" data-toggle="tab" aria-controls="sixth" aria-expanded="false">Достоевская</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="transport-wrapper d-flex align-items-center justify-content-between flex-column flex-md-row">
                        <div class="col-12 col-lg-5 d-flex align-items-center transport-item">
                            <img src="./images/man.png">
                            <p>Пешком (500 м) по пр.Мира до пер. Больничный, далее дойти (150 м) до ул.Гилярского и завернуть на пр-д Банный (100 м)</p>
                        </div>
                    </div>
                    <div class="card-wrapper tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" role="tabpanel" id="fourth" aria-labelledby="fourth-tab">
                            <!--<iframe src="https://yandex.by/map-widget/v1/-/CBauaBXohD" height="400" frameborder="0" style="width:100%"></iframe>-->
                            <div class="map-wrapper position-relative" id="map-mira" height="400" width="100%"></div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="fifth" aria-labelledby="fifth-tab">
                            <!--                            <iframe src="https://yandex.by/map-widget/v1/-/CBauaJE92C" height="400" frameborder="0" style="width:100%"></iframe>--
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0b6ed1edc02e4409473f110d033842418605202059befdd1f7507fec514c1d62&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>-->
                            <div class="map-wrapper position-relative" id="map-rizhskaya" height="400" width="100%"></div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="sixth" aria-labelledby="sixth-tab">
                            <!--                            <iframe src="https://yandex.by/map-widget/v1/-/CBauaJg7gA" height="400" frameborder="0" style="width:100%"></iframe>
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Abe5a11f6e8ed4b3ab1adf26fa6f5ae1f0f152c9fe4e1ee9e925c024ab62c24a4&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>-->
                            <div class="map-wrapper position-relative" id="map-dostoevskaya" height="400" width="100%"></div>
                        </div>
                    </div>
                </div>
                <div class="hostel-maps-wrapper">
                    <div class="col p-0 d-flex flex-row flex-wrap align-items-baseline">
                        <h3 class="hostel-label">Апартаменты на Коломенской</h3> <span class="col-md-3 col-12" onclick="location.href='tel:+749911666296'">+7(499)-116-62-96</span>
                    </div>
                    <p class="hostel-adress__contact">
                        <img class="adress-img" src="./images/adress-header.png"> г. Москва, Проспект Андропова, д. 44, корп. 2
                    </p>
                    <div class="hostel-tabs">
                        <div class="row">
                            <div class="col-12 col-md-1 d-flex justify-content-center justify-content-md-start metro-wrapper">
                                <img src="./images/metro.png" alt="metro">
                            </div>
                            <ul class="nav col-12 col-md-10 adress-nav" role="tablist">
                                <li role="presentation" class="col-12 col-sm-4 col-md-4 col-lg-2 text-center padding-text station-name active">
                                    <a class="dotted-underline" href="#fourth" id="fourth-tab" role="tab" data-toggle="tab" aria-controls="fourth" aria-expanded="true">Коломенская</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="transport-wrapper d-flex align-items-center justify-content-between flex-column flex-md-row">
                        <div class="col-12 col-lg-5 d-flex align-items-center transport-item">
                            <img src="./images/man.png">
                            <p>Пешком (500 м) по пр.Андропова, далее успускаемся по лестнице во дворы и идем (200 м) до дома</p>
                        </div>
                    </div>
                    <div class="card-wrapper tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" role="tabpanel" id="fourth" aria-labelledby="fourth-tab">
                            <!--<iframe src="https://yandex.by/map-widget/v1/-/CBauaNcWDC" height="400" frameborder="0" style="width:100%"></iframe>-->
                            <div class="map-wrapper position-relative" id="map-kolomenskaya" height="400" width="100%"></div>
                        </div>
                    </div>
                </div>
                <p class="hf-info">Реквизиты: ООО «Центр» ИНН 7725387510/ ОГРНИП 1177746823649</p>
                <p class="hf-info">Юридический адрес:115280, г. Москва, ул. Восточная, дом 2 корпус 5/51 Тел.: +7-499-116-59-08 </p>
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
                    <input name="utm_medium" value="<?php echo $utm_medium; ?>" type="hidden">
                    <input name="utm_source" value="<?php echo $utm_source; ?>" type="hidden">
                    <input name="utm_campaign" value="<?php echo $utm_campaign; ?>" type="hidden">
                    <input name="utm_term" value="<?php echo $utm_term; ?>" type="hidden">
                    <input name="utm_content" value="<?php echo $utm_content; ?>" type="hidden">
                    <input name="cm_title" value="<?php echo $cm_title; ?>" type="hidden">
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
                <input name="utm_medium" value="<?php echo $utm_medium; ?>" type="hidden">
                <input name="utm_source" value="<?php echo $utm_source; ?>" type="hidden">
                <input name="utm_campaign" value="<?php echo $utm_campaign; ?>" type="hidden">
                <input name="utm_term" value="<?php echo $utm_term; ?>" type="hidden">
                <input name="utm_content" value="<?php echo $utm_content; ?>" type="hidden">
                <input name="cm_title" value="<?php echo $cm_title; ?>" type="hidden">
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

    <script src="js/scripts.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="js/maps.js"></script>
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