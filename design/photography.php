<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 1; // Design
  $activeSub = 6;
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
          <h1>Photography</h1>
          <section class="section">
            <p>Our photography reinforces our design principles.</p>
            <div class="flex-column flex-3col">
              <div>
                <h3>Bold</h3>
                <ul>
                  <li>Simple &amp; focused</li>
                  <li>Unique, unexpected perspectives</li>
                </ul>
              </div>
              <div>
                <h3>Human</h3>
                <ul>
                  <li>Easygoing &amp; everyday</li>
                  <li>Caught in the moment, authentic</li>
                  <li>Inviting, curious, genuinely emotive</li>
                </ul>
              </div>
              <div>
                <h3>Vibrant</h3>
                <ul>
                  <li>Clean palette with vibrant pops of color</li>
                  <li>Naturally lit, unfiltered</li>
                </ul>
              </div>
            </div>
            <div class="img">
              <img src="<?php print $dir; ?>images/photography/01.jpg" alt="" />
            </div>
            <a class="button" href="#">View Photography Assets</a>
          </section>

          <section class="section">
            <h2 class="section-title">Strategic Use of Red</h2>
            <p>Deliberate and subtle pops of red for vibrancy in wardrobe or accessories can reinforce our brand color.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/09-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/09-2.jpg" alt="" />
              </div>
            </div>
            <p>Not red as only color, red backgrounds, too much red.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/10-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/10-2.jpg" alt="" />
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Best Practices</h2>

            <div class="flex-column flex-2col bottom">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/02-1.jpg" alt="" />
                <p class="caption">Easy going and everyday</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/02-2.jpg" alt="" />
                <p class="caption">Never exaggerated or over-the-top</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/03-1.jpg" alt="" />
                <p class="caption">Caught in the moment, authentic</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/03-2.jpg" alt="" />
                <p class="caption">Not posed or staged</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/04-1.jpg" alt="" />
                <p class="caption">Inviting, curious, genuinely emotive</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/04-2.jpg" alt="" />
                <p class="caption">Not mysterious or abstracted</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/05-1.jpg" alt="" />
                <p class="caption">Simple and focused</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/05-2.jpg" alt="" />
                <p class="caption">Not cluttered or intricate</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/06-1.jpg" alt="" />
                <p class="caption">Unique with unexpected perspectives</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/06-2.jpg" alt="" />
                <p class="caption">Not overly-styled, irrelevant or disambiguated</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/07-1.jpg" alt="" />
                <p class="caption">Naturally lit, unfiltered</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/07-2.jpg" alt="" />
                <p class="caption">Not filtered, overexposed, or oversaturated</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/08-1.jpg" alt="" />
                <p class="caption">A clean palette with vibrant pops of color</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/photography/08-2.jpg" alt="" />
                <p class="caption">Not dull, pastel, or treated</p>
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/11-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/12-1.jpg" alt="" />
              </div>
              <p class="caption">Not cluttered, over styled or stark. Not grand or expensive. Not dark, small or crowded. Not niche, dated, or trendy.</p>
            </div>
          </section>

          <!-- <section class="section">
            <h2 class="section-title">Talent</h2>
            <p>Embody the Curious Minded – able to convey broad range of emotion to spark curiousity.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/13-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/13-2.jpg" alt="" />
              </div>
            </div>
            <p>Represent range of target generational segments – established millenials, families with kids, boomers.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/14-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/14-2.jpg" alt="" />
              </div>
            </div>
            <p>Diverse. Represent a wide range of ethnicities and bakcgrounds. Real, authentic; not stock or model.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/15-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/photography/15-2.jpg" alt="" />
              </div>
            </div>
          </section> -->

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
