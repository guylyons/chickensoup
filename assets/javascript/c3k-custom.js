$(document).ready(function() {
  // topbar event handler
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 90) {
      $(".test").addClass("scroll-toggle");
    } else {
      $(".test").removeClass("scroll-toggle");
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

  $("#packery")
    .imagesLoaded()
    .always(function(instance) {
      var $packery = $("#packery").packery({
        itemSelector: ".item",
        percentPosition: true,
        gutter: ".gutter-sizer",
        columnWidth: ".grid-sizer"
      });
    })
    .done(function(instance) {
      //   console.log('all images successfully loaded');
    })
    .fail(function() {
      //   console.log('all images loaded, at least one is broken');
    })
    .progress(function(instance, image) {
      var result = image.isLoaded ? "loaded" : "broken";
      //   console.log('image is ' + result + ' for ' + image.img.src);
    });

  // lock content after modal opens
  $(document).on("opened.fndtn.reveal", "[data-reveal]", function() {
    $("body").addClass("modal-open");
  });
  $(document).on("closed.fndtn.reveal", "[data-reveal]", function() {
    $("body").removeClass("modal-open");
  });

  // Smooth scrolling for all links
  $("a").smoothScroll({
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

  // modal stuff

  var lazyImages = document.querySelectorAll(".lazy-load img");
  for (var i = 0; i < lazyImages.length; i++) {
    var src = lazyImages[i].src;

    // move to data src
    lazyImages[i].setAttribute("data-src", src);

    // then remove from src
    lazyImages[i].setAttribute("src", "");

    lazyImages[i].classList.add("animated");
  }

  $project = $(".project a");

  $project.click(function(event) {
    event.preventDefault();

    var dataId = $(this).attr("data-id");
    console.log(dataId);

    var modal = $("#modal-" + dataId + " img");
    console.log(modal);
    setTimeout(function() {
      modal.each(function() {
        $(this).addClass("fadeIn");
        $(this).attr("src", $(this).attr("data-src"));
        $(this).fadeIn();
      });
    }, 1000);
  });
});
