(function() {
      // lazy loooooooading
      var lazyImages = document.querySelectorAll("img");

      console.log(lazyImages);
      
      for (var i = 0; i < lazyImages.length; i++) {
        var src = lazyImages[i].src;
        // console.log(src);
        // move to data src
        lazyImages[i].setAttribute("data-src", src);
        // then remove from src
        lazyImages[i].setAttribute("src", "");

        lazyImages[i].classList.add("animated");
      }
  })();