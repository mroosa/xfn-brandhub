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
              <img src="<?php print $dir; ?>images/design-typography-1.png" alt="Xfinity Brown and Standard comparison image">
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Our Typefaces</h2>
            <p>We maintain 2 typefaces to express our personality and meet accessibility requirements in product experiences:</p>
            <ul>
              <li><p><strong>Xfinity Brown</strong> is our primary brand font for use in marketing communications.</p></li>
              <li><p><strong>Xfinity Standard</strong> is our secondary brand font for functional use in long-form body, product, dotcom and legal.</p></li>
            </ul>
            <a class="button" href="#">Download Xfinity Brown</a>
            <a class="button" href="#">Download Xfinity Standard</a>
          </section>

          <section class="section">
            <h2 class="section-title">Licenses</h2>
            <p>Xfinity Brown licenses include usage in brand marketing tactics only.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-typography-2.png" alt="Xfinity Brown Rules. Use in print advertising, TV advertising, digital banner ads, social, email, retail marketing, and event/experiential marketing." />
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Usage</h2>
            <h3>Primary Type Styles</h3>
            <p><strong>Xfinity Brown</strong> is our primary and most expressive typeface and should be used for headlines and other elements deserving emphasis, like subheads and price points.</p>
            <p><strong>Xfinity Standard</strong> should be used for product and dotcom experiences, long-form body copy and functional legal copy to minimize length and legibility at small scales.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-typography-3-1.png" alt="Primary Headline: Large headlines are set in Xfinity Brown Bold, with 1.25x leading and -20 kerning. This is the default setting for headlines." />
              <img src="<?php print $dir; ?>images/design-typography-3-2.png" alt="Subhead: Subheads which require emphasis are set in Xfinity Brown Regular with 1.25x leading and -20 kerning. This is the default setting for subheads." />
              <img src="<?php print $dir; ?>images/design-typography-3-3.png" alt="Body: Body copy is set in Xfinity Standard Regular, 1.25 - 1.5x leading. Typical body copy should be two to four sentences in length. Body copy should be brief and concise." />
              <img src="<?php print $dir; ?>images/design-typography-3-4.png" alt="Small Body: Smaller body copy is set in Xfinity Standard Medium, auto leading." />
              <img src="<?php print $dir; ?>images/design-typography-3-5.png" alt="Legal: Legal copy is set in Xfinity Condensed Medium 8pt with auto leading. An alst option for legal copy is set in Helvetica Condensed Regular 8pt with auto leading." />
            </div>
            <div class="flex-column"></div>
            <h3>Secondary Type Styles</h3>
            <p>In addition, here are some best practices for a few commonly used elements and lock-ups in communications. Please note, voice command guidance is for usage in standalone X1 Voice Remote marketing tactics only – the product experience and user interface screens for marketing will continue to use Xfinity Standard Light.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-typography-4-1.png" alt="Package Deals: Package deals are set in all caps Xfinity Brown Bold -20 kerning." />
              <img src="<?php print $dir; ?>images/design-typography-4-2.png" alt="Price Point: Dollar and cents are set in Xfinity Brown Bold at 50% of the main pricing numbers with manually adjusted kerning." />
              <img src="<?php print $dir; ?>images/design-typography-4-3.png" alt="Voice Commands: Voice commands are set in Xfinity Brown Bold, white or black." />
              <img src="<?php print $dir; ?>images/design-typography-4-4.png" alt="CTA: Calls to action are set in Xfinity Brown Regular. The phone number and URL are set in Xfinity Brown Bold, using sentence case." />
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
