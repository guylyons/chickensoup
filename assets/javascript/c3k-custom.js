$(document).ready(function() {

  $('#packery').imagesLoaded()
    .always(function(instance) {
      console.log('all images loaded');
      // init

      var $packery = $('#packery').packery({
        itemSelector: '.item',
        percentPosition: true,
        gutter: '.gutter-sizer',
        columnWidth: '.grid-sizer'
      });

    })

  .done(function(instance) {
      console.log('all images successfully loaded');
    })
    .fail(function() {
      console.log('all images loaded, at least one is broken');
    })
    .progress(function(instance, image) {
      var result = image.isLoaded ? 'loaded' : 'broken';
      console.log('image is ' + result + ' for ' + image.img.src);
    });

    if ($("body").scroll) {
      console.log(window.scrollY);
    }

  // lock content after modal opens
  $(document).on('opened.fndtn.reveal', '[data-reveal]', function() {
    $("body").addClass("modal-open");
    $("body").scroll(console.log(window.scrollY));
  });
  $(document).on('closed.fndtn.reveal', '[data-reveal]', function() {
    $('body').removeClass('modal-open');
  });

  // Smooth scrolling for all links
  $('a').smoothScroll({
    speed: 1000,
    offset: -48
  });

  // topbar event handler
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
      $(".top-bar-container").addClass("scroll-toggle");
    } else {
      $(".top-bar-container").removeClass("scroll-toggle");
    }
  });

  // back to top event handler
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 600) {
      $(".back-to-top").addClass("back-to-top-toggle");
    } else {
      $(".back-to-top").removeClass("back-to-top-toggle");
    }
  });

});
