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

$(document).on('opened.fndtn.reveal', '[data-reveal]', function () {
    $("body").addClass("modal-open");
});
$(document).on('closed.fndtn.reveal', '[data-reveal]', function () {
    $('body').removeClass('modal-open');
});

// scroll easing
$(function() {
    $(".page-scroll a").bind("click", function(o) {
        var a = $(this);
        $("html, body").stop().animate({
            scrollTop: $(a.attr("href")).offset().top
        }, 1500, "easeInOutExpo"), o.preventDefault();
    });
});

// adjust navigation after scroll down
$(window).scroll(function() {
  $(".navbar").offset().top > 50 ? $(".navbar-fixed-top").addClass("top-nav-collapse") : $(".navbar-fixed-top").removeClass("top-nav-collapse");
}); 
