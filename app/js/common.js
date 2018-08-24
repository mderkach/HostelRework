$(function () {

    // Custom JS
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function (e) {
        $hamburger.toggleClass("is-active");
    });
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
    
    $('input[name="phone"]').inputmask("+7(999)999-99-99");
   
});
