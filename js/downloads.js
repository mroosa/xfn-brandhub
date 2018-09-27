$(document).ready(function() {
  $(".download-contents").hide();
  $(".download").each(function() {
    var thisDownload = $(this);
    thisDownload.find(".download-intro a[data-action=view]").click(function() {
      thisDownload.find(".download-contents").slideDown();
      return false;
    });
  })
  $(".download a[data-action=all]").click(function() {
    $(this).parents(".download-contents").find("input[type=checkbox]").prop("checked",true);
    return false;
  });
  $(".download a[data-action=none]").click(function() {
    $(this).parents(".download-contents").find("input[type=checkbox]").prop("checked",false);
    return false;
  });
  $(".download a[data-action=download]").click(function() {
    return false;
  });
});
