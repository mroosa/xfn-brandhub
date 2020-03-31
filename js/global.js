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
              // Set the URL to the hash so it can be permalinked
              window.location.hash = $target.attr('id');
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
  var tabs = (tabs != undefined) ? tabs : $(".tab.active").parent();
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
  // Close any lightboxes
  closePopOut();
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
    }
    // } else {
    //   tabs.parents("section").attr("data-bg", newTab.attr("data-bg"));
    // }
  }
  // If new section has a video, play it. Pause all other videos regardless
  if (newTab.find("video").length > 0) {
    alert(newTab.attr("id"));
    newTab.find("video").get(0).currentTime = 0;
    newTab.find("video").get(0).play();
  } else {
    // Pause all other videos
    $("video").get(0).pause();
  }
}

function setOption(oid, tab) {
  if (oid == "next") {
    var totalOptions = tab.find(".optionNav li").length;
    var curLink = Number(tab.find(".optionNav a.active").attr("data-id"));
    oid = (curLink + 1 < totalOptions) ? curLink + 1: 0;
  } else if (oid == "prev") {
    var totalOptions = tab.find(".optionNav li").length;
    var curLink = Number(tab.find(".optionNav a.active").attr("data-id"));
    oid = (curLink - 1 < 0) ? curLink - 1: totalOptions;
  }
  var link = tab.find(".optionNav a[data-id=" + oid + "]")
  link.parents(".optionNav").find(".active").removeClass("active");
  link
    .addClass("active")
    .parents(".slideshow").find(".options").css({"margin-left":-100 * link.attr("data-id") + "%"});
  // Find/change background
  var dataBg = link.parents(".tab").find(".options li[data-id=" + link.attr("data-id") + "]").attr("data-bg");
  link.parents(".tab").attr("data-bg",dataBg);
  // if (dataBg == undefined || dataBg == "") {
  //   tab.parents("section").removeAttr("data-bg");
  // } else {
  //   tab.parents("section").attr("data-bg", dataBg);
  // }
}

function createOptions(parent) {
  var theOptions = parent.find("ul.optionWrap"),
      numOptions = Number(theOptions.children().length);
  if (numOptions > 1) {
    theOptions
      .wrap('<div class="slideshow">')
      .css({"width":100 * numOptions + "%"})
      .addClass("options")
      .after('<ul class="optionNav">');
    var optionNav = theOptions.parents(".tab").find(".optionNav");
    theOptions.children()
      .css("width", 100 / numOptions + "%")
      .each(function(opt) {
        var optionTtl = ($(this).attr("data-alt") != undefined) ? "Show " + $(this).attr("data-alt") : "";
        $(this).attr("data-id",opt);
        var optNavClass = (opt==0) ? ' class="active"': '';
        optionNav.append('<li><a' + optNavClass + ' data-id="' + opt + '" href="#"><span class="ah">' + optionTtl + '</span></a></li>');
      });
    optionNav.find("a").click(function(e) {
      setOption($(this).attr("data-id"), parent);
      e.preventDefault();
    });
    if (theOptions.hasClass("auto")) {
      var timeDelay = theOptions.attr("data-speed");
      var timeID = setInterval(function() {
        setOption("next", parent);
      }, timeDelay * 1000);
    };
  }
}

function popOut(content, text, parent) {
  $("body").addClass("lit");
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
  $("body").removeClass("lit");
  $(".lightbox-shade.active").removeClass("active");
}

$(document).ready(function() {
  $("input, textarea, select").wrap('<div class="form-item-wrap">');
  $(".form-item-wrap").find("input, textarea, select").focus(function() {
    $(this).parent(".form-item-wrap").addClass("focus");
  });
  $(".form-item-wrap").find("input, textarea, select").blur(function() {
    $(this).parent(".form-item-wrap").removeClass("focus");
  });

  // Add number of section
  $(".content > section").each(function(index) {
    var prefix = (index < 9) ? "0": "";
    $(this).find("h1").prepend("<span>" + prefix + Math.floor(index + 1) + "</span> ");
  });

  // Typepography slider
  $(".type-wrap").each(function(n) {
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
    wts.before('<label class="ah" for="slider-' + n + '">Choose your font weight</label><input name="slider-' + n + '" id="slider-' + n + '" type="range" min="1" max="' + numWts + '" value="' + defaultWt + '" class="weight" data-font="' + font + '">');

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
      // .css({"width": Math.floor(numTabs * 100) + "%"})
      .attr({"data-count": numTabs})
      .find(".tab:first-child").addClass("active");

    var tabNavContents = "",
        subNavContents = "";
    theTabs.find(".tab").each(function(index) {
      // Get the current tab
      var theTab = $(this),
      // Get tab title
          tabTtl = $(this).attr("data-ttl"),
          linkClass = (index==0) ? " active" : "";
      $(this)
        .attr({"data-id":index})
      // Tab options
      createOptions(theTab);
      if (tabTtl != "" && tabTtl != undefined && numTabs > 1) {
        tabNavContents += '<li><a class="button set-tab' + linkClass + '" data-id="' + index + '" href="#' + $(this).attr("id") + '"><span>' + tabTtl + '</span></a></li>';
        subNavContents += '<li><a href="#' + $(this).attr("id") + '">' + tabTtl + '</a></li>';
      }
    });

    // Create Tab buttons in main column, add to subnav
    if (numTabs > 1) {
      $('#subnav a[href="#' + thisSec.attr("id") + '"]')
        .addClass("parent")
        .parent().addClass("has-children")
        .append('<ul class="tert-nav">' + subNavContents + '</ul>');
    }
  });

  $(".slideshow")
    .on("swipeleft",function() {
    var thisOpt = $(this),
        thisTab = thisOpt.parents(".tab");
        setOption("next",thisTab);

    })
    .on("swiperight",function() {
      var thisOpt = $(this),
          thisTab = thisOpt.parents(".tab");
          setOption("prev",thisTab);
    });

  // Add count to left button navs
  $("section").each(function() {
    var numBtns = $(this).find(".tab-nav li").length;
    if (numBtns > 0) {
      $(this).find(".tab-nav").attr("data-count",numBtns);
    }
  })

  // Color swatches
  $(".color-swatches .color")
    .click(function(e) {
      var thisColor = $(this).attr("href");
      $(".color-swatches .active").removeClass("active");
      $(".color-swatch-info")
        .find(".active").removeClass("active").end()
        .find(thisColor).addClass("active");
      e.preventDefault();
    });

  $(".color-swatch-info .swatch-info").prepend('<a class="close-btn" href="#"><svg width="14" height="14" viewBox="0 0 27.502 27.502"><g transform="translate(-1725.504 -76.49)"><path d="M-1916.082-22342.422l24.674-24.674" transform="translate(3643 22445)" fill="none" stroke="#000" stroke-width="4"/><path d="M-1916.082-22342.422l24.674-24.674" transform="translate(-20615.504 1993.986) rotate(90)" fill="none" stroke="#000" stroke-width="4"/></g></svg> <span class="ah">Close</span></a>');
  $(".swatch-info .close-btn").click(function(e) {
    $(this).parents(".swatch-info").removeClass("active");
    e.preventDefault();
  })

  // Sub Brand
  $(".sub-brand-nav li a").click(function(e) {
    let activeNav = $(this).attr("data-brand");
    if (!$(this).parent().hasClass("active")) {
      $(".sub-brand-logos .sub-brand-logo-2 ul").css({"margin-top":-70 * activeNav + "px"});
      $(".sub-brands ul").css({"margin-left":-100 * activeNav + "%"});
      $(".sub-brand-nav li.active").removeClass("active");
      $(this).parent().addClass("active");
    }
    e.preventDefault();
  });

  // Brand Symbol
  let closeSVG = '<svg width="15" height="15" viewBox="0 0 27.502 27.502"> <g transform="translate(-1725.504 -76.49)"> <path d="M-1916.082-22342.422l24.674-24.674" transform="translate(3643 22445)" fill="none" stroke="#000" stroke-width="4"/> <path d="M-1916.082-22342.422l24.674-24.674" transform="translate(-20615.504 1993.986) rotate(90)" fill="none" stroke="#000" stroke-width="4"/> </g> </svg>';
  // $("body").append('<div id="click-shade"></div>');
  // if($("body").hasClass("lit")) {
  //   $("#click-shade").click(function() {
  //     closePopOut();
  //   });
  // }
  $(".quadWrap").parent().append('<div class="lightbox-shade"><div class="lightbox"><div class="lightbox-content"></div><a class="close" href="#">' + closeSVG + '<span class="ah">Close preview</span></a></div></div>');
  $(".lightbox-shade, .lightbox .close").click(function(e) {
    closePopOut();
    e.preventDefault();
  });
  $(".quadWrap li.text").append('<div class="fade"></div><a class="expand" href="#">' + closeSVG + '<span class="ah">Expand content</span></a>');
  $(".quadWrap li a:not(.expand)").each(function(n) {
    $(this).click(function(e) {
      let popCon = ($(this).parents("li").hasClass("text")) ? $(this).html() : $(this).attr("href");
      popOut(popCon, $(this).parents("li").hasClass("text"), $(this).parents(".tab"));
      e.preventDefault();
    });
  });

  $("#subnav").prepend('<a id="open-mobile-nav" href="#"><span class="ah">Expand Navigation</span></a>');
  $("#open-mobile-nav").click(function(e) {
    $("body").toggleClass("mobileActive");
    e.preventDefault();
  });


  // $(".download a, .explore a").wrapInner("<span>");
  // $(".download a").prepend('<svg height="25px" width="25px"  fill="#000000" viewBox="0 0 32 32" x="0px" y="0px"><title>download</title><path d="M15.983 0c-0.623 0.010-1.125 0.517-1.125 1.142 0 0.006 0 0.011 0 0.017v-0.001 20.080l-7.186-7.186c-0.207-0.207-0.492-0.334-0.807-0.334-0.631 0-1.142 0.512-1.142 1.142 0 0.316 0.128 0.601 0.335 0.808l9.135 9.135c0.003 0.003 0.008 0.007 0.013 0.011l0.002 0.002c0.011 0.011 0.023 0.022 0.035 0.033l0.001 0.001c0.015 0.014 0.031 0.027 0.047 0.041l0.002 0.002c0.008 0.006 0.019 0.014 0.030 0.022l0.003 0.002c0.015 0.011 0.034 0.025 0.054 0.038l0.005 0.003c0.010 0.007 0.025 0.016 0.041 0.025l0.005 0.003c0.012 0.007 0.029 0.017 0.047 0.026l0.006 0.003c0.009 0.005 0.025 0.013 0.041 0.019l0.007 0.003c0.010 0.005 0.028 0.013 0.046 0.021l0.007 0.003c0.011 0.005 0.031 0.011 0.051 0.018l0.008 0.002c0.008 0.003 0.024 0.009 0.040 0.014l0.008 0.002c0.011 0.003 0.031 0.009 0.051 0.013l0.007 0.001c0.010 0.003 0.029 0.007 0.047 0.010l0.007 0.001c0.011 0.002 0.030 0.005 0.049 0.007l0.006 0.001c0.014 0.002 0.034 0.004 0.054 0.005h0.003c0.018 0.001 0.038 0.002 0.059 0.002h0.001c0.008 0 0.018 0.001 0.027 0.001s0.019 0 0.029-0.001h-0.001c0.035-0.001 0.069-0.003 0.102-0.007l-0.005 0.001c0.009-0.001 0.011-0.002 0.014-0.002l-0.007 0.001c0.030-0.004 0.054-0.008 0.078-0.013l-0.007 0.001c0.026-0.005 0.044-0.009 0.062-0.013l-0.008 0.002c0.022-0.005 0.037-0.009 0.051-0.013l-0.008 0.002c0.031-0.009 0.054-0.016 0.076-0.023l-0.008 0.002c0.022-0.007 0.035-0.013 0.049-0.018l-0.007 0.003c0.028-0.011 0.048-0.019 0.067-0.029l-0.007 0.003c0.037-0.017 0.065-0.031 0.093-0.046l-0.006 0.003c0.005-0.003 0.006-0.004 0.007-0.005l-0.004 0.003c0.027-0.015 0.048-0.029 0.069-0.043l-0.004 0.003c0.019-0.013 0.034-0.022 0.048-0.033l-0.003 0.002c0.028-0.021 0.052-0.040 0.075-0.060l-0.001 0.001c0.002-0.002 0.005-0.005 0.007-0.007v0c0.019-0.016 0.037-0.031 0.053-0.047l9.134-9.134c0.214-0.208 0.346-0.498 0.346-0.819 0-0.631-0.511-1.142-1.142-1.142-0.012 0-0.023 0-0.035 0.001h0.002c-0.308 0.009-0.585 0.139-0.785 0.344v0l-7.185 7.186v-20.080c0-0.005 0-0.010 0-0.015 0-0.631-0.511-1.142-1.142-1.142-0.006 0-0.012 0-0.018 0h0.001zM1.156 29.703c-0.005 0-0.010 0-0.016 0-0.631 0-1.142 0.511-1.142 1.142s0.512 1.142 1.142 1.142c0.006 0 0.011 0 0.017 0h29.686c0.005 0 0.010 0 0.016 0 0.631 0 1.142-0.511 1.142-1.142s-0.511-1.142-1.142-1.142c-0.006 0-0.011 0-0.017 0z"></path></svg>');
  // $(".explore a").prepend('<svg height="25px" width="25px" fill="#000000" viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" x="0px" y="0px"><path d="M14 2.707L8.354 8.353a.5.5 0 0 1-.707-.707L13.293 2H9.5a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707zM5 3H2.499C1.671 3 1 3.669 1 4.496v9.009c0 .825.679 1.496 1.502 1.496h8.995a1.5 1.5 0 0 0 1.502-1.502v-2.498a.5.5 0 0 0-1 0v2.498a.5.5 0 0 1-.502.502H2.502A.504.504 0 0 1 2 13.505V4.496C2 4.222 2.223 4 2.499 4H5a.5.5 0 0 0 0-1z" fill-rule="nonzero"></path></svg>');

  // Pause intro bg video when launching full intro video
  $(".launch-video a").click(function(e) {
    $("#introduction video").get(0).pause();
    $("#introduction .video-controls a").attr("data-playing","false").removeClass("playing");
    $(this).featherlight({targetAttr:'href'});
    e.preventDefault();
  })

  // Temp intro swap
  // $(".alt-swap").click(function() {
  //   $("#introduction").toggleClass("alt");
  // });

  // Random seed
  $("body").attr("data-random-seed",randNum(4,1));

  function closeMobile() {
    $("body").removeClass("mobileActive");
  }

  $("#subnav .nav").clone().attr("id","mobileMenu").appendTo(".sidebar");
  $("#mobileMenu .has-children").each(function(n) {
    var thisMenu = $(this);
    var thisLink = thisMenu.find("a.parent").attr("href");
    thisMenu.find(".tert-nav").prepend('<li><a href="' + thisLink + '">Overview</a></li>');
  });
  $("#mobileMenu .parent").click(function() {
    if (!$(this).hasClass("open")) {
      $("#mobileMenu .open")
        .removeClass("open")
        .parent().find(".tert-nav").slideUp();
      $(this)
        .addClass("open")
        .parent().find(".tert-nav").slideDown();
    }
    return false;
    closeMobile();
  });
  $("#mobileMenu a:not(.parent)").click(function() {
    closeMobile();
  })

  $(window).keydown(function(e) {
    if (e.keyCode == 34 || e.keyCode == 33) {
      var curActSec = (!$("#subnav .primary.active").hasClass("has-children")) ? $("#subnav .primary.active") : $("#subnav .primary.active .active");
      if (e.keyCode == 34) {
        if (curActSec.next().length > 0) {
          curActSec.next().find("a")[0].click();
        } else {
          if (curActSec.parents(".primary").next().length > 0) {
            curActSec.parents(".primary").next().find("a")[0].click();
          }
        }
      } else {
        if (curActSec.hasClass("primary")) {

        }

        // A| if current section is top level
          // B| if previous section exists
            // C| if previous section has children
              // D| choose last sub-section
        // A| if current section is not top level
          // check to see if previous sub-section exists

        if (curActSec.prev().length > 0) {
          curActSec.prev().find("a")[0].click();
        } else {
          if (curActSec.parents(".primary").prev().length > 0) {
            if (curActSec.parents(".primary").prev().hasClass("has-children")) {
              curActSec.parents(".primary").prev().find("li").last().find("a")[0].click();
            } else {
              curActSec.parents(".primary").prev().find("a")[0].click();
            }
          }
        }
      }
      e.preventDefault();

    }
  });

  smoothScrolling();
});
