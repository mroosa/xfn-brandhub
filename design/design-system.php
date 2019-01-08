<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 1; // Design
  $activeSub = 7;
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
          <h1>Design System</h1>

          <section class="section">
            <h2 class="section-title">Layouts</h2>
            <p>layouts should combine key brand elements with creative ideas to thoughtfully tell our brand and product stories.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-system/01.png" alt="" />
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Using a Grid</h2>
            <p>Each layout should start with a grid. Designing with a grid allows for structure and visual balance, and determines the size and placement for your brand assets and typography. Dividing layouts by either thirds or quarters is recommended for optimal organization and simplicity.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-system/02.png" alt="" />
            </div>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-system/03.png" alt="" />
            </div>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-system/04.png" alt="" />
            </div>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-system/05.png" alt="" />
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Dynamic Angles</h2>
            <p>Dynamic angles can be used to divide up layouts and organize content but  are not mandatory in communications and should be used purposefully in layouts.  Overuse of dynamic angles will add unnecessary complexity and dilute the impact they have across our brand communications.</p>
            <div class="flex-column flex-3col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-system/02-1.jpg" alt="" />
                <p class="caption">Angle cutting through 2/3 of page at 10°</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-system/02-2.jpg" alt="" />
                <p class="caption">Angle cutting through 1/2 of page at 170°</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-system/02-3.jpg" alt="" />
                <p class="caption">Angle cutting corner to corner</p>
              </div>
            </div>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-system/03.jpg" alt="" />
                <p class="caption">Angle cutting through 1/2 of page at 36.5°</p>
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Layout Best Practices</h2>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/design-system/06.png" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-system/07.png" alt="" />
              </div>
            </div>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-system/08.png" alt="" />
            </div>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-system/09.png" alt="" />
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
