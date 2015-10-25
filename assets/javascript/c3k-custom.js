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

$(document).on('opened.fndtn.reveal', '[data-reveal]', function () {
    $("body").addClass("modal-open");
});
$(document).on('closed.fndtn.reveal', '[data-reveal]', function () {
    $('body').removeClass('modal-open');
});
