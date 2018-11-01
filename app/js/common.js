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
        openEffect: 'none',
        closeEffect: 'none'
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
    //send form
    function sendAjaxForm(ajax_form, url) {//имя функции(id формы, адрес обработчика)
        $.ajax({
            url: url,
            type: "POST", //метод отправки
            dataType: "html", //формат данных
            data: $("#" + ajax_form).serialize(), // Сеарилизуем объект
            success: function (response) { //Данные отправлены успешно
                result = $.parseJSON(response);
                if (result == true) {//проверка не пройдена
                    $.fancybox.open('<div class="message"><h2 class="error_submit">Ошибка!</h2><p class="error_submit" style="color:#000">Заполните поля и повторите отправку!</p></div>');
                } else {//проверка пройдена
                    $.fancybox.close();
                    $.fancybox.open('<div class="message"><h2 class="sucess_submit">Спасибо!</h2><p class="sucess_submit" style="color:#000">Мы свяжемся с вами в ближайшее время!</p></div>');
                }
            },
        });
    }
    var url_order = $('#form_order').attr('action');
    var url_find = $('#form_find').attr('action');
    $('input[type="submit"]').each(function () {
        $(this).click(function () {
            console.log($('form').attr('action'));
            if ($(this).attr('id') == 'submit_order') {
                sendAjaxForm('form_order', url_order);
                return false;
            } else {
                sendAjaxForm('form_find', url_find);
                return false;
            }

        });
    });
    
    //socials and mail in new tab
    $('.socials-header a, .socials-footer a, .socials-main a, .mail, .textwidget a[href="mailTo:hostelfusion@mail.ru"]').on('click', function (e) {
        e.preventDefault(); //disable defult redirect from href
        var href = $(this).attr('href'); //get href
        window.open(href); //open new window with url
    });
});
