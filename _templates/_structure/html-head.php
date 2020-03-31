<?php
  $isDev = false;
  $gtag = ($isDev) ? "***REMOVED***": "***REMOVED***";
  $gtm = "***REMOVED***";
?>
<?php include_once($dir . "_templates/_includes/_variables.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','<?php print $gtm; ?>');</script>
  <!-- End Google Tag Manager -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php print $gtag; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php print $gtag; ?>');

    /*
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', '<?php print $gtag; ?>', 'auto');
    ga('send', 'pageview');

    ga('send', 'event', 'link', 'click-nav-intro', 'Main Nav: Introduction', '1');
    ga('send', 'event', 'link', 'click-nav-logo', 'Main Nav: Logo', '2');
    ga('send', 'event', 'link', 'click-nav-brand_symbol', 'Main Nav: Brand Symbol', '3');
    ga('send', 'event', 'link', 'click-nav-sub_brands', 'Main Nav: Sub-Brands', '4');
    ga('send', 'event', 'link', 'click-nav-color', 'Main Nav: Color', '5');
    ga('send', 'event', 'link', 'click-nav-typography', 'Main Nav: Typography', '6');
    ga('send', 'event', 'link', 'click-nav-photography', 'Main Nav: Photography', '7');
    ga('send', 'event', 'link', 'click-nav-secondary_graphics', 'Main Nav: Secondary Graphics', '8');
    ga('send', 'event', 'link', 'click-nav-design_system', 'Main Nav: Design System', '9');
    ga('send', 'event', 'link', 'click-nav-co_branding', 'Main Nav: Co-Branding', '10');
    ga('send', 'event', 'link', 'click-nav-creative_examples', 'Main Nav: Creative Examples', '11');
    ga('send', 'event', 'link', 'click-nav-downloads', 'Main Nav: Downloads', '12');
    ga('send', 'event', 'link', 'click-nav-contact_resources', 'Main Nav: Contact and Resources', '13');
    */
  </script>


  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex" />
  <title>Xfinity Brand Hub</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="<?php print $dir; ?>js/jquery.min.js"></script>
  <script src="<?php print $dir; ?>js/jquery-ui.min.js"></script>
  <script src="<?php print $dir; ?>js/global.js"></script>
  <!-- <script src="<?php print $dir; ?>js/global-min.js"></script> -->
  <script>
  $( function() {
      $( document ).tooltip({track: true});
      if ($(window).width() < 768) {$( document ).tooltip('disable');}
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
