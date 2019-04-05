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
  $('.has-children > a').click(function (e) {
    e.preventDefault();
    $(this).next('.sub').slideToggle(300, function () {
      $(this).parent().toggleClass('show', $(this).is(':visible'));
    });
  });

  /* desplazamiento cover */
  $('.go-to').click(function () {
    $("html, body").delay(200).animate({ scrollTop: $('#projects').offset().top }, 1500);
    return false;
  });

  /* slider home */
  if ($('.slide-projects').length) {
    $('.slide-projects').slick({
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
  if ($('.slide-history').length) {
    $('.slide-history').slick({
      adaptiveHeight: true,
      accessibility: false
    });
  }

  /* contador - nosotros */
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

  /* slider proyecto */
  if ($('.slide-items').length) {
    $('.slide-items').slick({
      adaptiveHeight: true,
      accessibility: false,
      slidesToShow: 3,
    });
  }


  $('.gallery').each(function () {
    $(this).magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  });

  $('.tabs span').click(function () {
    $(this).parent().find('span').removeClass('active');
    $(this).addClass('active');
    $(this).parent().parent().find('.tab-content').removeClass('active').hide();
    var selectTab = $(this).data('tab');
    $('#' + selectTab).addClass('active').fadeIn();
  });

});