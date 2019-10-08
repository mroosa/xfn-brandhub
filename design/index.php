<?php
  $dir = "../";
  $scriptList = ['subnav.js','gallery.js'];
  $styleList = ['gallery.css'];
  $activeMain = 1; // Design
  $activeSub = 0;
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="two-col design">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main>
      <div class="inner">
        <?php
          if (file_exists("_subnav.php")):
            print "<div id=\"subnav\">\n";
            include_once("_subnav.php");
            print "</div>\n";
          endif;
        ?>
        <div class="content">
          <section id="overview">
            <?php include_once("overview.php"); ?>
          </section>
          <section id="logo">
            <?php include_once("logo.php"); ?>
          </section>
          <section id="color">
            <?php include_once("color.php"); ?>
          </section>
          <section id="typography">
            <?php include_once("typography.php"); ?>
          </section>
          <section id="photography">
            <?php include_once("photography.php"); ?>
          </section>
          <section id="secondary-graphics">
            <?php include_once("secondary-graphics.php"); ?>
          </section>
          <section id="design-system">
            <?php include_once("design-system.php"); ?>
          </section>
          <section id="co-branding">
            <?php include_once("co-branding.php"); ?>
          </section>
        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php # include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
