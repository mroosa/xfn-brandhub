$(document).ready(function() {
  function stripChars(value) {
      return value == undefined ? '' : value.replace("&amp;","and").replace(/[^a-z0-9_]+/gi, '-').replace(/^-|-$/g, '').toLowerCase();
  }

    // Create subnav based on sections (.section)
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

  // Sticky Nav
  var stickyNavTop = $('#subnav .nav').offset().top;
 	var stickyNav = function(){
    var scrollTop = $(window).scrollTop();
    if (scrollTop > stickyNavTop) {
        $('#subnav .nav').addClass('sticky');
    } else {
        $('#subnav .nav').removeClass('sticky');
    }
	};
	stickyNav();
	$(window).scroll(function() {
		stickyNav();
	});

  // Active sub nav items
  

});
