<?php $title = 'Контакты | Hostel Fusion'; ?>
<?php include('template_parts/utm.php')?>
<?php include('template_parts/header.php')?>
    <div class="room-heading hostel-heading">
        <div class="container">
            <div class="column">
                <h2 class="room-header hosttel-header text-center">Контакты</h2>
                <p class="text-center">На связи 24 часа</p>
                <div class="button-block hostels-btn-wrapper text-center d-flex flex-column flex-md-row justify-content-center align-items-center">
                    <button data-fancybox data-position="Контакты" data-src="#find-hostel" class="btn red-btn btn-order">ПОЛУЧИТЬ ПОДБОР ХОСТЕЛА</button>
                    <a class="phone-to text-center" style="color: #fff" href="tel:88005519784">8 (800) 551-97-84</a>
                </div>
            </div>
        </div>
    </div>
    <div class="second-screen contacts-screen">
        <div class="container">
            <div class="column">
                <h2 class="text-center after">КАК ДОБРАТЬСЯ ДО FUSION HOSTEL</h2>
                <p class="hf-info">Телефоны: <span onclick="location.href='tel:88005519784'">8 (800) 551-97-84</span></p>
                <p class="hf-info">Электронная почта: <span class="mail" href="mailto:hostelfusion@mail.ru">hostelfusion@mail.ru</span></p>
                <div class="hostel-maps-wrapper">
                    <div class="col p-0 d-flex flex-row flex-wrap align-items-baseline">
                        <h3 class="hostel-label">ХОСТЕЛ НА ПАВЕЛЕЦКОЙ</h3> <span class="col-md-3 col-12" onclick="location.href='tel:88005519784'">8 (800) 551-97-84</span>
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
                            <div class="map-wrapper position-relative" id="map-paveleckaya" height="400" width="100%"></div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="second" aria-labelledby="second-tab">
                            <div class="map-wrapper position-relative" id="map-serpukhovskaya" height="400" width="100%"></div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="third" aria-labelledby="third-tab">
                            <div class="map-wrapper position-relative" id="map-tulskaya" height="400" width="100%"></div>
                        </div>
                    </div>
                </div>
                <div class="hostel-maps-wrapper">
                    <div class="col p-0 d-flex flex-row flex-wrap align-items-baseline">
                        <h3 class="hostel-label">Хостел на Проспекте мира</h3> <span class="col-md-3 col-12">8 (800) 551-97-84</span>
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
                            <div class="map-wrapper position-relative" id="map-mira" height="400" width="100%"></div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="fifth" aria-labelledby="fifth-tab">
                            <div class="map-wrapper position-relative" id="map-rizhskaya" height="400" width="100%"></div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="sixth" aria-labelledby="sixth-tab">
                            <div class="map-wrapper position-relative" id="map-dostoevskaya" height="400" width="100%"></div>
                        </div>
                    </div>
                </div>
                <div class="hostel-maps-wrapper">
                    <div class="col p-0 d-flex flex-row flex-wrap align-items-baseline">
                        <h3 class="hostel-label">Апартаменты на Коломенской</h3> <span class="col-md-3 col-12" onclick="location.href='tel:88005519784'">8 (800) 551-97-84</span>
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
                            <div class="map-wrapper position-relative" id="map-kolomenskaya" height="400" width="100%"></div>
                        </div>
                    </div>
                </div>
                <p class="hf-info">Реквизиты: ООО «Центр» ИНН 7725387510/ ОГРНИП 1177746823649</p>
                <p class="hf-info">Юридический адрес:115280, г. Москва, ул. Восточная, дом 2 корпус 5/51 Тел.: 8 (800) 551-97-84</p>
            </div>
        </div>
    </div>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="js/maps.js"></script>
<?php include('template_parts/footer.php')?>
<?php include('template_parts/modals.php')?> 
<?php include('template_parts/footer_scripts.php')?>
