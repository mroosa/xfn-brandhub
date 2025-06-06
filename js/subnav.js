$(document).ready(function() {

  // Sticky Nav
  var buffer = 100,
      buffer = 10,
      stickyNavTop = $('#subnav').offset().top,
      subNav = $(".sidebar .nav"),
      // All list items
      menuItems = subNav.find(".primary > a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
      });

  var internalNav = $(".tert-nav"),
      internalMenuItems = internalNav.find("a"),
      internalScrollItems = internalMenuItems.map(function() {
    var item = $($(this).attr("href"));
    if (item.length) { return item; }
  });




 	var stickyNav = function(){
    var scrollTop = $(window).scrollTop();
//    console.log(scrollTop);
    if (scrollTop > stickyNavTop) {
      if (!$('#subnav').hasClass('sticky')) {
        $('#subnav').addClass('sticky');
        $('#subnav video').get(0).play();
        $('#introduction video').get(0).pause();
        $("#introduction .video-controls a").attr("data-playing","false").removeClass("playing");
      }
    } else {
        $('#subnav').removeClass('sticky');
        if (scrollTop <= 0) {
          $('#subnav video').get(0).pause();
          $('#subnav video').get(0).load();
        }
        // if ($('#subnav video').get(0).currentTime > 0) {
        //   $('#subnav video').get(0).pause();
        //   $('#subnav video').get(0).load();
        // }
    }
	};
//	stickyNav();

  // Active sub nav items



  $(".type-wrap").css({"opacity":0});
  $(".slider").css({"visibility":"hidden"});
  var textVisible = false;
  function showText() {
    textVisible = true;
    var numTxts = $(".live-type").length;
    $(".live-type").each(function(index) {
      var thisType = $(this).html();
      $(this).next(".slider").removeClass("show");
      $(".type-wrap").css({"opacity":1});
      $(this).html("&nbsp;");
      var thisBlock = $(this);
      var timeoutID = setTimeout(function() {
        typeIn(thisBlock, thisType);
      },Math.floor(index * 2000));
      var newTimeoutID = setTimeout(function() {
        $(thisBlock).parents(".type-wrap").find(".slider").css({"visibility":"visible"}).addClass("show");
        $("#typography .button[data-id=0]").addClass("active");
      },Math.floor(numTxts * 2000) + 500);
    });
  }


  $(window).scroll(function() {
		//stickyNav();

    var curHash = window.location.hash.replace("#",""),
        newHash = "";
    var fromTop = $(window).scrollTop() + buffer;

    // Get id of current scroll item
    var cur = scrollItems.map(function(){
      if ($(this).offset().top < fromTop)
        return this;
    });
    // Get the id of the current element
    cur = cur[cur.length-1];
    var id = (cur && cur.length) ? cur[0].id : "";
    // Default new hash to section
    newHash = id;
    // Set/remove active class
    menuItems
      .parent().removeClass("active")
      .end().filter("[href='#" + id + "']").parent().addClass("active");
    scrollItems.removeClass("active");
    if ($(cur).attr("id") == 'typography') {
      if (textVisible==false) {
        showText();
      }
    }
    if ($(cur).attr("id") == id && !$(cur).hasClass("active")) {
      // cleanBody();
      // resetActiveTab();
      $("section.active").removeClass("active");
      $(cur).addClass("active");
    }

    // tertiary nav
    var curInt = internalScrollItems.map(function() {
      if ($(this).offset().top < fromTop)
      return this;
    });
    curInt = curInt[curInt.length-1];
    var iid = (curInt && curInt.length) ? curInt[0].id : "";
    if (internalMenuItems.filter("[href='#" + iid + "']").parents(".primary").hasClass("active")) {
      internalMenuItems
        .parent().removeClass("active")
        .end().filter("[href='#" + iid + "']").parent().addClass("active");
      // If secondary is active, overwrite hash
      newHash = iid;
    } else {
      $(".tert-nav .active").removeClass("active");
    }

    // if (curHash != newHash) {
    //   window.location.hash = newHash;
    // }
	});
});
