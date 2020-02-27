<?php include_once($dir . "_templates/_includes/_variables.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','***REMOVED***');</script>
  <!-- End Google Tag Manager -->


  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xfinity Brand Hub</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="<?php print $dir; ?>js/jquery.min.js"></script>
  <script src="<?php print $dir; ?>js/jquery-ui.min.js"></script>
  <script src="<?php print $dir; ?>js/global.js"></script>
  <!-- <script src="<?php print $dir; ?>js/global-min.js"></script> -->
  <script>
  $( function() {
      $( document ).tooltip({
        track: true
      });
      if ($(window).width() < 768) {
        $( document ).tooltip('disable');
      }
    } );
  </script>
  <?php
  if (isset($scriptList) && $scriptList != 'undefined') {
    foreach ($scriptList as $script) {
      print "<script src=\"" . $dir . "js/" . $script . "\"></script>\n";
    }
  }
  ?>

  <link rel="stylesheet" href="<?php print $dir; ?>css/styles.css" />
  <!-- <link rel="stylesheet" href="<?php print $dir; ?>css/lightbox.css" /> -->
  <link rel="stylesheet" href="<?php print $dir; ?>css/jquery-ui.css" />
  <?php
  if (isset($styleList) && $styleList != 'undefined') {
    foreach ($styleList as $sheet) {
      print "<link rel=\"stylesheet\" href=\"" . $dir . "css/" . $sheet . "\">\n";
    }
  }
  ?>
</head>
<?php
$bodyClasses = "";
if (isset($bodyClassList) && $bodyClassList != 'undefined') {
  $bodyClasses = " class=\"";
  foreach ($bodyClassList as $bodyClass) {
    $bodyClasses .= $bodyClass . " ";
  }
  $bodyClasses = rtrim($bodyClasses);
  $bodyClasses .= "\"";
}
?>
<body<?php print $bodyClasses; ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=***REMOVED***"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div class="contain">
