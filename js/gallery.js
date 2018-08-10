$(document).ready(function() {
  if ($(".gallery").length > 0) {
    $(".gallery").each(function(index) {
      var thisGal = $(this);
      // Give a default ID to the gallery
      // for identification if none exists.
      if (thisGal.attr("id") === undefined) {
        thisGal.wrap('<div class="gallery-wrap"><div class="gallery-inner">').after('<ul class="gallery-nav">');
        var thisGalWrap = thisGal.parent();
        thisGal.attr({"id":"gallery-" + index, "data-active-img":0});
        var numImgs = thisGal.find(".img").length;
        thisGal.css({"width": Math.floor(numImgs * 100) + "%"});
        thisGalWrap.find(".gallery-nav").append('<li><a class="nav prv" href="#"><span class="icon-prv"></span><span class="ah"> Previous</span></li>');
        for (var i=0; i<numImgs; i++) {
          var activeClass = (i==0) ? ' class="active"' : '';
          thisGalWrap.find(".gallery-nav").append('<li><a' + activeClass + ' data-id="' + i + '" href="#">' + i + '</li>');
        }
        thisGalWrap.find(".gallery-nav").append('<li><a class="nav nxt" href="#"><span class="ah">Next </span><span class="icon-nxt"></span></li>');
      }

      thisGalWrap.find(".gallery-nav a").click(function() {
        var actImg = Number(thisGal.attr("data-active-img"));
        if (newImg !== actImg) {
          var newImg;
          if ($(this).hasClass("nxt")) {
            newImg = (actImg + 1 >= numImgs) ? 0: Math.floor(actImg + 1);
          } else if ($(this).hasClass("prv")) {
            newImg = (actImg - 1 < 0) ? Math.floor(numImgs - 1): Math.floor(actImg - 1);
          } else {
            newImg = Number($(this).attr("data-id"));
          }
          thisGal.css({"margin-left": Math.floor(-100 * newImg) + "%"});
          thisGalWrap.find(".gallery-nav .active").removeClass("active");
          thisGal.attr({"data-active-img": Number(newImg)});
          thisGalWrap.find(".gallery-nav a[data-id=" + newImg + "]").addClass("active");
        }
        return false;
      });
    });
  }
});
