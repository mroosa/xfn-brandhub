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
      setOption(newTabOption, newTab);
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

function setOption(oid, tab) {
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

function createOptions(parent) {
  var theOptions = parent.find("ul.optionWrap"),
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
        var optionTtl = ($(this).attr("data-alt") != undefined) ? "Show " + $(this).attr("data-alt") : "";
        $(this).attr("data-id",opt);
        var optNavClass = (opt==0) ? ' class="active"': '';
        optionNav.append('<li><a' + optNavClass + ' data-id="' + opt + '" href="#"><span class="ah">' + optionTtl + '</span></a></li>');
      });
    optionNav.find("a").click(function() {
      setOption($(this).attr("data-id"), parent);
      return false;
    });
  }
}

function popOut(content, text, parent) {
  if (text) {
    parent.find(".lightbox").addClass("text");
  } else {
    parent.find(".lightbox").removeClass("text");
    content = '<img src="' + content + '" alt="">';
  }
  parent.find(".lightbox-shade").addClass("active");
  parent.find(".lightbox-content").html(content);
}
function closePopOut() {
  $(".lightbox-shade.active").removeClass("active");
}

$(document).ready(function() {

  // $(".optionWrap").each(function() {
  //   createOptions($(this).parents(".section"));
  // });
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
    var prefix = (index < 9) ? "0": "";
    $(this).find("h1").prepend("<span>" + prefix + Math.floor(index + 1) + "</span> ");
  });

  // Typepography slider
  $(".type-wrap").each(function() {
    var fontWrap = $(this),
        wts = fontWrap.find(".weights"),
        numWts = wts.find("li").length,
        font = fontWrap.find("blockquote").attr("data-font"),
        wtAry = [null],
        defaultWt;

    // Find and create wt array
    wts.find("li").each(function(index) {
      wtAry.push($(this).attr("data-weight"));
      if ($(this).hasClass("active")) {
        defaultWt = index + 1;
      }
    });

    // Create slider based on weights
    wts.before('<input type="range" min="1" max="' + numWts + '" value="' + defaultWt + '" class="weight" data-font="' + font + '">');

    // Change font weight on slider change
    fontWrap.find(".weight").on("change mousemove", function() {
      var wt = Number($(this).val());
      fontWrap.find("blockquote").css({"font-weight":wtAry[wt]});
      $(this).siblings(".weights").find("li.active").removeClass("active");
      $(this).siblings(".weights").find("li[data-weight=" + wtAry[wt] + "]").addClass("active");
    });
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

    var tabNavContents = "";
    theTabs.find(".tab").each(function(index) {
      // Get the current tab
      var theTab = $(this),
      // Get tab title
          tabTtl = $(this).attr("data-ttl"),
          linkClass = (index==0) ? " active" : "";
      tabNavContents += '<li><a class="button ignore-click set-tab' + linkClass + '" data-id="' + index + '" href="#">' + tabTtl + '</a></li>';
      $(this)
        .attr({"data-id":index})
        .css({"width":100 / numTabs + "%" });

      // Tab options
      createOptions(theTab);
    });
    thisSec.find(".col-1").append('<ul class="tab-nav">' + tabNavContents + '</ul>');
    thisSec.find(".set-tab").click(function() {
      var newTab = $(this).attr("data-id");
      tabGo(newTab, theTabs);
      $(this).parents(".tab-nav").find(".active").removeClass("active");
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

  let closeSVG = '<svg width="15" height="15" viewBox="0 0 27.502 27.502"> <g transform="translate(-1725.504 -76.49)"> <path d="M-1916.082-22342.422l24.674-24.674" transform="translate(3643 22445)" fill="none" stroke="#000" stroke-width="4"/> <path d="M-1916.082-22342.422l24.674-24.674" transform="translate(-20615.504 1993.986) rotate(90)" fill="none" stroke="#000" stroke-width="4"/> </g> </svg>';

  $(".quadWrap").parent().append('<div class="lightbox-shade"><div class="lightbox"><div class="lightbox-content"></div><a class="close" href="#">' + closeSVG + '<span class="ah">Close preview</span></a></div></div>');
  $(".lightbox .close").click(function() {
    closePopOut();
    return false;
  });
  $(".quadWrap li.text").append('<div class="fade"></div><a class="expand" href="#">' + closeSVG + '<span class="ah">Expand content</span></a>');
  $(".quadWrap li a:not(.expand)").each(function(n) {
    $(this).click(function() {
      let popCon = ($(this).parents("li").hasClass("text")) ? $(this).html() : $(this).attr("href");
      popOut(popCon, $(this).parents("li").hasClass("text"), $(this).parents(".tab"));
      return false;
    });
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
  $(".download a").wrapInner("<span>");
  $(".download a").prepend('<svg width="21.707" height="26.5" viewBox="0 0 21.707 26.5"><g id="btn-download" data-name="btn-download" transform="translate(-904.5 -988.5)"><path d="M0,7.825,7.824,0l7.825,7.825" transform="translate(922.993 1007.081) rotate(180)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><line y1="15.978" transform="translate(915.087 989.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/><line x2="19.707" transform="translate(905.5 1014)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/></g></svg>');

  // Wrap buttons
  $("body").addClass("button-wrapping");
  $(".button").wrapInner("<span>");

});
