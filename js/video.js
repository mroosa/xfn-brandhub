$(document).ready(function() {
  $("video").each(function() {
    if ($(this).attr("controls") == undefined) {
      var playBtn;
      var $thisVid = $(this);
      if ($thisVid.attr("autoplay") == "autoplay") {
        playBtn = "Pause";
        dataPlay = true;
      } else {
        playBtn = "Play";
        dataPlay = false;
      }

      $thisVid.parent().append('<div class="video-controls"><a class="play playing" data-playing="' + dataPlay + '" href="#">' + playBtn + ' video</a></div>')

      var controls = $thisVid.parent().find(".video-controls");
      $(controls).find(".play").click(function() {
        if ($(this).attr("data-playing") == "true") {
          $thisVid.parent().find("video").get(0).pause();
          $(this).attr("data-playing","false").removeClass("playing");
        } else {
          $thisVid.parent().find("video").get(0).play();
          $(this).attr("data-playing","true").addClass("playing");
        }
        return false;
      });
    }

  });

});

// $('#videoId').get(0).play()
