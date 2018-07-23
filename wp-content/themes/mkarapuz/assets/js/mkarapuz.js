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


});