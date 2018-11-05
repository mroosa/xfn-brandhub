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
            <div class="img width-75">
              <img src="<?php print $dir; ?>images/color/01.svg" alt="" />
            </div>
            <div class="flex-column flex-4col ah">
              <div><h3>White</h3><ul class="none"><li><strong>CMYK:</strong> 0/0/0/0</li><li><strong>RGB:</strong>: 255/255/255</li><li><strong>HEX:</strong>: #FFFFFF</li></ul></div>
              <div><h3>Black</h3><ul class="none"><li><strong>CMYK:</strong> 0/0/0/100</li><li><strong>RGB:</strong>: 0/0/0</li><li><strong>HEX:</strong>: #000000</li></ul></div>
              <div><h3>Xfinity Dark Gray</h3><ul class="none"><li>Pantone Dark Gray 11</li><li><strong>CMYK:</strong> 63/56/52/27</li><li><strong>RGB:</strong>: 90/90/92</li><li><strong>HEX:</strong>: #5A5A5C</li></ul></div>
              <div class="spacer no-mobile"></div>
              <div><h3>Xfinity Cool Gray 4</h3><ul class="none"><li>Pantone Cool Gray 4</li><li><strong>CMYK:</strong> 7/4/3/8</li><li><strong>RGB:</strong>: 233/237/239</li><li><strong>HEX:</strong>: #EBEEF0</li></ul></div>
              <div><h3>Xfinity Accent Red</h3><ul class="none"><li>Pantone 186 C</li><li><strong>CMYK:</strong> 0/100/100/10</li><li><strong>RGB:</strong>: 200/0/29</li><li><strong>HEX:</strong>: #C8100D</li></ul></div>
              <div><h3>Xfinity Action Blue</h3><ul class="none"><li>Pantone 299 C</li><li><strong>CMYK:</strong> 86/8/0/0</li><li><strong>RGB:</strong>: 43/156/216</li><li><strong>HEX:</strong>: #2B9CD8</li></ul></div>
              <div class="spacer no-mobile"></div>
            </div>
            <!-- <div class="flex-column flex-4col">
              <div class="img">
                <img src="<?php print $dir; ?>images/color/1-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/color/1-2.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/color/1-3.jpg" alt="" />
              </div>
              <div class="spacer no-mobile"></div>
              <div class="img">
                <img src="<?php print $dir; ?>images/color/1-4.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/color/1-5.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/color/1-6.jpg" alt="" />
              </div>
              <div class="spacer no-mobile"></div>
            </div> -->

            <a class="button" href="#">Download Color Palette</a>
          </section>

          <section class="section">
            <h2 class="section-title">Background &amp; Typography</h2>
            <p>Within our neutral palette, we have flexibility to use light or dark backgrounds – black, cool gray, dark gray or white may be used. Use contrasting text on light and dark backgrounds that is legible and easy to understand.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/color/02-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/color/02-2.jpg" alt="" />
              </div>
            </div>
            <p class="caption">Use contrasting text on light and dark backgrounds that is legible and easy to understand.</p>
          </section>

          <section class="section">
            <h2 class="section-title">A Pop of Red</h2>
            <p>We use Red selectively and strategically to express our personality and draw attention to important information, like price points, special offers and photography accents.</p>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/color/03-1.jpg" alt="" />
                <p class="caption">Pop of red draws attention to the price point.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/color/03-2.jpg" alt="" />
                <p class="caption">Pop of red in photography.</p>
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Action Blue</h2>
            <p>Blue should only be used in the digital space. It can be used for buttons or hyperlinks.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/color/04-1.jpg" alt="" />
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/color/04-2.jpg" alt="" />
              <p class="caption">Dark background, light text, action blue button.</p>
            </div>
            <div class="img">
              <img src="<?php print $dir; ?>images/color/05-1.jpg" alt="" />
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/color/05-2.jpg" alt="" />
              <p class="caption">Light background, dark text, action blue button.</p>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Color Misuses</h2>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/color/06-1.png" alt="" />
                <p class="caption">Do not use floods of red or blue as a background or over images.</p>
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/color/06-2.png" alt="" />
              </div>
            </div>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/color/07-1.png" alt="" />
                <p class="caption">Do not use red or blue for headlines or body copy.</p>
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/color/07-2.png" alt="" />
              </div>
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
