console.log("I'm LOADED!");

$('#container').imagesLoaded()
  .always(function(instance) {
    console.log('all images loaded');
    var $container = $('#container');
    // init
    $container.packery({
      itemSelector: '.grid-item',
      gutter: 0
    });

    $
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

$('.reveal-modal').on('open.fndtn.reveal', '[data-reveal]', function () {
    $('body').addClass('modal-open');
});
$('.reveal-modal').on('close.fndtn.reveal', '[data-reveal]', function () {
    $('body').removeClass('modal-open');
});

$(window).scroll(function() {
    $(".navbar").offset().top > 50 ? $(".navbar-fixed-top").addClass("top-nav-collapse") : $(".navbar-fixed-top").removeClass("top-nav-collapse")
}), $(function() {
    $(".page-scroll a").bind("click", function(o) {
        var a = $(this);
        $("html, body").stop().animate({
            scrollTop: $(a.attr("href")).offset().top
        }, 1500, "easeInOutExpo"), o.preventDefault()
    })
});
