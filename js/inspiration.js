$(document).ready(function() {
  // Initiate masonry
  var $grid = $('.grid').masonry();
  $grid.imagesLoaded().progress(function() {
    $grid.masonry('layout');
  });

  // Create empty Tag List object
  var TagList = {product:"all", tactic:"all", channel:"all", campaign:"all"};


  // Clear out the Tag List
  function clearTags() {
    TagList = {product:"all", tactic:"all", channel:"all", campaign:"all"};
    $(".selection").find("select").val("");
    $(".inspiration-gallery").removeClass("modified");
  }

  $(".selection").find("select").change(function() {
    var newTag = $(this).val();
    var thisCat = $(this).attr("id");
    TagList[thisCat] = newTag;
    var listCount = 0;
    $(".inspiration-gallery").removeClass("modified");
    for (var prop in TagList) {
      if (TagList[prop] == "all") {
        listCount++;
      }
    }
    // Add class to allow show/hide of items if "all" is not selected for all dropdowns
    if (listCount<4) {
      $(".inspiration-gallery").addClass("modified");
    }

    $(".grid li").each(function() {
      var propCount = 0;
      if ($(this).attr("data-tags")) {
        var itemTags = $(this).attr("data-tags").split(", ");
        var showThis = true;
        $(this).removeClass("show");

        for (var prop in TagList) {
          // get current prop
          var thisProp = TagList[prop];
          // Check to see if empty
          if (thisProp != "all") {
            // Loop through tags
            itemTags.forEach(function(el) {
              if (thisProp == el) {
                propCount++;
              }
            });
          } else {
            propCount++
            // validate this prop
          }
        }
        // If all props validate
        if (propCount==4) {
          $(this).addClass("show");
        }
      }
    });
    $grid.masonry('layout');

  });
  $(".grid li").hover(function() {
    if ($(this).attr("data-tags")) {
      var ary = $(this).attr("data-tags").split(", ");
      // console.log(ary);
    }
  });
});
