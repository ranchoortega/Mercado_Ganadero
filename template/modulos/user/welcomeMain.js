$(document).ready(function() {
    const welcome = new Welcome();

    // Llamar a ambos métodos y esperar a que ambos terminen antes de inicializar el carrusel
    $.when(welcome.getAnimalesNuevos(), welcome.getAnimalesRecientes()).done(function() {
        inicializarCarrusel();
    });

    function inicializarCarrusel() {
        $('.products-slick').each(function() {
            var $this = $(this),
                $nav = $this.attr('data-nav');

            $this.slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                infinite: true,
                speed: 300,
                dots: false,
                arrows: true,
                appendArrows: $nav ? $nav : false,
                responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }]
            });
        });
    }


    
});
