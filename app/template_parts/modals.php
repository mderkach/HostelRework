<!--  popup  -->
<div class="popup" id="popup">
        <div class="container">
            <h2 class="text-center">Забронировать <span class="room-type"></span></h2>
            <form class="form" action="../handlers/order.php" id="form_order">
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
                            <strong><a href="tel:88005519784"> 8 (800) 551-97-84</a></strong>
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
            <form action="../handlers/get_hostel.php" class="form" id="form_find">
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