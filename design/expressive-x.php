<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 1; // Design
  $activeSub = 2;
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
          <h1>Expressive X</h1>
          <section class="section" id="top">
            <h2 class="section-title">Introduction</h2>
            <div class="flex-column flex-2col">
              <div>
                <p>Our X is the most differentiating and distinctive feature of our brand name and identity, it’s what makes us, us. </p>
                <p>It’s a dynamic, ownable brand storytelling device that visually represents our brand purpose – fueling discovery for everyday enjoyment – through passions, partnerships, and differentiating product experience.</p>
              </div>
              <div class="img">
                <img style="width: 220px; margin: 0 auto;" src="<?php print $dir; ?>images/design-expressive-x.png" alt-"" />
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Best Practices</h2>
            <div class="flex-column flex-2col">
              <div>
                <h3>The X should be used for:</h3>
                <ul>
                  <li>Big brand moments</li>
                  <li>Differentiating innovations and product launches (e.g., xFi Pods, music on X1, “Storefront”)</li>
                  <li>Exclusive partnerships/sponsorships that differentiate the brand (e.g., NASCAR, Olympics)</li>
                  <li>Tentpole events and experiences that align with key passions (e.g., Oscars, AMAs)</li>
                </ul>
              </div>
              <div>
                <h3>The X should not be used for:</h3>
                <ul>
                  <li>BAU marketing and customer communications</li>
                  <li>Sales/promos</li>
                  <li>Competitive</li>
                  <li>Transactional, legal or support communications</li>
                  <li>Political, religious or otherwise controversial or overly niche subject matter</li>
                </ul>
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Rules of the X</h2>
            <h3>Completed Expressive X</h3>
            <p>The final expressive X art will bring together all important elements - subject, background and X guidelines. Go through the carousel to see the rules of the X.</p>
            <h1 style="color: #ff00ff;">Gallery</h1>
            <p>Images 2-1 » 2-12</p>
          </section>

          <section class="section">
            <h2 class="section-title">Building the X</h2>
            <p>Here's a simple list of steps to help you create consistent expressive X artwork.</p>
            <h1 style="color: #ff00ff;">Gallery</h1>
            <p>Images 3-1 » 3-8</p>
          </section>

          <section class="section">
            <h2 class="section-title">The X in Use</h2>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-4-1.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-4-2.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-4-3.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-4-4.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-4-5.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-4-6.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-4-7.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-4-8.jpg" alt-"" />
              </div>
          </section>

          <section class="section">
            <h2 class="section-title">Creative Discovery</h2>
            <p>The Expressive X allows for creative exploration. This approach should be used sparingly or for special circumstances.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-5-1.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-5-2.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-5-3.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-5-4.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-5-5.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-5-6.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-5-7.jpg" alt-"" />
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">X Misuses</h2>
            <p>The Expressive X allows for creative exploration. This approach should be used sparingly or for special circumstances.</p>
            <div class="flex-column flex-3col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-1.jpg" alt-"" />
                <p class="caption">Do not make the X high contrast against the backgound. Also, make sure there’s enough contrast between the X and the subject.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-2.jpg" alt-"" />
                <p class="caption">Do not make the X loud colors that make it shout.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-3.jpg" alt-"" />
                <p class="caption">Do not make the X dimensional –  through 3D, bevels or embossing.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-4.jpg" alt-"" />
                <p class="caption">Do not make the X appear as a foreground object.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-5.jpg" alt-"" />
                <p class="caption">Do not extend, manipulate or alter the official X brand symbol.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-6.jpg" alt-"" />
                <p class="caption">Make sure the subject’s movement propels them out of the X, not into it.</p>
              </div>
              <div class="img img-w-caption extend">
                <img src="<?php print $dir; ?>images/design-x-6-7.jpg" alt-"" />
                <p class="caption">Do not place words or logos in the X.</p>
              </div>
              <div class="img img-w-caption extend">
                <img src="<?php print $dir; ?>images/design-x-6-8.jpg" alt-"" />
                <p class="caption">Do not create an Expressive X within the full Xfinity word mark.</p>
              </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
