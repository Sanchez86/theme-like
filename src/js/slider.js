(function ($) {
    $("document").ready(function () {
        $(".slider").slick({

            slidesToShow: 1,
            infinite: true,
            autoplay: true,
            dots: true,
            arrows:false,
            fade:true,
            appendDots: $('.controller-dots-js'),
            responsive: [{
                breakpoint: 1399,
                settings: {
                    slidesToShow: 1
                }
            }]

        });
        $('.slider').on('afterChange', function(event, slick, nextSlide ){
            let count = nextSlide;

            count += 1;
            if(count<10){
                count = "0"+count;
            }
            if(nextSlide != 0){
                $('.controller-start-js').addClass('d-none');
            }else{
                $('.controller-start-js').removeClass('d-none');
            }
            $('.controller-current-number-js').html(count);
        })

    });
})(jQuery);