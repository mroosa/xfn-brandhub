<?php
  $dir = "";
  $scriptList = ['subnav.js','gallery.js'];
  $styleList = ['gallery.css'];
  // $activeMain = 0; // Design
  $activeSub = 0;
  $bodyClassList = ['two-col'];
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
    <!-- <a id="skip" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%) rotate(-90deg) scale(.5);z-index: 999;" href="#logo">
      <svg width="19.518" height="35.038" viewBox="0 0 19.518 35.038">
        <path d="M-2569-22469.783l14.69-14.691,14.691,14.691" transform="translate(22486.473 -2536.79) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
      </svg>
    </a> -->

    <!-- <section id="brand-story">
      <?php #include_once("overview.php"); ?>
    </section> -->
    <main>
      <div class="inner">

      <?php if (file_exists("_templates/_nav/_subnav.php")): ?>
        <div class="sidebar black">
          <div id="subnav">
            <div class="logo"><a href="#logo">
              <svg id="svg-logo" x="0px" y="0px" viewBox="0 0 107.3 115" style="enable-background:new 0 0 107.3 115;\">
                <g>
                  <path d="M51.2,38.6L79.9,0h-12c-5.4,0-8.8,1.9-11.7,5.7L41.1,26.1L26.4,5.7C23.5,1.9,20.1,0,14.7,0h-12l28.4,38.6L0,80.6h11.4
            		c5.4,0,8.8-1.9,11.7-5.7l18-23.9l42.2,58.3c2.7,3.8,6.3,5.7,11.7,5.7h12.3L51.2,38.6z" />
                </g>
              </svg>
            </a></div><!-- /.logo -->
            <?php include_once("_templates/_nav/_subnav.php"); ?>
          </div><!-- /.sidebar -->
        </div><!-- /#subnav -->
      <?php endif; ?>

        <div class="content">
          <section id="logo" class="with-tabs active">
            <?php include_once("design/logo.php"); ?>
          </section>
          <section id="color">
            <?php include_once("design/color.php"); ?>
          </section>
          <section id="typography" class="with-tabs">
            <?php include_once("design/typography.php"); ?>
          </section>
          <section id="photography">
            <?php include_once("design/photography.php"); ?>
          </section>
          <section id="brand-symbol" class="with-tabs">
            <?php include_once("design/brand-symbol.php"); ?>
          </section>
          <section id="sub-brands" class="with-tabs">
            <?php include_once("design/sub-brands.php"); ?>
          </section>
          <section id="secondary-graphics">
            <?php include_once("design/secondary-graphics.php"); ?>
          </section>
          <section id="design-system" class="with-tabs">
            <?php include_once("design/design-system.php"); ?>
          </section>
          <section id="co-branding" class="with-tabs">
            <?php include_once("design/co-branding.php"); ?>
          </section>
          <!-- <section id="inspiration-gallery">
            <?php #include_once("../inspiration.php"); ?>
          </section> -->
          <!-- <section id="downloads">
            <?php #include_once("design/downloads.php"); ?>
          </section> -->
        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
