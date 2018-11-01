<?php $title = 'Двухместный номер с душем | Хостел Фьюжн'; ?>
<?php include('../template_parts/utm.php')?>
<?php include('../template_parts/header.php')?>
    <div class="room-heading">
        <div class="container">
            <div class="column">
                <h2 class="room-header text-center">Двухместный номер с душем</h2>
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
                                <img src="../uploads/2017/11/IMG_1742-HDR-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2017/11/IMG_1754-HDR-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2017/11/IMG_1861-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2017/11/IMG_1864-750x500.jpg" />
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
                                <img src="../uploads/2017/11/IMG_1742-HDR-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2017/11/IMG_1754-HDR-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2017/11/IMG_1861-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2017/11/IMG_1864-150x150.jpg" />
                            </li>
                        </ul>
                    </div>
                </div>
                <?php $room = 'Двухместный номер с душем'; ?>
                <?php $hostel = 'Проспект мира'; ?>
                <?php include('../template_parts/room_form.php')?>
                <div class="col-12 col-lg-3 room-spec-wrapper">
                    <p>Стоимость: <strong>2 500 <span class="rub">₽</span>/ночь</strong></p>
                    <p>Кровать: <strong>1</strong></p>
                    <p>Макс. кол-во человек: <strong>2</strong></p>
                    <p>Площадь комнаты: <strong>12 м<sup>2</sup></strong></p>
                    <p>Wi-Fi: <strong>да</strong></p>
                    <p>Уборка номера: <strong>да</strong></p>
                    <p>Вешалки: <strong>да</strong></p>
                    <p>Шкафчик: <strong>да</strong></p>
                </div>
                <?php include('../template_parts/room__info-accordeon.php')?>
            </div>
        </div>
    </div>
<?php include('../template_parts/footer.php')?>
<?php include('../template_parts/footer_scripts.php')?>