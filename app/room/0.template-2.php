<?php $title = 'ВОСЬМИМЕСТНЫЙ НОМЕР (ДЛЯ МУЖЧИН) | Хостел Фьюжн'; ?>
<?php include('../template_parts/utm.php')?>
<?php include('../template_parts/header.php')?>
    <div class="room-heading">
        <div class="container">
            <div class="column">
                <h2 class="room-header text-center">ВОСЬМИМЕСТНЫЙ НОМЕР (ДЛЯ МУЖЧИН)</h2>
            </div>
        </div>
    </div>
    <div class="room-info">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 slider-wrapper">
                    <div id="slider-room" class="flexslider-room">
                        <ul class="slides">
                            <li class="slide-thumb-big">
                                <img src="" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="" />
                            </li>
                            <li class="slide-thumb-big">
                                <img src="" />
                            </li>
                        </ul>
                    </div>
                    <div class="custom-navigation">
                        <a href="#" class="flex-prev">Prev</a>
                        <div class="custom-controls-container"></div>
                        <a href="#" class="flex-next">Next</a>
                    </div>
                    <div id="carousel-room" class="flexslider-room-carousel">
                        <ul class="slides">
                            <li class="slide-thumb">
                                <img src="" />
                            </li>
                            <li class="slide-thumb">
                                <img src="" />
                            </li>
                            <li class="slide-thumb">
                                <img src="" />
                            </li>
                        </ul>
                    </div>
                </div>
                <?php $room = 'Двухкомнатный номер с ТВ'; ?>
                <?php $hostel = 'Проспект мира'; ?>
                <?php include('../template_parts/room_form.php')?>
                <div class="col-12 col-lg-3 room-spec-wrapper">
                    <p>Стоимость: <strong>2 800 <span class="rub">₽</span>/ночь</strong></p>
                    <p>Кровать: <strong>6</strong></p>
                    <p>Макс. кол-во человек: <strong>6</strong></p>
                    <p>Площадь комнаты: <strong>16 м<sup>2</sup></strong></p>
                    <p>Wi-Fi: <strong>да</strong></p>
                    <p>Уборка номера: <strong>да</strong></p>
                    <p>Вешалки: <strong>да</strong></p>
                    <p>Шкафчик: <strong>нет</strong></p>
                </div>
                <?php include('../template_parts/room__info-accordeon.php')?>
            </div>
        </div>
    </div>
<?php include('../template_parts/footer.php')?>
<?php include('../template_parts/modals.php')?> 
<?php include('../template_parts/footer_scripts.php')?>