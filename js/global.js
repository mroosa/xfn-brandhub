function tempExpand() {
  $(".temp-expand")
    .css({
      "background": "#f90",
      "padding"   : "10px"
    })
    .wrapInner("<div class=\"temp-expand-inner\">")
    .click(function() {
      $(this).find(".temp-expand-inner").toggle();
  });
  $(".temp-expand-inner").hide();
}

function toolTip(info) {
  
}

function smoothScrolling() {
  if ($(window).width()>768) {
    console.log("smoothScrolling()");
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
          location.hostname === this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            });
          }
        }
      });
  }
}


$(document).ready(function() {
  smoothScrolling();
  $("input, textarea, select").wrap('<div class="form-item-wrap">');
  $(".form-item-wrap").find("input, textarea, select").focus(function() {
    $(this).parent(".form-item-wrap").addClass("focus");
  });
  $(".form-item-wrap").find("input, textarea, select").blur(function() {
    $(this).parent(".form-item-wrap").removeClass("focus");
  });

  // Typeography slider
  $(".weight").on("change mousemove", function() {
    var thisId = $(this).parents(".slider").attr("data-for");
    $("." + thisId).attr("data-weight",$(this).val());
    // console.log($(this).val());
  });
  tempExpand();

});
