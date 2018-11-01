
                <div class="d-none d-lg-block col-lg-3 offset-lg-1 sidebar-form-wrapper sticky-top sticky-offset">
                    <h3>Забронируйте номер сейчас</h3>
                    <form action="../handlers/order.php" id="form_order" method="post" class="sidebar-form form">
                        <input name="room" value="<?php echo($room)?>" type="hidden">
                        <input name="hostel" value="<?php echo($hostel)?>" type="hidden">
                        <input name="utm_medium" value="<?php echo $utm_medium; ?>" type="hidden">
                        <input name="utm_source" value="<?php echo $utm_source; ?>" type="hidden">
                        <input name="utm_campaign" value="<?php echo $utm_campaign; ?>" type="hidden">
                        <input name="utm_term" value="<?php echo $utm_term; ?>" type="hidden">
                        <input name="utm_content" value="<?php echo $utm_content; ?>" type="hidden">
                        <input name="cm_title" value="<?php echo $cm_title; ?>" type="hidden">
                        <div class="form-group">
                            <input required="" name="in" type="text" class="form-control date" placeholder="Дата заезда"/>
                        </div>
                        <div class="form-group">
                            <input required="" name="out" type="text" class="form-control date" placeholder="Дата отъезда"/>
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
                        <input name="room" value="<?php echo($room)?>" type="hidden">
                        <input name="hostel" value="<?php echo($hostel)?>" type="hidden">
                        <input name="utm_medium" value="<?php echo $utm_medium; ?>" type="hidden">
                        <input name="utm_source" value="<?php echo $utm_source; ?>" type="hidden">
                        <input name="utm_campaign" value="<?php echo $utm_campaign; ?>" type="hidden">
                        <input name="utm_term" value="<?php echo $utm_term; ?>" type="hidden">
                        <input name="utm_content" value="<?php echo $utm_content; ?>" type="hidden">
                        <input name="cm_title" value="<?php echo $cm_title; ?>" type="hidden">
                        <div class="form-group">
                            <input required="" name="in" type="text" class="form-control date" placeholder="Дата заезда" onfocus="(this.type='date')" />
                        </div>
                        <div class="form-group">
                            <input required="" name="out" type="text" class="form-control date" placeholder="Дата отъезда" onfocus="(this.type='date')" />
                        </div>
                        <div class="form-group">
                            <input required="" type="number" class="form-control" placeholder="Количество гостей" />
                        </div>
                        <div class="form-group">
                            <input required="" type="name" class="form-control" placeholder="Введите ваше имя" />
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