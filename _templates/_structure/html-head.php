<?php include_once($dir . "_templates/_includes/_variables.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Xfinity Brand Hub</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="<?php print $dir; ?>js/lightbox-min.js"></script>
  <?php
  if (isset($scriptList) && $scriptList != 'undefined') {
    foreach ($scriptList as $script) {
      print "<script src=\"" . $dir . "js/" . $script . "\"></script>\n";
    }
  }
  ?>

  <link rel="stylesheet" href="<?php print $dir; ?>css/_fonts.css" />
  <link rel="stylesheet" href="<?php print $dir; ?>css/styles.css" />
  <link rel="stylesheet" href="<?php print $dir; ?>css/lightbox.css" />
  <?php
  if (isset($styleList) && $styleList != 'undefined') {
    foreach ($styleList as $sheet) {
      print "<link rel=\"stylesheet\" href=\"" . $dir . "css/" . $sheet . "\">\n";
    }
  }
  ?>
</head>
