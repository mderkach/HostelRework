<?php $title = '>Шестиместный номер | Хостел Фьюжн'; ?>
<?php include('../template_parts/utm.php')?>
<?php include('../template_parts/header.php')?>
    <div class="room-info">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 slider-wrapper">
                    <div id="slider-room" class="flexslider-room position-relative">
                        <ul class="slides">
                            <li class="slide-thumb-big">
                                <img src="../uploads/2018/04/fusuion-20-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2018/04/fusuion-14-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2018/04/fusuion-17-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2018/04/fusuion-9-750x500.jpg" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="../uploads/2018/04/fusuion-8-750x500.jpg" />
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
                                <img src="../uploads/2018/04/fusuion-20-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2018/04/fusuion-14-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2018/04/fusuion-17-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2018/04/fusuion-9-150x150.jpg" />
                            </li>
                            <li class="slide-thumb">
                                <img src="../uploads/2018/04/fusuion-8-150x150.jpg" />
                            </li>
                        </ul>
                    </div>
                </div>
                <?php $room = 'Шестиместный номер'; ?>
                <?php $hostel = 'Павелецкая'; ?>
                <?php include('../template_parts/room_form.php')?>
                <div class="col-12 col-lg-3 room-spec-wrapper">
                    <p>Стоимость: <strong>650 <span class="rub">₽</span>/ночь</strong></p>
                    <p>Кровать: <strong>3 двухъярусные</strong></p>
                    <p>Макс. кол-во человек: <strong>6</strong></p>
                    <p>Площадь комнаты: <strong>22 м<sup>2</sup></strong></p>
                    <p>Wi-Fi: <strong>да</strong></p>
                    <p>Уборка номера: <strong>да</strong></p>
                    <p>Вешалки: <strong>да</strong></p>
                </div>
                <?php include('../template_parts/room__info-accordeon.php')?>
            </div>
        </div>
    </div>
<?php include('../template_parts/footer.php')?>
<?php include('../template_parts/footer_scripts.php')?>

