<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 1; // Design
  $activeSub = 5;
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
          <h1>Typography</h1>
          <section class="section">
            <div class="img">
              <img src="<?php print $dir; ?>images/typography-1.png" alt="Xfinity Brown and Standard comparison image">
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Our Typefaces</h2>
            <p>We maintain 2 typefaces to express our personality and meet accessibility requirements in product experiences:</p>
            <ul>
              <li><p><strong>Xfinity Brown</strong> is our primary brand font for use in marketing communications.</p></li>
              <li><p><strong>Xfinity Standard</strong> is our secondary brand font for functional use in long-form body, product, dotcom and legal.</p></li>
            </ul>
            <div class="flex-column flex-2col">
              <div><a class="button" href="#">Download Xfinity Brown</a></div>
              <div><a class="button" href="#">Download Xfinity Standard</a></div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Licenses</h2>
            <p>Xfinity Brown licenses include usage in brand marketing tactics only.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/typography-2.png" alt="Xfinity Brown Rules. Use in print advertising, TV advertising, digital banner ads, social, email, retail marketing, and event/experiential marketing." />
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Usage</h2>
            <h3>Primary Type Styles</h3>
            <p><strong>Xfinity Brown</strong> is our primary and most expressive typeface and should be used for headlines and other elements deserving emphasis, like subheads and price points.</p>
            <p><strong>Xfinity Standard</strong> should be used for product and dotcom experiences, long-form body copy and functional legal copy to minimize length and legibility at small scales.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/typography-3.png" alt="Xfinity Brown Rules graphic." />
            </div>
            <div class="flex-column"></div>
            <h3>Secondary Type Styles</h3>
            <p>In addition, here are some best practices for a few commonly used elements and lock-ups in communications. Please note, voice command guidance is for usage in standalone X1 Voice Remote marketing tactics only – the product experience and user interface screens for marketing will continue to use Xfinity Standard Light.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/typography-4.png" alt="Xfinity Brown Rules graphic." />
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
