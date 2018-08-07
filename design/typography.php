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
            <h2 class="section-title" data-title="Xfinity Standard">Hi! I’m Xfinity Standard</h2>
            <p>Xfinity Standard is our proprietary typeface to be used across all Xfinity communications.</p>
            <p>It was designed to support a wide range of applications across digital and print experiences as it embodies simplicity yet still maintains a touch of personality and sophistication.</p>
            <a class="button" href="#">Download Xfinity Standard</a>
          </section>

          <section class="section">
            <h2 class="section-title">Type Scale &amp; Leading</h2>
            <p>Our brand follows a general typescale that meets both aesthetic impression and legibility requirements.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-typography-1-1.jpg" alt="PRIMARY HEADLINE: Medium headlines are set in Xfinity Standard Bold, with 1.25x leading. This is the default setting for headlines." />
              <img src="<?php print $dir; ?>images/design-typography-1-2.jpg" alt="SUBHEAD: Subheads which require emphasis are set in Xfinity Standard Bold with 1.5 - 1.75x leading and 0 points of tracking." />
              <img src="<?php print $dir; ?>images/design-typography-1-3.jpg" alt="BODY: Body copy is set in Xfinity Standard Regular, 1.25 - 1.5x leading. Typical body copy should be two to four sentences in length. Body copy should be brief and concise." />
              <img src="<?php print $dir; ?>images/design-typography-1-4.jpg" alt="SMALL HEADLINE: Small headlines are set in Xfinity Standard Bold with 1.25 - 1.5x leading." />
              <img src="<?php print $dir; ?>images/design-typography-1-5.jpg" alt="SMALL BODY: Smaller body copy is set in Xfinity Standard Medium, auto leading." />
              <img src="<?php print $dir; ?>images/design-typography-1-6.jpg" alt="LEGAL: Legal copy is set in Xfinity Standard Regular with auto leading." />
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
