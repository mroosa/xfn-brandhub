<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
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
          <h1>Design Principles</h1>
          <div class="section">
            <p>Our design principles are based in our brand purpose and are a lens to inspire and evaluate all creative.</p>
            <div class="flex-column flex-3col">
              <div>
                <h3>Bold</h3>
                <p>Our design is daring, dynamic and unexpected.</p>
              </div>
              <div>
                <h3>Human</h3>
                <p>Our design is authentic, unrestrained and connected.</p>
              </div>
              <div>
                <h3>Vibrant</h3>
                <p>Our design is optimistic, energetic and alive.</p>
              </div>
            </div>
            <p>Our design principles ensure we create distinctively Xfinity experiences that consistently reflect our brand across every interaction.</p>
            <div class="img img-w-caption">
              <a data-lightbox="ex-1" href="<?php print $dir; ?>images/design-overview-1.jpg"><img src="<?php print $dir; ?>images/design-overview-1.jpg" /></a>
            </div>
            <h3>Following the spirit of this site is essential to ensuring the Xfinity Brand is consistently represented across all touchpoints.</h3>
            <a class="button" href="#">Download all assets</a>
            <a class="button" href="../inspiration">View Inspiration Gallery</a>
          </div><!-- /.secton -->
        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
