$(function() {

  //-------------------------------анімація цифр---------------------------------------
    if($(".about-statistics__container").length > 0) {
      var show = true;
      var countbox = ".about-statistics__container";
      $(window).on("scroll load resize", function () {
          if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
          var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
          var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
          var w_height = $(window).height(); // Высота окна браузера
          var d_height = $(document).height(); // Высота всего документа
          var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
          if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
              $('.about-statistics__item h3').spincrement({
                  thousandSeparator: "",
                  duration: 3000
              });
              show = false;
          }
      });
    };

  //-------------------------------активна ссилка на якій знаходишся для меню---------------------------------------
    $('.nav a').each(function () {
        var location = window.location.href;
        var link = this.href; 
        if(location == link) {
            $(this).addClass('active');
        }
    });

  //-------------------------------preloader---------------------------------------
    setTimeout(function() {
      $('#ctn-preloader').addClass('loaded');
      // После завершения прелоадера появляется свиток

      $('body').removeClass('no-scroll');

      if ($('#ctn-preloader').hasClass('loaded')) {
        // Это так, что, как только preloader ушел, весь раздел preloader удаляется
        $('#preloader').delay(1000).queue(function() {
          $(this).remove();
          $('body').removeClass('no-scroll');
        });
      }
    }, 2000);
    
  //------------------------------гамбургер-----------------------------
    $('.hamburger').click(function() {
      $(this).toggleClass('hamburger--active');
      $('nav').toggleClass('nav--active');
      $('header').toggleClass('header--menu');
      $('body').toggleClass('no-scroll');
    });

  //------------------------------слайдер-----------------------------
    var swiper = new Swiper('.portfolio__slider', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
       navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 5500,
        disableOnInteraction: false,
      },
      effect: 'fade',
    });

  //-------------------------------попандер---------------------------------------
    $('.modal').popup({transition: 'all 0.3s'});

  //-------------------------інфо блок---------------------------------------
    $(".site-work__item_click").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top - 0}, 'slow', 'swing');
    });

  //-------------------------стрелка в низ---------------------------------------
    $(".header__next").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top - 0}, 'slow', 'swing');
    });

  //-------------------------скорость якоря---------------------------------------
    $(".nav li:last-child").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top - 0}, 'slow', 'swing');

        $('.hamburger--active').removeClass('hamburger--active');
        $('.nav--active').removeClass('nav--active');
        $('.header').removeClass('header--menu');
        $('body').removeClass('no-scroll');
    });

  //------------------------------------form-------------------------------------------
    $('input[type="tel"]').mask('+00 (000) 000-00-00');

    jQuery.validator.addMethod("phoneno", function(phone_number, element) {
       return this.optional(element) || phone_number.match(/\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
    }, "Введите Ваш телефон");


    $('input[name="phonepl"]').mask('+0 (000) 000-00-00');

    jQuery.validator.addMethod("phoneno", function(phone_number, element) {
       return this.optional(element) || phone_number.match(/\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
    }, "Введите Ваш телефон");

    $(".form").each(function(index, el) {
      $(el).addClass('form-' + index);

      $('.form-' + index).validate({
        rules: {
          phone: {
            required: true,
            phoneno: true
          },
          name: 'required',
        },
        messages: {
          name: "Введите Ваше имя",
          email: "Введите Ваш email",
          phone: "Введите Ваш телефон",
          namepl: "Wpisz imie",
          emailpl: "Wpisz e-mail",
          phonepl: "Wpisz telefon",
        },
        submitHandler: function(form) {
          var t = {
            name: jQuery('.form-' + index).find("input[name=name]").val(),
            phone: jQuery('.form-' + index).find("input[name=phone]").val(),
            email: jQuery('.form-' + index).find("input[name=email]").val(),
            comment: jQuery('.form-' + index).find("textarea[name=comment]").val(),

            namepl: jQuery('.form-' + index).find("input[name=namepl]").val(),
            phonepl: jQuery('.form-' + index).find("input[name=phonepl]").val(),
            emailpl: jQuery('.form-' + index).find("input[name=emailpl]").val(),
            commentpl: jQuery('.form-' + index).find("textarea[name=commentpl]").val(),

            subject: jQuery('.form-' + index).find("input[name=subject]").val()
          };
          ajaxSend('.form-' + index, t);
        }
      });

    });

    function ajaxSend(formName, data) {
      jQuery.ajax({
        type: "POST",
        url: "/wp-content/themes/flex/sendmail.php",
        data: data,
        success: function() {
          $(".modal").popup("hide");
          $("#thanks").popup("show");
          setTimeout(function() {
            $(formName).trigger('reset');
          }, 2000);
        }
      });
    }

});

