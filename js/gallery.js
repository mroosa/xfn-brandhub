$(document).ready(function() {
  if ($(".gallery").length > 0) {
    $(".gallery").each(function(index) {
      var thisGal = $(this);
      // Give a default ID to the gallery
      // for identification if none exists.
      if (thisGal.attr("id") === undefined) {
        thisGal.wrap('<div class="gallery-wrap">').after('<ul class="gallery-nav">');
        var thisGalWrap = thisGal.parent();
        thisGal.attr({"id":"gallery-" + index, "data-active-img":0});
        var numImgs = thisGal.find(".img").length;
        thisGal.css({"width": Math.floor(numImgs * 100) + "%"});
        for (var i=0; i<numImgs; i++) {
          var activeClass = (i==0) ? ' class="active"' : '';
          thisGalWrap.find(".gallery-nav").append('<li><a' + activeClass + ' href="#">' + i + '</li>');
        }
      }

      thisGalWrap.find(".gallery-nav a").click(function() {
        var newImg = $(this).html();
        if (newImg !== thisGal.attr("data-active-img")) {
          thisGal.css({"margin-left":Math.floor(-100*newImg)+"%"});
          thisGalWrap.find(".gallery-nav .active").removeClass("active");
          thisGal.attr({"data-active-img":Number(newImg)});
          $(this).addClass("active");
        }
        return false;
      });
    });
  }
});
