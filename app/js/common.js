$(function () {

    // Custom JS
    //hamburg button anim
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function (e) {
        $hamburger.toggleClass("is-active");
    });
    //smoothscroll

    $('.address-on-main').click(function () {
        var sectionTo = $(this).attr('href');
        if (window.matchMedia('(max-width: 480px)').matches) {
            $('html, body').animate({
                scrollTop: $(sectionTo).offset().top - 75
            }, 1500);
        } else {
            $('html, body').animate({
                scrollTop: $(sectionTo).offset().top - 120 //srcoll to elemement with 120px offset on top (sticky header height)
            }, 1500);
        }
    });
    //slider on main page
    $('.flexslider').flexslider({
        animation: 'fade',
        animationLoop: true,
        controlsContainer: $(".reviews-controls"),
        customDirectionNav: $(".reviews-controls i"),
        controlNav: false,
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
    //slider in room page
    $('#carousel-room').flexslider({
        animation: "slide",
        animationLoop: true,
        slideshow: true,
        itemWidth: 75,
        itemMargin: 30,
        asNavFor: '#slider-room',
    });

    $('#slider-room').flexslider({
        animation: "slide",
        animationLoop: true,
        slideshow: true,
        controlsContainer: $(".custom-controls-container"),
        customDirectionNav: $(".custom-navigation a"),
        sync: "#carousel-room"
    });
    //inputmask
    $('input[name="phone"]').inputmask("+7(999)999-99-99");
    //popovers
    $('.popover-pr-myra').popover({
        content: '<div class="main-iframe"><button class="popover-close" data-dismiss="popover" ><img id="close" src="./images/close.png"/></button><iframe src="https://yandex.by/map-widget/v1/-/CBauUVTtpA" height="380" frameborder="0" style="width:100%"></iframe></div>',
        html: true,
        trigger: 'click',
        type: 'button',
        placement: 'bottom',
        fallbackPlacement: [],
    });
    $('.popover-paveleckaya').popover({
        content: '<div class="main-iframe"><button class="popover-close" data-dismiss="popover" ><img id="close" src="./images/close.png"/></button><iframe src="https://yandex.by/map-widget/v1/-/CBauUGWLSA" height="380" frameborder="0" style="width:100%"></iframe></div>',
        html: true,
        trigger: 'click',
        type: 'button',
        placement: 'bottom',
        fallbackPlacement: [],
    });
    $('.popover-kolomenskaya').popover({
        content: '<div class="main-iframe"><button class="popover-close" data-dismiss="popover" ><img id="close" src="./images/close.png"/></button><iframe src="https://yandex.by/map-widget/v1/-/CBauUKDHSC" height="380" frameborder="0" style="width:100%"></iframe></div>',
        html: true,
        trigger: 'click',
        type: 'button',
        placement: 'bottom',
        fallbackPlacement: [],
    });
    //close popover on button
    $(document).click(function (e) {
        if (e.target.id == "close") {
            $('.popover').popover('hide');
        }
    });
    //close poper by click outside
    $('html').on('click', function (e) {
        if (typeof $(e.target).data('original-title') == 'undefined' &&
            !$(e.target).parents().is('.popover-body')) {
            $('[data-original-title]').popover('hide');
        }
    });
    //fancybox
    $('[data-fancybox]').fancybox({
        modal: false,
        buttons: ["close"],
        hideScrollbar: true,
        openEffect  : 'none',
        closeEffect : 'none'
    });
    //popup data placement
    $('.room-type').html(); //get span with room name | получаем спан с именем номера
    $('input[name="room"]').val(); //get value of hidden input | получаем значение скрытого инпута
    $('input[name="hostel"]').val(); //get value of hidden input | получаем значение скрытого инпута
    $('input[name="position"]').val(); //get value of hidden input | получаем значение скрытого инпута
    $('[data-room]').on('click', function () { //if click on button with data-room attr | по клику на кнопку с  data-room
        var room = $(this).data('room'); //get value from 'data-' attr, append to "var room" | получаем значение "data-" артибута и сохраняем в переменную room
        var hostel = $(this).data('hostel'); //get value from 'data-' attr, append to "var hoste" | получаем значение "data-" артибута и сохраняем в переменную hostel
        $('.room-type').html(room); //place value to span | помещаем значение в span
        $('input[name="room"]').val(room); //place value to hidden input | помещаем значение в скрытый инпут
        $('input[name="hostel"]').val(hostel); //place value to hidden input | помещаем значение в скрытый инпут
    });
    $('[data-position]').on('click', function () { //same as above | по принципу выше
        var position = $(this).data('position');
        $('input[name="position"]').val(position);
    });
    //calender iput
    $('.date').daterangepicker({
        singleDatePicker: true,
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });
    $('.date').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY'));
    });

    $('.date').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });
    //yandex maps
    ymaps.ready(init);

    var map_paveleckaya;
    var map_serpukhovskaya;
    var map_tulskaya;
    var map_mira;
    var map_rizhskaya;
    var map_dostoevskaya;
    var map_kolomenskaya;

    function init() {
        //хостел на павелецкой
        map_paveleckaya = new ymaps.Map("map-paveleckaya", {
            center: [55.724983154420876, 37.63670838897699],
            zoom: 14
        });
        map_serpukhovskaya = new ymaps.Map("map-serpukhovskaya", {
            center: [55.722355208381195, 37.62517199999997],
            zoom: 14
        });
        map_tulskaya = new ymaps.Map("map-tulskaya", {
            center: [55.713913994171556, 37.622176830688446],
            zoom: 14
        });
        // mira
        map_mira = new ymaps.Map("map-mira", {
            center: [55.785796710725876, 37.633019354492134],
            zoom: 14
        });
        map_rizhskaya = new ymaps.Map("map-rizhskaya", {
            center: [55.785796710725876, 37.633019354492134],
            zoom: 14
        });
        map_dostoevskaya = new ymaps.Map("map-dostoevskaya", {
            center: [55.78307481133011, 37.618680821334834],
            zoom: 14
        });
        map_kolomenskaya = new ymaps.Map("map-kolomenskaya", {
            center: [55.67524200720985, 37.66090243940065],
            zoom: 15
        });
        //метка хостела на павелецкой
        var hostelPlacemarkPav = new ymaps.Placemark([55.71697006899618, 37.6339485], {
            iconContent: "ул. Дубининская 67/1",
        }, {
            preset: "islands#blueStretchyIcon",
        });
        var hostelPlacemarkSerp = new ymaps.Placemark([55.71697006899618, 37.6339485], {
            iconContent: "ул. Дубининская 67/1",
        }, {
            preset: "islands#blueStretchyIcon",
        });
        var hostelPlacemarkTul = new ymaps.Placemark([55.71697006899618, 37.6339485], {
            iconContent: "ул. Дубининская 67/1",
        }, {
            preset: "islands#blueStretchyIcon",
        });
        //metki hostela mira
        var hostelPlacemarkMira = new ymaps.Placemark([55.78681406893724, 37.631136999999995], {
            iconContent: "Банный проезд 3с",
        }, {
            preset: "islands#blueStretchyIcon",
        });
        var hostelPlacemarkRizh = new ymaps.Placemark([55.78681406893724, 37.631136999999995], {
            iconContent: "Банный проезд 3с",
        }, {
            preset: "islands#blueStretchyIcon",
        });
        var hostelPlacemarkDost = new ymaps.Placemark([55.78681406893724, 37.631136999999995], {
            iconContent: "Банный проезд 3с",
        }, {
            preset: "islands#blueStretchyIcon",
        });
        // hostel kolomenskaya
        var hostelPlacemarkKol = new ymaps.Placemark([55.671072069056905, 37.659451999999966], {
            iconContent: "Пр. Андропова 44/2",
        }, {
            preset: "islands#blueStretchyIcon",
        });
        //метки м. для павелецкой
        var metroPlacemarkPav = new ymaps.Placemark([55.7297062540109, 37.63884203720145], {
            iconContent: "м. Павелецкая",
        }, {
            preset: 'islands#redStretchyIcon',
        });
        var metroPlacemarkSerp = new ymaps.Placemark([55.72687227733602, 37.624992499999934], {
            iconContent: "м. Серпуховская",
        }, {
            preset: 'islands#redStretchyIcon',
        });
        var metroPlacemarkTul = new ymaps.Placemark([55.70872906903459, 37.622090999999976], {
            iconContent: "м. Тульская",
        }, {
            preset: 'islands#redStretchyIcon',
        });
        // metro mira
        var metroPlacemarkMira = new ymaps.Placemark([55.77960556894854, 37.633705999999975], {
            iconContent: "м. Проспект Мира",
        }, {
            preset: 'islands#redStretchyIcon',
        });
        var metroPlacemarkRizh = new ymaps.Placemark([55.79250377514728, 37.63586204786508], {
            iconContent: "м. Рижская",
        }, {
            preset: 'islands#redStretchyIcon',
        });
        var metroPlacemarkDost = new ymaps.Placemark([55.78149927706435, 37.614697499999885], {
            iconContent: "м. Достоевская",
        }, {
            preset: 'islands#redStretchyIcon',
        });
        // kolomenskaya
        var metroPlacemarkKol = new ymaps.Placemark([55.67840777749173, 37.66382649999998], {
            iconContent: "м. Коломенская",
        }, {
            preset: 'islands#redStretchyIcon',
        });
        //маршруты для павелецкой
        var routePav = new ymaps.GeoObject({
            geometry: {
                type: "LineString",
                coordinates: [
                    [55.71697006899618, 37.6339485],
                    [55.717071511487234, 37.63397532209016],
                    [55.717098764648675, 37.63375269874191],
                    [55.72070898106895, 37.63531958767169],
                    [55.72348662071317, 37.636576397917594],
                    [55.72348359308242, 37.63661126663479],
                    [55.72356988046643, 37.636648817560996],
                    [55.723577449526076, 37.636605902216765],
                    [55.72681241671241, 37.63756701487255],
                    [55.727189322658724, 37.63755360382746],
                    [55.72938688876043, 37.63725953388267],
                    [55.72947013587947, 37.63715224552207],
                    [55.72986820600265, 37.637063732624576],
                    [55.72999534541129, 37.63878839302116],
                    [55.7297062540109, 37.63884203720145]
                ]
            },
            properties: {
                hintContent: "1.6 км",
                balloonContent: "1.6 км"
            },
        }, {
            draggable: false,
            strokeColor: "#0044bb82",
            strokeWidth: 4
        });
        var routeSerp = new ymaps.GeoObject({
            geometry: {
                type: "LineString",
                coordinates: [
                    [55.71697006899618, 37.6339485],
                    [55.717071511487234, 37.63397532209016],
                    [55.717098764648675, 37.63375269874191],
                    [55.718140, 37.634220],
                    [55.718160, 37.634003],
                    [55.718214, 37.634035],
                    [55.718964, 37.629153],
                    [55.718945, 37.629019],
                    [55.719013, 37.628734],
                    [55.719008, 37.627774],
                    [55.721116, 37.627806],
                    [55.721350, 37.627881],
                    [55.721820, 37.627867],
                    [55.726166, 37.625618],
                    [55.726119, 37.625352],
                    [55.726186, 37.625342],
                    [55.726195, 37.625224],
                    [55.726868, 37.624921],
                    [55.72687227733602, 37.624992499999934]
                ]
            },
            properties: {
                hintContent: "1.5 км",
                balloonContent: "1.5 км"
            },
        }, {
            draggable: false,
            strokeColor: "#0044bb82",
            strokeWidth: 4
        });
        var routeTul = new ymaps.GeoObject({
            geometry: {
                type: "LineString",
                coordinates: [
                    [55.70872906903459, 37.622090999999976],
                    [55.708852, 37.622529],
                    [55.709366, 37.622588],
                    [55.709422, 37.622636],
                    [55.709505, 37.622617],
                    [55.709529, 37.622695],
                    [55.709640, 37.622711],
                    [55.709675, 37.622816],
                    [55.709962, 37.622832],
                    [55.709981, 37.622783],
                    [55.710139, 37.622786],
                    [55.710776, 37.623326],
                    [55.710805, 37.623525],
                    [55.710870, 37.623589],
                    [55.711177, 37.624455],
                    [55.711255, 37.624432],
                    [55.711248, 37.624620],
                    [55.711302, 37.624643],
                    [55.711366, 37.624804],
                    [55.711507, 37.629232],
                    [55.711355, 37.630697],
                    [55.711543, 37.631263],
                    [55.711625, 37.632733],
                    [55.711743, 37.632985],
                    [55.712092, 37.633151],
                    [55.713025, 37.633192],
                    [55.713195, 37.633256],
                    [55.714549, 37.633390],
                    [55.715232, 37.633315],
                    [55.715638, 37.633213],
                    [55.715808, 37.633210],
                    [55.716991, 37.633719],
                    [55.71697006899618, 37.6339485]
                ]
            },
            properties: {
                hintContent: "1.5 км",
                balloonContent: "1.5 км"
            },
        }, {
            draggable: false,
            strokeColor: "#0044bb82",
            strokeWidth: 4
        });
        //маршруты для хостела на проспекте мира
        var routeMira = new ymaps.GeoObject({
            geometry: {
                type: "LineString",
                coordinates: [
                    [55.77960556894854, 37.633705999999975],
                    [55.779646, 37.633242],
                    [55.781600, 37.633962],
                    [55.781674, 37.633421],
                    [55.783677, 37.634325],
                    [55.783791, 37.633601],
                    [55.783850, 37.632842],
                    [55.784711, 37.633050],
                    [55.786017, 37.633097],
                    [55.786008, 37.632829],
                    [55.786766, 37.632779],
                    [55.78681406893724, 37.631136999999995]
                ]
            },
            properties: {
                hintContent: "1 км",
                balloonContent: "1 км"
            },
        }, {
            draggable: false,
            strokeColor: "#0044bb82",
            strokeWidth: 4
        });
        var routeRizh = new ymaps.GeoObject({
            geometry: {
                type: "LineString",
                coordinates: [
                    [55.78681406893724, 37.631136999999995],
                    [55.786766, 37.632779],
                    [55.787587, 37.632721],
                    [55.789976, 37.633348],
                    [55.790013, 37.633262],
                    [55.790150, 37.633113],
                    [55.790256, 37.633253],
                    [55.790274, 37.633497],
                    [55.791450, 37.633354],
                    [55.791480, 37.633721],
                    [55.791535, 37.633705],
                    [55.791535, 37.633936],
                    [55.791562, 37.633925],
                    [55.791585, 37.635041],
                    [55.792224, 37.634974],
                    [55.792259, 37.635046],
                    [55.792365, 37.635052],
                    [55.792375, 37.635253],
                    [55.792327, 37.635523],
                    [55.792351, 37.635837],
                    [55.792490, 37.635818],
                    [55.79250377514728, 37.63586204786508]

                ]
            },
            properties: {
                hintContent: "920 м",
                balloonContent: "920 м"
            },
        }, {
            draggable: false,
            strokeColor: "#0044bb82",
            strokeWidth: 4
        });
        var routeDost = new ymaps.GeoObject({
            geometry: {
                type: "LineString",
                coordinates: [
                    [55.78149927706435, 37.614697499999885],
                    [55.781265, 37.614781],
                    [55.781280, 37.614906],
                    [55.780968, 37.615403],
                    [55.781579, 37.616632],
                    [55.782132, 37.615817],
                    [55.782238, 37.615717],
                    [55.782715, 37.616923],
                    [55.782715, 37.616923],
                    [55.783621, 37.619197],
                    [55.783949, 37.620036],
                    [55.784347, 37.620900],
                    [55.784474, 37.621104],
                    [55.784376, 37.621332],
                    [55.784655, 37.621783],
                    [55.784837, 37.622380],
                    [55.784335, 37.622753],
                    [55.784441, 37.623152],
                    [55.784476, 37.623238],
                    [55.784440, 37.623536],
                    [55.784415, 37.624990],
                    [55.784373, 37.625234],
                    [55.784405, 37.629448],
                    [55.785731, 37.629658],
                    [55.785802, 37.629701],
                    [55.786205, 37.629707],
                    [55.786224, 37.630157],
                    [55.786603, 37.630210],
                    [55.786649, 37.631139],
                    [55.78681406893724, 37.631136999999995],
                ]
            },
            properties: {
                hintContent: "1.7 км",
                balloonContent: "1.7 км"
            },
        }, {
            draggable: false,
            strokeColor: "#0044bb82",
            strokeWidth: 4
        });
        // marshrut kolomenskaya
        var routeKol = new ymaps.GeoObject({
            geometry: {
                type: "LineString",
                coordinates: [
                    [55.67840777749173, 37.66382649999998],
                    [55.678454, 37.663255],
                    [55.677976, 37.663126],
                    [55.677758, 37.662980],
                    [55.677732, 37.662897],
                    [55.677567, 37.662902],
                    [55.677545, 37.662816],
                    [55.677494, 37.662792],
                    [55.677462, 37.662834],
                    [55.677306, 37.662867],
                    [55.676960, 37.662781],
                    [55.676933, 37.662719],
                    [55.676758, 37.662697],
                    [55.676702, 37.662772],
                    [55.676483, 37.662751],
                    [55.676100, 37.662773],
                    [55.672319, 37.661916],
                    [55.672276, 37.661862],
                    [55.672193, 37.661841],
                    [55.672117, 37.661546],
                    [55.672177, 37.660642],
                    [55.672125, 37.660637],
                    [55.672001, 37.660455],
                    [55.671541, 37.660367],
                    [55.671072069056905, 37.659451999999966]
                ]
            },
            properties: {
                hintContent: "990 м",
                balloonContent: "990 м"
            },
        }, {
            draggable: false,
            strokeColor: "#0044bb82",
            strokeWidth: 4
        });

        if (window.matchMedia('(max-width: 575px)').matches) {
            map_paveleckaya.behaviors.disable('drag');
            map_serpukhovskaya.behaviors.disable('drag');
            map_tulskaya.behaviors.disable('drag');
            map_mira.behaviors.disable('drag');
            map_rizhskaya.behaviors.disable('drag');
            map_dostoevskaya.behaviors.disable('drag');
            map_kolomenskaya.behaviors.disable('drag');
        }
        //помещаем объекты на карту
        map_paveleckaya.geoObjects.add(metroPlacemarkPav);
        map_paveleckaya.geoObjects.add(hostelPlacemarkPav);
        map_paveleckaya.geoObjects.add(routePav);

        map_serpukhovskaya.geoObjects.add(metroPlacemarkSerp);
        map_serpukhovskaya.geoObjects.add(hostelPlacemarkSerp);
        map_serpukhovskaya.geoObjects.add(routeSerp);

        map_tulskaya.geoObjects.add(metroPlacemarkTul);
        map_tulskaya.geoObjects.add(hostelPlacemarkTul);
        map_tulskaya.geoObjects.add(routeTul);

        map_mira.geoObjects.add(metroPlacemarkMira);
        map_mira.geoObjects.add(hostelPlacemarkMira);
        map_mira.geoObjects.add(routeMira);

        map_rizhskaya.geoObjects.add(metroPlacemarkRizh);
        map_rizhskaya.geoObjects.add(hostelPlacemarkRizh);
        map_rizhskaya.geoObjects.add(routeRizh);

        map_dostoevskaya.geoObjects.add(metroPlacemarkDost);
        map_dostoevskaya.geoObjects.add(hostelPlacemarkDost);
        map_dostoevskaya.geoObjects.add(routeDost);

        map_kolomenskaya.geoObjects.add(metroPlacemarkKol);
        map_kolomenskaya.geoObjects.add(hostelPlacemarkKol);
        map_kolomenskaya.geoObjects.add(routeKol);
    };
});
