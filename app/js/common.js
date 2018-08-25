$(function () {

    // Custom JS
    //hamburg button anim
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function (e) {
        $hamburger.toggleClass("is-active");
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
        content: '<div class="main-iframe"><button class="popover-close" data-dismiss="popover" ><img id="close" src="../images/close.png"/></button><iframe src="https://yandex.by/map-widget/v1/-/CBauUVTtpA" height="400" frameborder="0" style="width:100%"></iframe></div>',
        html: true,
        trigger: 'click',
        type: 'button',
        placement: 'bottom'
    });
    $('.popover-paveleckaya').popover({
        content: '<div class="main-iframe"><button class="popover-close" data-dismiss="popover" ><img id="close" src="../images/close.png"/></button><iframe src="https://yandex.by/map-widget/v1/-/CBauUGWLSA" height="400" frameborder="0" style="width:100%"></iframe></div>',
        html: true,
        trigger: 'focus',
        type: 'button',
        placement: 'bottom'
    });
    $('.popover-kolomenskaya').popover({
        content: '<div class="main-iframe"><button class="popover-close" data-dismiss="popover" ><img id="close" src="../images/close.png"/></button><iframe src="https://yandex.by/map-widget/v1/-/CBauUKDHSC" height="400" frameborder="0" style="width:100%"></iframe></div>',
        html: true,
        trigger: 'focus',
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
            !$(e.target).parents().is('.popover')) {
            $('[data-original-title]').popover('hide');
        }
    });
});
