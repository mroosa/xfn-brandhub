$(document).ready(function() {
  // Create empty Tag List object
  var TagList = {};

  // Clear out the Tag List
  function clearTags() {
    TagList = {product:"", tactic:"", channel:"", campaign:""};
    $(".selection").find("select").val("");
    $(".inspiration-gallery").removeClass("modified");
  }
  $(".selection").find("select").change(function() {
    var newTag = $(this).val();
    var thisCat = $(this).attr("id");
    TagList[thisCat] = newTag;
    // console.log(TagList);
    $(".grid-item").each(function() {
      if ($(this).attr("data-tags")) {
        var itemTags = $(this).attr("data-tags").split(",");
        var showThis = false;
        $(this).removeClass("show");
        for (var i=0; i<itemTags.length; i++) {
          if (TagList.product == itemTags[i]) {
            showThis = true;
          }
          if (TagList.tactic == itemTags[i]) {
            showThis = true;
          }
          if (TagList.channel == itemTags[i]) {
            showThis = true;
          }
          if (TagList.campaign == itemTags[i]) {
            showThis = true;
          }
        }
        if (showThis) {
          $(this).addClass("show");
        }
      }
    });
    $(".inspiration-gallery").addClass("modified");
    var $grid = $('.grid').masonry();
    $grid.imagesLoaded().progress(function() {
      $grid.masonry('layout');
    });

  });
  $(".grid-item").hover(function() {
    if ($(this).attr("data-tags")) {
      var ary = $(this).attr("data-tags").split(", ");
      console.log(ary);
    }
  });
});
