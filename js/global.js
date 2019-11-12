function smoothScrolling() {
  if ($(window).width()>768) {
    // console.log("smoothScrolling()");
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .not('.ignore-click')
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

// Clean body
function cleanBody() {
  $("body").removeAttr("data-bg");
}

// Tab functionality
function openTabs(section) {
  var thisSec = section;
  // Stop scrolling
  $("html, body").css({
    "overflow": "hidden"
  });
  // Fade in tabs
  thisSec.find(".tabs")
    .fadeIn(400,function() {
      $(this)
        .addClass("active")
        .css({"display":""})
    });
}

function closeTabs() {
  $(".tabs.active").fadeOut(400,function() {
    $(this)
      // reset position
      .css({"left":0})
      // make inactive
      .removeClass("active")
      // reset to first tab
      .find(".tab.active").removeClass("active").end()
      .find(".tab[data-id=0]").addClass("active").end()
      // pause any video
      .find("video").get(0).pause();
    // remove BGs
    cleanBody();
  })
  // Reset Scrolling
  $("html, body").css({
    "overflow": "auto"
  });
}

function tabGo(dir) {
  var theTabs = $(".tabs.active"),
      numTabs = theTabs.attr("data-count"),
      curTab = theTabs.find(".tab.active"),
      activeTabNum = Number(curTab.attr("data-id"));
  if (dir > 0) {
    var newTabNum = (activeTabNum < numTabs - 1) ? activeTabNum + 1 : 0;
  } else {
    var newTabNum = (activeTabNum == 0) ? numTabs - 1 : activeTabNum - 1;
  }
  // Reset individual slideshows
  if (curTab.find(".optionNav .active").attr("data-id") != 0) {
    curTab.find(".optionNav .active").removeClass("active")
    curTab.find(".options").css({"margin-left": 0});
    curTab.find(".optionNav a[data-id=0]").addClass("active");
  }
  curTab.removeClass("active");

  theTabs.find(".tab[data-id=" + newTabNum + "]").addClass("active");
  var newTab = theTabs.find(".tab.active");
  theTabs.css({"left":-100 * newTabNum + "vw"});
  // Add body bg if available or remove it if not
  if (newTab.attr("data-bg") != undefined) {
    $("body").attr("data-bg", $(".tab.active").attr("data-bg"));
  } else {
    cleanBody();
  }
  // If new section has a video, play it. Pause all other videos regardless
  if (newTab.find("video").length > 0) {
    newTab.find("video").get(0).currentTime = 0;
    newTab.find("video").get(0).play();
  } else {
    // Pause all other videos
    $("video").get(0).pause();
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

  // Add number of section
  $(".content section").each(function(index) {
    if (index < 9) {
      $(this).find("h1").prepend("<span>0" + Math.floor(index + 1) + "</span> ");
    }
  });

  // Typepography slider
  var brownWts = [null,'300','400','800'],
      stdWts = [null,'100','200','300','400','500','700'];
  $(".weight").on("change mousemove", function() {
    var thisId = $(this).attr("data-font"),
        wt = Number($(this).val());
    $("." + thisId).attr("data-weight",wt);
    // if ($(this).attr("data-font")=="font-xfs") {
    //   $(this).attr("title",stdWts[wt]);
    // } else if ($(this).attr("data-font")=="font-xfb") {
    //   $(this).attr("title",brownWts[wt]);
    // }
     
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
    var prvImg = '<svg width="9.759" height="17.059" viewBox="0 0 19.518 35.038"><path id="btn-prv" data-name="btn-prv" d="M-2569-22469.783l14.69-14.691,14.691,14.691" transform="translate(22486.473 -2536.79) rotate(-90)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></svg>';
    var nxtImg = '<svg width="9.759" height="17.059" viewBox="0 0 19.518 35.038"><path id="btn-nxt" data-name="btn-nxt" d="M-2569-22469.783l14.69-14.691,14.691,14.691" transform="translate(-22466.955 2571.828) rotate(90)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></svg>';

    theTabs.prepend('<ul class="tab-nav"><li class="tab-prv"><a href="#">' + prvImg + ' <span class="ah">Previous</span></a></li><li class="tab-nxt"><a href="#">' + nxtImg + ' <span class="ah">Next</span></a></li></ul>')
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
      var numOptions = Number(theOptions.find("li").length);
      if (numOptions > 1) {
        $(this).wrap('<div class="slideshow">').css({"width":100 * numOptions + "%"});
        theOptions.addClass("options").after('<ul class="optionNav">');
        var optionNav = theOptions.parents(".tab").find(".optionNav");
        theOptions.find("li")
          .css("width", 100 / numOptions + "%")
          .each(function(opt) {
            $(this).attr("data-id",opt);
            var optNavClass = (opt==0) ? ' class="active"': '';
            optionNav.append('<li><a' + optNavClass + ' data-id="' + opt + '" href="#"><span class="ah">Show ' + $(this).attr("data-alt") + '</span></a></li>');
          });
        optionNav.find("li").each(function() {
          $(this).find("a").click(function() {
            optionNav.find("a.active").removeClass("active");
            $(this).addClass("active");
            $(this).parents(".slideshow").find(".options").css({"margin-left":-100 * $(this).attr("data-id") + "%"});
            // Find/change background
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
  });

  // Color swatches
  $(".color-swatches .color")
    .each(function() {
      $(this).find(".swatch-info").prepend('<a class="close-btn" href="#"><svg width="14" height="14" viewBox="0 0 27.502 27.502"><g transform="translate(-1725.504 -76.49)"><path d="M-1916.082-22342.422l24.674-24.674" transform="translate(3643 22445)" fill="none" stroke="#000" stroke-width="4"/><path d="M-1916.082-22342.422l24.674-24.674" transform="translate(-20615.504 1993.986) rotate(90)" fill="none" stroke="#000" stroke-width="4"/></g></svg> <span class="ah">Close</span></a>');
    })
    .click(function() {
      $(".color-swatches .active").removeClass("active");
      $(this).find(".swatch-info").addClass("active");
      return false;
    });

    $(".swatch-info .close-btn").click(function() {
      $(this).parents(".swatch-info").removeClass("active");
      return false;
    })

  // Photography
  $("#photography .col-1 .button").each(function(index) {
    $(this).attr("data-id",index);
    $(this).click(function() {
      $("#photography .button.active").removeClass("active");
      $(this).addClass("active");
      $("#photography .photo-info-wrap").css({
        "margin-left": -100 - 100 * index + "%"
      });
      $(".photo[data-set=" + index + "]").show();
      $(".photo").not("[data-set=" + index + "]").hide();
      return false;
    })
  })

  // typography
  $("#typography .col-1 .button").each(function(index) {
    $(this).attr("data-id",index);
    $(this).click(function() {
      $("#typography .button.active").removeClass("active");
      $(this).addClass("active");
      $("#typography .col-2").attr("data-active", index);
      return false;
    })
  })

  $(".logo").click(function() {
    $(this).parents("#subnav").toggleClass("black").toggleClass("wht");
  });



});
