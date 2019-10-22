$(document).ready(function() {
  /*
  function stripChars(value) {
      return value == undefined ? '' : value.replace("&amp;","and").replace(/[^a-z0-9_]+/gi, '-').replace(/^-|-$/g, '').toLowerCase();
  }
  */

  // Create subnav based on sections (.section)
  /*
  if ($("main .section").length > 1) {
    var numSections = $("main .section").length;
    var actNav = $("#subnav li.active");
    actNav.append('<ul class="menu" />');
    var actMenu = actNav.find(".menu");

    $("main .section").each(function(index) {
      if ($(this).attr("data-title") != undefined) {
        var thisTtl = $(this).attr("data-title");
        if ($(this).attr("id") != undefined) {
          var thisId = $(this).attr("id");
        } else {
          var thisId = stripChars(thisTtl);
          $(this).attr("id", thisId);
        }
        actMenu.append('<li><a href="#' + thisId + '">' + thisTtl + '</a></li>');
      } else if ($(this).find("h2.section-title").length > 0) {
        var thisTtl = ($(this).find("h2.section-title").attr("data-title") != undefined) ? $(this).find("h2.section-title").attr("data-title") : $(this).find("h2.section-title").html();
        if ($(this).attr("id") != undefined) {
          var thisId = $(this).attr("id");
        } else {
          var thisId = stripChars(thisTtl);
          $(this).attr("id", thisId);
        }
        actMenu.append('<li><a href="#' + thisId + '">' + thisTtl + '</a></li>');
      }
    });
  }
  */

  // Sticky Nav
  var buffer = 100;
  var stickyNavTop = $('#subnav .nav').offset().top;
  var subNav = $("#subnav .nav"),
      // All list items
      menuItems = subNav.find("a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
      });

 	var stickyNav = function(){
    var scrollTop = $(window).scrollTop();
    // console.log(scrollTop);
    if (scrollTop > stickyNavTop) {
        $('#subnav .nav').addClass('sticky');
    } else {
        $('#subnav .nav').removeClass('sticky');
    }
	};
	stickyNav();

  // Active sub nav items


  $(window).scroll(function() {
    // actSect();
		stickyNav();

    var fromTop = $(window).scrollTop() + buffer;

    // Get id of current scroll item
    var cur = scrollItems.map(function(){
      if ($(this).offset().top < fromTop)
        return this;
    });
    // Get the id of the current element
    cur = cur[cur.length-1];
    var id = cur && cur.length ? cur[0].id : "";
    // Set/remove active class
    menuItems
      .parent().removeClass("active")
      .end().filter("[href='#"+id+"']").parent().addClass("active");
    scrollItems.removeClass("active");
    $(cur).addClass("active");
    $("section").not(cur).removeClass("active");
	});
});
