$(document).ready(function () {
    $('#owl-demo').owlCarousel({
        loop: true,
        autoPlay: 100,
        autoplaySpeed:1000,
        nav: true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive: {
            0:{
                items:1
            }
        }
    })
});
