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
        if(window.matchMedia('(max-width: 480px)').matches){
            $('html, body').animate({
                scrollTop: $(sectionTo).offset().top - 75
            }, 1500);
        } else {
            $('html, body').animate({
                scrollTop: $(sectionTo).offset().top - 120//srcoll to elemement with 120px offset on top (sticky header height)
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
        asNavFor: '#slider-room'
    });

    $('#slider-room').flexslider({
        animation: "slide",
        animationLoop: true,
        slideshow: true,
        sync: "#carousel-room"
    });
    //inputmask
    $('input[name="phone"]').inputmask("+7(999)999-99-99");
    //popovers
    $('.popover-pr-myra').popover({
        content: '<div class="main-iframe"><button class="popover-close" data-dismiss="popover" ><img id="close" src="./images/close.png"/></button><iframe src="https://yandex.by/map-widget/v1/-/CBauUVTtpA" height="400" frameborder="0" style="width:100%"></iframe></div>',
        html: true,
        trigger: 'click',
        type: 'button',
        placement: 'bottom',
        offset: '0 100px'
    });
    $('.popover-paveleckaya').popover({
        content: '<div class="main-iframe"><button class="popover-close" data-dismiss="popover" ><img id="close" src="./images/close.png"/></button><iframe src="https://yandex.by/map-widget/v1/-/CBauUGWLSA" height="400" frameborder="0" style="width:100%"></iframe></div>',
        html: true,
        trigger: 'click',
        type: 'button',
        placement: 'bottom'
    });
    $('.popover-kolomenskaya').popover({
        content: '<div class="main-iframe"><button class="popover-close" data-dismiss="popover" ><img id="close" src="./images/close.png"/></button><iframe src="https://yandex.by/map-widget/v1/-/CBauUKDHSC" height="400" frameborder="0" style="width:100%"></iframe></div>',
        html: true,
        trigger: 'click',
        type: 'button',
        placement: 'bottom'
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
        hideScrollbar: true
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
});
