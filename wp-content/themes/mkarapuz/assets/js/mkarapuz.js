jQuery(window).ready(function () {
    jQuery('#kz-send-mail').click(function (event) {
        event.preventDefault();
        alert('Functional is missing');
        return false;
    });
    $('.kz-related-list').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1
    });
    $('.kz-recent-products ul').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });

});