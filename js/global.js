function smoothScrolling() {
  if ($(window).width()>768) {
    // console.log("smoothScrolling()");
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

function randNum(max, min) {
  min = min != undefined ? min : 0;
  return Math.floor(Math.random() * Math.floor(max - min)) + min;
}

function typeIn(field, content) {
  var text = content;
  $(field).html("&nbsp;");
  var i = 0,
      newText = "";
  var typeInID = setInterval(function() {
    if (i<text.length) {
      newText += text.charAt(i);
      $(field).html(newText);
      i++;
    } else {
      clearInterval(typeInID);
    }
  },75);
};


// Tab functionality
function openTabs(section) {
  var thisSec = section;
  $("html, body").css({
    "overflow": "hidden"
  });
  thisSec.find(".tabs").fadeIn(400,function() {
    $(this)
      .addClass("active")
      .css({"display":""})
  });
}

function closeTabs() {
  $(".tabs.active").fadeOut(400,function() {
    $(this).removeClass("active");
  })
  $("html, body").css({
    "overflow": "auto"
  });
}

function tabGo(dir) {
  var theTabs = $(".tabs.active");
  var numTabs = theTabs.attr("data-count");
  var activeTab = Number(theTabs.find(".tab.active").attr("data-id"));
  if (dir > 0) {
    var newTab = (activeTab < numTabs - 1) ? activeTab + 1 : 0;
  } else {
    var newTab = (activeTab == 0) ? numTabs - 1 : activeTab - 1;
  }
  theTabs.find(".tab.active").removeClass("active");
  theTabs.find(".tab[data-id=" + newTab + "]").addClass("active");
  theTabs.css({"left":-100 * newTab + "vw"});
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

  // Add number of section
  $(".content section").each(function(index) {
    if(index < 9) {
      $(this).find("h1").prepend("<span>0" + Math.floor(index + 1) + "</span> ");
    }
  });

  // Typepography slider
  $(".weight").on("change mousemove", function() {
    var thisId = $(this).parents(".slider").attr("data-for");
    $("." + thisId).attr("data-weight",$(this).val());
     
    // console.log($(this).val());
  });

  // Tabbed content
  $("section.with-tabs").each(function() {
    var thisSec = $(this);
    var theTabs = $(this).find(".tabs");
    var numTabs = $(this).find(".tab").length;
    theTabs
      .css({
        "width": Math.floor(numTabs * 100) + "vw"
      })
      .attr({
        "data-count": numTabs
      })
      .find(".tab:first-child").addClass("active");

    // title
    var theTtl = thisSec.find("h1").html();
    theTabs.prepend('<h3 class="ttl">' + theTtl + '</h3>');

    // Close button
    theTabs.prepend('<a class="close-btn" href="#"><img src="../images/btn-close.svg" alt="Close"> <span class="ah">Close section</span></a>');
    thisSec.find(".close-btn").click(function() {
      closeTabs();
      return false;
    })

    // Previous/Next buttons
    theTabs.prepend('<ul class="tab-nav"><li class="tab-prv"><a href="#"><img src="../images/btn-prv.svg"> <span class="ah">Previous</span></a></li><li class="tab-nxt"><a href="#"><img src="../images/btn-nxt.svg"> <span class="ah">Next</span></a></li></ul>')
    thisSec.find(".tab").each(function(index) {
      $(this).attr({"data-id":index});
    })
    theTabs.find(".tab-nxt").click(function() {
      tabGo(1);
      return false;
    });
    theTabs.find(".tab-prv").click(function() {
      tabGo(-1);
      return false;
    });

    // Open tabs
    thisSec.find(".button").click(function() {
      openTabs(thisSec);
      return false;
    })

    // Tab options
    theTabs.find(".tab-col-2 ul").each(function() {
      var theOptions = $(this);
      var numOptions = theOptions.find("li").length;
      if (numOptions > 1) {
        theOptions.addClass("options").after('<ul class="optionNav">');
        var optionNav = theOptions.parents(".tab").find(".optionNav");
        theOptions.find("li").each(function(opt) {
          $(this).attr("data-id",opt);
          var optNavClass = (opt==0) ? ' class="active"': '';
          $(this).addClass("active");
          optionNav.append('<li><a' + optNavClass + ' data-id="' + opt + '" href="#"><span class="ah">Show ' + $(this).attr("data-alt") + '</span></a></li>');
        });
        optionNav.find("li").each(function() {
          $(this).find("a").click(function() {
            var dataBg = $(this).parents(".tab").find(".options li[data-id=" + $(this).attr("data-id") + "]").attr("data-bg");
            if (dataBg == undefined || dataBg == "") {
              $("body").removeAttr("data-bg");
            } else {
              $("body").attr("data-bg", dataBg);
            }
            return false;
          });
        });
      }
    })

  })


  $(".live-type").each(function(index) {
    var thisType = $(this).html();
    $(this).html("&nbsp;");
    var thisBlock = $(this);
    var timeoutID = setTimeout(function() {
      typeIn(thisBlock, thisType);
    },Math.floor(index * 2000));
  });

});
