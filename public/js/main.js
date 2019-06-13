var $ = jQuery;

$(document).ready(function () {
    
    /* mostrar menu */
    $('.show-menu').click(function (e) {
        e.preventDefault();
        if ($(this).hasClass('open-menu')) {
            $(this).removeClass('open-menu').addClass('close-menu');
            $(".menu-float").addClass('opened');
        } else {
            $(this).removeClass('close-menu').addClass('open-menu');
            $(".menu-float").removeClass('opened');
        }
	});
    
    /* submenu */
    $('.has-children >a').click(function (e) {
        e.preventDefault();
        $(this).next('.sub').slideToggle(300, function(){
            $(this).parent().toggleClass('show', $(this).is(':visible'));
        });
    });
    
    /* desplazamiento cover */
    $('.go-to').click(function () {
		$("html, body").delay(200).animate({scrollTop: $('#projects').offset().top }, 1500);
		return false;
	});
    
    /* desplazamiento contacto */
    $('.go-contact').click(function () {
		$("html, body").delay(200).animate({scrollTop: $('#contact').offset().top - 70 }, 1500);
		return false;
	});

    /* slider home */
    if ($('.slide-projects').length){
        $('.slide-projects').slick({
            autoplay: true,
            autoplaySpeed: 1500,
            speed: 1000,
            adaptiveHeight: true,
            accessibility: false,
            arrows: false,
            dots: true,
            centerMode: true,
            centerPadding: '200px',
            slidesToShow: 1,
            focusOnSelect: true,
            responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    centerPadding: '100px',
                  }
                },
                {
                  breakpoint: 992,
                  settings: {
                    centerPadding: '80px',
                  }
                },
                {
                  breakpoint: 576,
                  settings: {
                    centerPadding: '50px',
                  }
                }
            ]
        });
    }
    
    /* slider nosotros */
    if ($('.slide-history').length){
        $('.slide-history').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            adaptiveHeight: true,
            accessibility: false
        });
    }
    
    /* contador - nosotros */
    if ($('.stats').length){
        $('.stats').waypoint(function() {

            $('.count').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).data('count')
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now).toLocaleString());

                    }
                });
            });

            this.destroy();

        }, { offset: '50%' });
    }
    
    /* slider proyecto */
    if ($('.slide-items').length){
        $('.slide-items').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            adaptiveHeight: true,
            accessibility: false,
            slidesToShow: 3,
        });
    }
    
    
    $('.gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
              enabled:true
            }
        });
    });
    
    /* Tabs tipos */
    $('.tabs >span').click(function() {
        $(this).parent().find('span').removeClass('active');
        $(this).addClass('active');
        $(this).parent().parent().find('.tab-content').removeClass('active').hide();
        var selectTab = $(this).data('tab');
        $('#' + selectTab).addClass('active').fadeIn();
        //$('.slide-type').slick('reinit');
        $(this).parent().parent().find('.slide-type').slick('reinit');
    });
    
    /* slider proyecto */
    if ($('.slide-type').length){
        $('.slide-type').slick({
            adaptiveHeight: true,
            accessibility: false
        });
    }
    
    AOS.init({
        delay: 200,
        duration: 600
    });
    
});
