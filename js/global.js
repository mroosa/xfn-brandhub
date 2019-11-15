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

function resetActiveTab(tabs) {
  var tabs = (tabs != undefined) ? tabs : $(".tabs.active");
  tabs
    .find(".optionNav .active").removeClass("active").end()
    .find(".options").css({"margin-left": 0}).end()
    .find(".optionNav a[data-id=0]").addClass("active");
  cleanBody();
 }

function tabGo(tid, tabs, reset) {
  var tabs = (tabs != undefined) ? tabs : $(".tabs.active"),
      curTab = tabs.find(".tab.active"),
      activeTabNum = Number(curTab.attr("data-id")),
      newTab = tabs.find(".tab[data-id=" + tid + "]"),
      curDataBg = curTab.attr("data-bg");
  // Reset individual slideshows
  if (reset != undefined && reset == true) {
    resetActiveTab(tabs);
  }
  // Reset old tab, set new tab
  curTab.removeClass("active");
  tabs
    .find(".tab[data-id=" + tid + "]").addClass("active").end()
    .css({"margin-left":-100 * tid + "%"});
  // Add body bg if available or remove it if not
  if (newTab.attr("data-bg") != undefined) {
    // If new tab has options, and shares the same data-bg
    if (newTab.find(".optionNav").length > 0 && newTab.find(".optionNav a[data-bg=" + curDataBg + "]")) {
      var newTabOption = newTab.find(".options li[data-bg=" + curDataBg + "]").attr("data-id");
      setTabOption(newTabOption, newTab);
    } else {
      $("body").attr("data-bg", newTab.attr("data-bg"));
    }
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

function setTabOption(oid, tab) {
  console.log(oid+ " "+tab)
  var link = tab.find(".optionNav a[data-id=" + oid + "]")
  link.parents(".optionNav").find(".active").removeClass("active");
  link
    .addClass("active")
    .parents(".slideshow").find(".options").css({"margin-left":-100 * link.attr("data-id") + "%"});
  // Find/change background
  var dataBg = link.parents(".tab").find(".options li[data-id=" + link.attr("data-id") + "]").attr("data-bg");
  link.parents(".tab").attr("data-bg",dataBg);
  if (dataBg == undefined || dataBg == "") {
    $("body").removeAttr("data-bg");
  } else {
    $("body").attr("data-bg", dataBg);
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
    var thisSec = $(this),
        theTabs = thisSec.find(".tabs"),
        numTabs = theTabs.find(".tab").length;
    theTabs
      .css({"width": Math.floor(numTabs * 100) + "%"})
      .attr({"data-count": numTabs})
      .find(".tab:first-child").addClass("active");

    theTabs.find(".tab").each(function(index) {
      console.log(index);
      // Get the current tab
      var theTab = $(this),
      // Get tab title
          tabTtl = $(this).attr("data-ttl"),
          linkClass = (index==0) ? " active" : "";
      thisSec.find(".col-1").append('<a class="button set-tab' + linkClass + '" data-id="' + index + '" href="#">' + tabTtl + '</a>');
      $(this)
        .attr({"data-id":index})
        .css({"width":100 / numTabs + "%" });

      // Tab options
      var theOptions = theTab.find(".tab-col-2 ul"),
          numOptions = Number(theOptions.find("li").length);
      if (numOptions > 1) {
        theOptions.wrap('<div class="slideshow">').css({"width":100 * numOptions + "%"});
        theOptions
          .addClass("options")
          .after('<ul class="optionNav">');
        var optionNav = theOptions.parents(".tab").find(".optionNav");
        theOptions.find("li")
          .css("width", 100 / numOptions + "%")
          .each(function(opt) {
            $(this).attr("data-id",opt);
            var optNavClass = (opt==0) ? ' class="active"': '';
            optionNav.append('<li><a' + optNavClass + ' data-id="' + opt + '" href="#"><span class="ah">Show ' + $(this).attr("data-alt") + '</span></a></li>');
          });
        optionNav.find("a").click(function() {
          setTabOption($(this).attr("data-id"), theTab);
          return false;
        });
      }
    });
    thisSec.find(".set-tab").click(function() {
      var newTab = $(this).attr("data-id");
      tabGo(newTab, theTabs);
      $(this).siblings(".active").removeClass("active");
      $(this).addClass("active");
      return false;
    });

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

  /* Temp */
  // $("html").addClass("hide");
  // $("#skip").click(function() {
  //   deMask();
  //   setTimeout(function() {
  //     removeMask();
  //   },2000);
  //   return false;
  // });
  // function deMask() {
  //   $("main").addClass("reveal");
  //   $(".intro-vid").get(0).pause();
  // }
  // function removeMask() {
  //   $("main").addClass("remove");
  //   $("html").removeClass("hide");
  // }
  // sldkjflskjdfID = setTimeout(function() {
  //   deMask();
  // },29000);
  // lsdkjflskjdfljksID = setTimeout(function() {
  //   removeMask();
  // }, 31000);
});
