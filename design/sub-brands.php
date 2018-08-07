<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 1; // Design
  $activeSub = 3;
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
          <h1>Sub-brands</h1>
          <section class="section">
            <p>Our brand hierarchy reflects our strategic priorities, with design treatments reserved for flagship experiences.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-subbrand-1.png" alt="" />
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Logos</h2>
            <p>Our system of sub-brands focus on these five product experiences: Xfinity X1, Xfinity xFi, Xfinity Home, Xfinity Stream, and Xfinity Mobile. The sub-brand logos are available in black and white, with black used on white or light backgrounds and white used on black or dark backgrounds.</p>
            <p>The primary use for Xfinity sub-brand logos are for dedicated product experiences, such as apps.  In the majority of communications, the masterbrand Xfinity logo should be used.  For questions, please contact the Brand team. </p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-subbrand-2.jpg" alt="" />
            </div>
            <a class="button" href="#">Download Xfinity Sub-brand Logos</a>
          </section>

          <section class="section">
            <h2 class="section-title">Clearspace &amp; Minimum Size</h2>
            <p>To ensure prominence and legibility, all sub-brand versions are surrounded by an area of minimum clear space 50% of the character height “n” which should remain free of any type or graphic elements.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-subbrand-3.png" alt="" />
            </div>
            <h3>Extreme Horizontal Use</h3>
            <p>In exceptional extreme horizontal applications cases; digital web banners, web navigation and sports perimeter advertising the clearspace may be reduced by half.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-subbrand-4.png" alt="" />
            </div>
            <h3>Minimum Size</h3>
            <p>The sub-brand wordmark should always be used at a size that is legible.</p>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-subbrand-5.jpg" alt="" />
              <p class="caption">A total height of 0.25“, (7mm), or 18px on Desktop</p>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Sub-brand Misuses</h2>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-6-1.png" alt="" />
                <p class="caption">Do not use both the Xfinity wordmark and sub-brand wordmark in single product communications.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-6-2.png" alt="" />
                <p class="caption">Do not use the sub-brand wordmark to replace text.</p>
              </div>
            </div>
            <div class="flex-column flex-3col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-1.png" alt="" />
                <p class="caption">Sub-brand wordmark retired, use new sub-brand wordmark</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-2.png" alt="" />
                <p class="caption">Sub-brand wordmark retired, use new sub-brand wordmark</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-3.png" alt="" />
                <p class="caption">Sub-brand wordmark retired, use new sub-brand wordmark</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-4.png" alt="" />
                <p class="caption">Sub-brand wordmark retired, use new sub-brand wordmark </p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-5.png" alt="" />
                <p class="caption">Sub-brand wordmark retired, use new sub-brand wordmark </p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-6.png" alt="" />
                <p class="caption">Do not use sub-brand wordmarks with feature names</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-7.png" alt="" />
                <p class="caption">Do not color or recolor sub-brand wordmarks</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-8.png" alt="" />
                <p class="caption">Do not create lock-up “the future of awesome” with sub-brand wordmarks to replace text</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-9.png" alt="" />
                <p class="caption">Do not use sub-brand wordmarks with product names</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-10.png" alt="" />
                <p class="caption">Do not create taglines with sub-brand wordmarks</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-11.png" alt="" />
                <p class="caption">Do not create new sub-brands</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-subbrand-7-12.png" alt="" />
                <p class="caption">Do not use sub-brand wordmarks to create third-party lock-ups</p>
              </div>
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
