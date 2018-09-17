<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 1; // Design
  $activeSub = 4;
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
          <h1>Color</h1>
          <section class="section">
            <p>Xfinity embraces a neutral color palette, which allows our products and photography to shine. To stay true to our roots, we’ll occasionally use a pop of red to show our personality and highlight important information.</p>
            <div class="flex-column flex-4col">
              <div class="img">
                <img src="<?php print $dir; ?>images/design-color-1-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-color-1-2.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-color-1-3.jpg" alt="" />
              </div>
              <div class="spacer no-mobile"></div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-color-1-4.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-color-1-5.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-color-1-6.jpg" alt="" />
              </div>
              <div class="spacer no-mobile"></div>
            </div>

            <a class="button" href="#">Download Color Palette</a>
          </section>

          <section class="section">
            <h2 class="section-title">Background &amp; Typography</h2>
            <p>Within our neutral palette, we have flexibility to use light or dark backgrounds – black, cool gray, dark gray or white may be used. Use contrasting text on light and dark backgrounds that is legible and easy to understand.</p>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-color-2-1.jpg" alt="" />
                <p class="caption">Use contrasting text on light and dark backgrounds that is legible and easy to understand.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-color-2-2.jpg" alt="" />
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">A Pop of Red</h2>
            <p>We use Red selectively and strategically to express our personality and draw attention to important information, like price points, special offers and photography accents.</p>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-color-3-1.jpg" alt="" />
                <p class="caption">Pop of red draws attention to the price point.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-color-3-2.jpg" alt="" />
                <p class="caption">Pop of red in photography.</p>
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Action Blue</h2>
            <p>Blue should only be used in the digital space. It can be used for buttons or hyperlinks.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-color-4-1.jpg" alt="" />
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-color-4-2.jpg" alt="" />
              <p class="caption">Dark background, light text, action blue button.</p>
            </div>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-color-5-1.jpg" alt="" />
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-color-5-2.jpg" alt="" />
              <p class="caption">Light background, dark text, action blue button.</p>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Color Misuses</h2>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-color-6-1.png" alt="" />
                <p class="caption">Do not use floods of red or blue as a background or over images.</p>
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-color-6-2.png" alt="" />
              </div>
            </div>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-color-7-1.png" alt="" />
                <p class="caption">Do not use red or blue for headlines or body copy.</p>
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-color-7-2.png" alt="" />
              </div>
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
