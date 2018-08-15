/* vertical center */
    $('.vcenter').flexVerticalCenter({
      cssAttribute: 'padding-top'
    });

    

    // to make scroll feel smooth
    SmoothScroll({
      // Scrolling Core
      animationTime: 800, // [ms]
      stepSize: 50, // [px]
      // Acceleration
      accelerationDelta: 50, // 50
      accelerationMax: 3, // 3
      // Keyboard Settings
      keyboardSupport: true, // option
      arrowScroll: 50, // [px]
      // Pulse (less tweakable)
      // ratio of "tail" to "acceleration"
      pulseAlgorithm: true,
      pulseScale: 4,
      pulseNormalize: 1,
      // Other
      touchpadSupport: false, // ignore touchpad by default
      fixedBackground: true,
      excluded: ''
    });

    /* foundation main */
    $(document).foundation();
    $('.off-canvas a').on('click', function () {
      $('.off-canvas').foundation('close');
    });

    

    // career page collapse
    $('.career-item_header-button').click(function () {
      $(this).parent().parent().find('.career-item_content').slideToggle('active');
    });

    // owl carousel
    $(document).ready(function () {
      $('.main-slide').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      });

      $('.team-slide').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        },
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>',
          '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
      });
    });

    

    

    
    // handle links with @href started with '#' only
    $(document).on('click', 'a[href^="#"]', function (e) {
      var id = $(this).attr("href");
      var offset = 110;
      var target = $(id).offset().top - offset;
      $('html, body').animate({
        scrollTop: target
      }, 1500, "easeInOutExpo");
      event.preventDefault();
    });
    

    
     $('.owl-slider-01').owlCarousel({
        nav:true,
        autoplaySpeed: 300,
        items: 1,
        navSpeed: 400,
        navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
    });

    $('.owl-slider-02').owlCarousel({
        nav:true,
        autoplaySpeed: 300,
        items: 1,
        navSpeed: 400,
        navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
    });

    $('.owl-slider-03').owlCarousel({
        nav:true,
        autoplaySpeed: 300,
        items: 1,
        navSpeed: 400,
        navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
    });

    $('.owl-slider-04').owlCarousel({
        nav:true,
        autoplaySpeed: 300,
        items: 1,
        navSpeed: 400,
        navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
    });

    $('.owl-slider-05').owlCarousel({
        nav:true,
        autoplaySpeed: 300,
        items: 1,
        navSpeed: 400,
        navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
    });

    $('.owl-slider-logo').owlCarousel({
        nav:true,
        autoplaySpeed: 300,
        items: 5,
        navSpeed: 400,
        navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
        responsiveClass:true,
          responsive:{
              0:{
                  items:2,
                  nav:true
              },
              600:{
                  items:2,
                  nav:false
              },
              1000:{
                  items:5,
                  nav:true,
                  loop:false
              }
          }
    });

    