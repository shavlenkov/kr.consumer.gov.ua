let open = false;



$(document).ready(function(){
    $('.events__inner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<i class="slider-prev fa-solid fa-arrow-left"></i>',
        nextArrow: '<i class="slider-next fa-solid fa-arrow-right"></i>'
        // Другие опции, если необходимо
    });

    $('.videostories__inner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<i class="slider-prev fa-solid fa-arrow-left"></i>',
        nextArrow: '<i class="slider-next fa-solid fa-arrow-right"></i>'
        // Другие опции, если необходимо
    });


    $('.links__list').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<i class="slider-prev fa-solid fa-arrow-left"></i>',
        nextArrow: '<i class="slider-next fa-solid fa-arrow-right"></i>'
        // Другие опции, если необходимо
    });

    $("#m").accordionjs({
        // Allow self close.(data-close-able)
        closeAble   : false,

        // Close other sections.(data-close-other)
        closeOther  : true,

        // Animation Speed.(data-slide-speed)
        slideSpeed  : 150,

        // The section open on first init. A number from 1 to X or false.(data-active-index)
        activeIndex : 1,

        // Callback when a section is open
        openSection: function( section ){},

        // Callback before a section is open
        beforeOpenSection: function( section ){},
    });
});

document.getElementById('m').style.display = 'none'

document.getElementById('btn').onclick = function() {
    if(open == false) {
        open = true;
        document.getElementById('btn').innerHTML = '<i class="fa-solid fa-arrow-up"></i>';
        document.getElementById('m').style.display = ''
    } else {
        open = false;
        document.getElementById('btn').innerHTML = '<i class="fa-solid fa-arrow-down"></i>';
        document.getElementById('m').style.display = 'none'
    }
}