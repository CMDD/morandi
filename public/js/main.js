var $ = jQuery;

$(document).ready(function () {
    
    $('.go-to').click(function () {
        
		$("html, body").delay(200).animate({scrollTop: $('#projects').offset().top }, 1500);
		return false;
        
	});
    
    if ($('.grid').length){
        
        $('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-size',
                gutter: '.grid-gutter'
            }
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
    
    $('.tabs span').click(function() {
        
        $(this).parent().find('span').removeClass('active');
        $(this).addClass('active');
        $(this).parent().parent().find('.tab-content').removeClass('active').hide();
        
        var selectTab = $(this).data('tab');
        $('#' + selectTab).addClass('active').fadeIn();
        
    });
    
    if ($('.slide-history').length){
        
        $('.slide-history').slick({
            adaptiveHeight: true,
            accessibility: false
        });
        
    }
    
    $('.count').each(function () {
      var $this = $(this);
      $({ Counter: 0 }).animate({ Counter: $this.text() }, {
        duration: 2000,
        easing: 'swing',
        step: function () {
            $this.text(Math.ceil(this.Counter));
        }
      });
    });
    
});