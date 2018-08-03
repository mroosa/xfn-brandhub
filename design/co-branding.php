<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 1; // Design
  $activeSub = 8;
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
          <h1>Co-Branding</h1>
          <section class="section" id="top">
            <h2 class="section-title">Overview</h2>
            <p>Xfinity supports a variety of partners and experiences to reinforce our brand purpose and passions.</p>
            <p>For key partnerships, please follow best practices for co-branded lock ups, ensuring appropriate distance and 1:1 size relationship between wordmarks.</p>
            <p>For relationships where Xfinity is endorsing a partnership or experience, you may use a descriptive approach using the Xfinity wordmark. While endorsement line and sizing may vary, please ensure the Xfinity wordmark is legible and has impact.</p>
          </section>

          <section class="section">
            <h2 class="section-title">Partnership Lock-ups</h2>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-cobranding-1.jpg" alt="" />
              <p class="caption">Co-branding lockups will always be horizontal. Co-brand wordmarks should be the character height of the “n” in the Xfinity wordmark.</p>
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-cobranding-2.jpg" alt="" />
              <p class="caption">In certain circumstances (i.e.: circular wordmarks, etc.)  it can be sized larger, but should not exceed the height of the “xf” in the Xfinity wordmark.</p>
            </div>
            <p>A divider rule is placed between the wordmarks and should not exceed the height of the “xf” in the Xfinity wordmark. Spacing between the wordmarks and divider should be 50% of the character height “n”.</p>
            <p>To ensure prominence and legibility, co-branding lock-ups should be surrounded by an area of minimum clear space 50% of the character height “n” which should remain free of any type or graphic elements.</p>
          </section>

          <section class="section">
            <h2 class="section-title">Descriptive Relationships</h2>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-cobranding-3.jpg" alt="" />
            </div>
            <p>Text placed next to the wordmark should always be sentence case. To determine text size, lowercase characters in text should be 25% the character height of “n” in the Xfinity wordmark. Space between the text and wordmark should be 25% the character height of “n” in the Xfinity wordmark. Please contact us for appropriate copy to use in these instances.</p>
          </section>

          <section class="section">
            <h2 class="section-title">Partner Lock-up Misuses</h2>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-cobranding-4-1.jpg" alt="" />
                <p class="caption">Do not us Xfinity Future of Awesome wordmark with partner logos.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-cobranding-4-2.jpg" alt="" />
                <p class="caption">Do not create new logos with wordmark and partner logo.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-cobranding-5.jpg" alt="" />
                <p class="caption">Do not use sub-brands with partner logo lockups.</p>
              </div>
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
