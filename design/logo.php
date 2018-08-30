<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 1; // Design
  $activeSub = 1;
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
          <h1>Logo</h1>
          <section class="section">
            <p>The Xfinity logo has been designed to further connect our brand to our parent company Comcast and our product experiences.  The combination of curved and sharp edges with rounded letterforms reinforces a more modern and distinctive aesthetic. It is our primary logo to be used in Xfinity communicationns and experiences.</p>
            <h3>Primary Use</h3>
            <p>Black and reverse white are the primary variants of the Xfinity wordmark to be used in Xfinity communications and product experiences. These help maintain legibility and allow the content to be the hero of the communication.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-logo-2.jpg" alt="" /></a>
            </div>
            <h3>Limited Use</h3>
            <p><strong>The Xfinity Red wordmark</strong> and reversed white out of Xfinity Red wordmark variant is reserved for high impact use in environmental applications e.g. in sports arena perimeter advertising.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-logo-3.jpg" alt="" />
            </div>
            <p><strong>The Xfinity Future of Awesome wordmark</strong> is reserved for strategic, high visibility communications where Future of Awesome has legibility and impact. It should not be used in communications where it lacks impact at small scale, next to legal copy, or in negative or legal communications that are not awesome.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-logo-4.jpg" alt="" />
            </div>
            <a class="button" href="#">Download Xfinity Logos</a>
          </section>

          <section class="section">
            <h2 class="section-title">Clearspace &amp; Minimum Size</h2>
            <p>To ensure prominence and legibility, all wordmark versions are surrounded by an area of minimum clear space 50% of the character height “n” which should remain free of any type or graphic elements.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-logo-5.jpg" alt="" />
            </div>
            <h3>Extreme Horizontal Use</h3>
            <p>In exceptional extreme horizontal applications cases; digital web banners, web navigation and sports perimeter advertising the clearspace may be reduced by half.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-logo-6.jpg" alt="" />
            </div>
            <h3>Minimum Size</h3>
            <p>The Xfinity wordmark should always be used at a size that is legible.</p>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-7-1.jpg" alt="" />
                <p class="caption">A total height of 0.25“, (7mm), or 18px on Desktop</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-7-2.jpg" alt="" />
                <p class="caption">A total height of 0.25“, (7mm), or 18px on Desktop</p>
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Wordmark Placement &amp; Usage</h2>
            <p>The Xfinity wordmark should always go in the branded space of a communication. Our framework offers left, right and centered justification for flexibility based on the layout and format.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-logo-8-500.jpg" alt="" />
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Logo in Use</h2>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-logo-8half.jpg" alt="" />
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Our End Card</h2>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-logo-9.jpg" alt="" />
              <p class="caption">CTA and “the future is awesome” end card</p>
            </div>
            <a class="button" href="#">Download End Card Guidelines</a>
          </section>

          <section class="section">
            <h2 class="section-title">Logo Misuses</h2>
            <div class="flex-column flex-3col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-1.png" alt="" />
                <p class="caption">Do not use the old wordmark</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-2.png" alt="" />
                <p class="caption">Do not use registration mark with new wordmark</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-3.png" alt="" />
                <p class="caption">Do not use the old red gradient wordmark</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-4.png" alt="" />
                <p class="caption">Do not add gradients to the wordmark</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-5.png" alt="" />
                <p class="caption">Do not use red wordmark on dark backgrounds</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-6.png" alt="" />
                <p class="caption">Do not alter the color of the wordmark</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-7.png" alt="" />
                <p class="caption">Do not manipulate the wordmark</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-8.png" alt="" />
                <p class="caption">Do not use the wordmark to replace text</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-9.png" alt="" />
                <p class="caption">Do not reposition wordmark or tagline</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-10.png" alt="" />
                <p class="caption">Do not use the wordmark expressively or have it interact with content</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-11.png" alt="" />
                <p class="caption">Do not create new lockups with services or features in text</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-logo-10-12.png" alt="" />
                <p class="caption">Do not lockup with other graphic elements</p>
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Comcast Logo / Limited Use</h2>
            <p>The Comcast wordmark is available for limited use in Xfinity communications where it has space, impact, and/or the communication creates a positive halo for the Comcast brand. A neutral Comcast wordmark is preferred. The Xfinity and Comcast wordmarks should always be in a 2:1 size relationship, with Xfinity being the larger.</p>
            <h3>Color & Size Relationship</h3>
            <p>A neutral version of the Comcast wordmark (grey or white) is the primary variation to be used in Xfinity communications.</p>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-logo-11.jpg" alt="" />
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
