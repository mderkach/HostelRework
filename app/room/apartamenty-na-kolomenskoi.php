<?php $title = 'Апартаменты на Коломенской | Хостел Фьюжн'; ?>
<?php include('../template_parts/utm.php')?>
<?php include('../template_parts/header.php')?>
    <div class="room-heading">
        <div class="container">
            <div class="column">
                <h2 class="room-header text-center">Апартаменты на Коломенской</h2>
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
                                <img src="../uploads/2017/09/IMG_5637-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2017/09/ap-kitchen1-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2017/09/ap-kitchen-2-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2017/09/ap-guest-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2017/09/ap-bath-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2017/09/ap-bath-3-750x500.jpg" />
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
                                <img src="../uploads/2017/09/IMG_5637-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2017/09/ap-kitchen1-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2017/09/ap-kitchen-2-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2017/09/ap-guest-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2017/09/ap-bath-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2017/09/ap-bath-3-150x150.jpg" />
                            </li>
                        </ul>
                    </div>
                </div>
                <?php $room = 'Апартаменты на Коломенской'; ?>
                <?php $hostel = 'Коломенская'; ?>
                <?php include('../template_parts/room_form.php')?>
                <div class="col-12 col-lg-3 room-spec-wrapper">
                    <p>Стоимость: <strong>2 800 <span class="rub">₽</span>/ночь</strong></p>
                    <p>Кухня: <strong>да</strong></p>
                    <p>Стиральная машина: <strong>да</strong></p>
                    <p>Площадь комнаты: <strong>33 м<sup>2</sup></strong></p>
                    <p>Телевизор: <strong>да</strong></p>
                    <p>Wi-Fi: <strong>да</strong></p>
                    <p>Гладильная доска: <strong>да</strong></p>
                    <p>Адрес: <strong>Проспект Андропова, 44 корп. 2</strong></p>
                    <p>Метро: <strong>Коломенская (6 минут)</strong></p>
                </div>
                <?php include('../template_parts/room__info-accordeon.php')?>
            </div>
        </div>
    </div>
<?php include('../template_parts/footer.php')?>
<?php include('../template_parts/footer_scripts.php')?>