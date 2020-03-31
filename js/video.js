$(document).ready(function() {
  $("video").each(function(n) {
    if ($(this).attr("data-controls") == 'simple') {
      var playBtn;
      var $thisVid = $(this);
      var dataPlay = ($thisVid.attr("autoplay") == "autoplay") ? true : false;

      var output = '<div class="video-controls"><a class="play playing" data-playing="' + dataPlay + '" href="#">';
      var output = output + '<span class="icon-play"><span class="ah">Play video</span></span>';
      var output = output + '<span class="icon-pause"><span class="ah">Pause video</span></span>';
      var output = output + '</a></div>';
      $thisVid.parent().append(output);

      var controls = $thisVid.parent().find(".video-controls");
      $(controls).find(".play").click(function(e) {
        if ($(this).attr("data-playing") == "true") {
          $thisVid.parent().find("video").get(0).pause();
          $(this).attr("data-playing","false").removeClass("playing");
        } else {
          $thisVid.parent().find("video").get(0).play();
          $(this).attr("data-playing","true").addClass("playing");
        }
        e.preventDefault();
      });
    }

  });

});

// $('#videoId').get(0).play()
