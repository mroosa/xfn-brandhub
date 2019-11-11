$(document).ready(function() {

  // Sticky Nav
  var buffer = 0;
  var stickyNavTop = $('#subnav').offset().top;
  console.log(stickyNavTop);
  var subNav = $("#subnav .sidebar"),
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
        $('#subnav .sidebar').addClass('sticky');
    } else {
        $('#subnav .sidebar').removeClass('sticky');
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
