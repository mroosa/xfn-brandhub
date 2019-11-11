<?php
  $dir = "../";
  $scriptList = ['subnav.js','gallery.js'];
  $styleList = ['gallery.css'];
  $activeMain = 0; // Design
  $activeSub = 0;
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="two-col design">
  <div class="contain">
    <?php #include_once($dir . "_templates/_structure/header.php"); ?>
    <section id="brand-story">
      <?php include_once("overview.php"); ?>
    </section>
    <main>
      <div class="inner">
        <?php
          if (file_exists("_subnav.php")):
            print "<div id=\"subnav\">\t\n<div class=\"sidebar\">";
            print "\t\t<div class=\"logo\">\n";
            print "<svg id=\"svg-logo\" x=\"0px\" y=\"0px\" viewBox=\"0 0 107.3 115\" style=\"enable-background:new 0 0 107.3 115;\">\n<g><path d=\"M51.2,38.6L79.9,0h-12c-5.4,0-8.8,1.9-11.7,5.7L41.1,26.1L26.4,5.7C23.5,1.9,20.1,0,14.7,0h-12l28.4,38.6L0,80.6h11.4
            		c5.4,0,8.8-1.9,11.7-5.7l18-23.9l42.2,58.3c2.7,3.8,6.3,5.7,11.7,5.7h12.3L51.2,38.6z\"/></g>\n</svg>\n";
            print "\t\t</div>\n";
            include_once("_subnav.php");
            print "\t</div>\n</div>\n";
          endif;
        ?>
        <div class="content">
          <section id="logo" class="with-tabs">
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
          <!-- <section id="inspiration-gallery">
            <?php #include_once("../inspiration.php"); ?>
          </section>
          <section id="downloads">
            <?php #include_once("../resources.php"); ?>
          </section> -->
        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php # include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
