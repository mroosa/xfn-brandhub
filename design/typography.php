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
            <p>We maintain 2 typefaces to express our personality and meet accessibility requirements in product experiences:</p>
            <div class="img img-w-caption width-75">
              <img src="<?php print $dir; ?>images/typography/01.svg" alt="Xfinity Brown">
              <p class="caption"><strong>Xfinity Brown</strong> is our primary brand font for use in marketing communications.<br><br></p>
            </div>

            <div class="img img-w-caption width-75">
              <img src="<?php print $dir; ?>images/typography/02.svg" alt="Xfinity Standard">
              <p class="caption"><strong>Xfinity Standard</strong> is our secondary brand font for functional use in long-form body, product, dotcom and legal.</p>
            </div>
            <a class="button" href="#">Download Xfinity Brown</a>
            <a class="button" href="#">Download Xfinity Standard</a>
          </section>

          <section class="section">
            <h2 class="section-title">Licenses</h2>
            <p>Xfinity Brown licenses include usage in brand marketing tactics only.</p>
            <div class="flex-column flex-2col">
              <div class="white-bg">
                <h3>Do use Xfinity Brown in:</h3>
                <ul>
                  <li>Print advertising</li>
                  <li>TV advertising</li>
                  <li>Digital banner ads</li>
                  <li>Social</li>
                  <li>Email</li>
                  <li>Retail marketing</li>
                  <li>Event/experiential marketing</li>
                </ul>
              </div>
              <div class="white-bg">
                <h3><u>Do not</u> use Xfinity Brown in:</h3>
                <ul>
                  <li>Product (mobile apps, X1, etc)</li>
                  <li>Dotcom (e.g., xfinity.com)</li>
                  <li>Commercial merchandising (e.g., packaging)</li>
                  <li>Hardware</li>
                </ul>
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Usage</h2>
            <h3>Primary Type Styles</h3>
            <p><strong>Xfinity Brown</strong> is our primary and most expressive typeface and should be used for headlines and other elements deserving emphasis, like subheads and price points.</p>
            <p><strong>Xfinity Standard</strong> should be used for product and dotcom experiences, long-form body copy and functional legal copy to minimize length and legibility at small scales.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/typography/03-1.png" alt="Primary Headline: Large headlines are set in Xfinity Brown Bold, with 1.25x leading and -20 kerning. This is the default setting for headlines." />
              <img src="<?php print $dir; ?>images/typography/03-2.png" alt="Subhead: Subheads which require emphasis are set in Xfinity Brown Regular with 1.25x leading and -20 kerning. This is the default setting for subheads." />
              <img src="<?php print $dir; ?>images/typography/03-3.png" alt="Body: Body copy is set in Xfinity Standard Regular, 1.25 - 1.5x leading. Typical body copy should be two to four sentences in length. Body copy should be brief and concise." />
              <img src="<?php print $dir; ?>images/typography/03-4.png" alt="Small Body: Smaller body copy is set in Xfinity Standard Medium, auto leading." />
              <img src="<?php print $dir; ?>images/typography/03-5.png" alt="Legal: Legal copy is set in Xfinity Condensed Medium 8pt with auto leading. An alst option for legal copy is set in Helvetica Condensed Regular 8pt with auto leading." />
            </div>
            <h3>Secondary Type Styles</h3>
            <p>In addition, here are some best practices for a few commonly used elements and lock-ups in communications. Please note, voice command guidance is for usage in standalone X1 Voice Remote marketing tactics only – the product experience and user interface screens for marketing will continue to use Xfinity Standard Light.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/typography/04-1.png" alt="Package Deals: Package deals are set in all caps Xfinity Brown Bold -20 kerning." />
              <img src="<?php print $dir; ?>images/typography/04-2.png" alt="Price Point: Dollar and cents are set in Xfinity Brown Bold at 50% of the main pricing numbers with manually adjusted kerning." />
              <img src="<?php print $dir; ?>images/typography/04-3.png" alt="Voice Commands: Voice commands are set in Xfinity Brown Bold, white or black." />
              <img src="<?php print $dir; ?>images/typography/04-4.png" alt="CTA: Calls to action are set in Xfinity Brown Regular. The phone number and URL are set in Xfinity Brown Bold, using sentence case." />
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
