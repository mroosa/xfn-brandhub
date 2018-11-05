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
            <p>Designing with a grid allows for structure and visual balance. It also allows for consistency in brand creative. When creating print or digital layouts follow a grid, splitting the space into thirds or quarters.</p>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-system/01.jpg" alt="" />
              <p class="caption">Example of how to split grid in quarters or thirds for vertical and horizontal layouts.</p>
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
            <h2 class="section-title">Dynamic Angles in Use</h2>
            <p>Dynamic angles can be used in print and digital layouts. Angles can be created to hold copy, imagery and to create visual depth.</p>
            <p>Product focus layouts can be a product on its own or paired with a lifestyle image. When showing product imagery with lifestyle imagery, a dynamic angle should be used to highlight the product and break up the visual space.</p>
            <p>Assets created for promotional purposes should utilize dynamic angles to house promotional copy. When multiple offers are available, boxes can be utilized to highlight the promotional information. Light gray backgrounds with white offer cards are preferred for promotional print communications.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/design-system/04-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-system/04-2.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-system/04-3.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-system/04-4.jpg" alt="" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-system/04-5.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-system/04-6.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-system/04-7.jpg" alt="" />
              </div>
            </div>
            <h3>Lifestyle Focus</h3>
            <p>Dynamic angles are not necessary in all creative. When focusing more on the aspirational side of the brand, lifestyle imagery can be used to create impactful creative that is clean and neutral.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-system/05.jpg" alt="" />
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Dynamic Angle Misuses</h2>
            <p>Layouts should be clear and concise. Angles should be used deliberately and in ways that highlight our products and services.</p>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-system/06-1.png" alt="" />
                <p class="caption">Don’t use multiple random angles that slice through creative.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-system/06-2.png" alt="" />
                <p class="caption">Don’t create new angles.</p>
              </div>
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-system/07.png" alt="" />
              <p class="caption">Do not use rounded edges on angles, only use straight edges.</p>
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-system/08.png" alt="" />
              <p class="caption">Angles should go edge to edge and should not stop midway through creative. Do not create additional holding bars for wordmark. Angle should be used to create space to hold copy and wordmarks.</p>
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-system/09.png" alt="" />
              <p class="caption">Don’t use contrasting angle colors that repeat, angles should be a soft step in the creative.</p>
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
