jQuery(window).ready(function () {
    jQuery('#kz-send-mail').click(function (event) {
        event.preventDefault();
        phone = document.getElementById('kz-footer-callback').value;
        data = {
            action: 'kz_callback',
            phone: phone,
        };
        $.post( kz_ajax.url, data, function(response) {
            alert('Получено с сервера: ' + response);
        });
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
        arrows: true,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,

    });
});