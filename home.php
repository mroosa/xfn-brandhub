<?php
  include_once("_templates/_db/config.php");

  // Check user login or not
  if(!isset($_SESSION['uname'])){
    header('Location: login');
  }

  // logout
  if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login');
  }

  $dir = "";
  $scriptList = ['subnav.js','masonry.pkgd.min.js','imagesloaded.pkgd.min.js','featherlight.js','inspiration-min.js','video-min.js'];
  $styleList = ['inspiration.css','featherlight.css','video.css'];
  // $activeMain = 0; // Design
  $activeSub = 0;
  $bodyClassList = ['two-col'];
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>

    <section id="introduction" data-option="1" data-bg="black">
      <?php include_once("design/overview.php"); ?>
      <a class="alt-swap" href="#">•</a>
    </section>
    <main id="top">
      <form id="form-logout" method='post' action="">
        <input type="submit" value="Logout" name="but_logout">
      </form>
      <div class="inner">

      <?php if (file_exists("_templates/_nav/_subnav.php")): ?>
        <div class="sidebar black">
          <div id="subnav">
            <div class="logo vid-logo"><a href="#top">
              <video nocontrols muted poster="images/logo-poster.png">
                <source src="video/logo.mp4" type="video/mp4">
                <svg id="svg-logo" x="0px" y="0px" viewBox="0 0 107.3 115">
                  <g>
                    <path d="M51.2,38.6L79.9,0h-12c-5.4,0-8.8,1.9-11.7,5.7L41.1,26.1L26.4,5.7C23.5,1.9,20.1,0,14.7,0h-12l28.4,38.6L0,80.6h11.4
              		c5.4,0,8.8-1.9,11.7-5.7l18-23.9l42.2,58.3c2.7,3.8,6.3,5.7,11.7,5.7h12.3L51.2,38.6z" />
                  </g>
                </svg>
              </video>
            </a></div><!-- /.logo -->
            <?php include_once("_templates/_nav/_subnav.php"); ?>
          </div><!-- /.sidebar -->
        </div><!-- /#subnav -->
      <?php endif; ?>

        <div class="content">

          <section id="logo" class="with-tabs">
            <div class="col-wrap">
            <?php include_once("design/logo.php"); ?>
            </div><!-- /.col-wrap -->
          </section>

          <section id="brand-symbol" class="with-tabs">
            <div class="col-wrap">
            <?php include_once("design/brand-symbol.php"); ?>
            </div><!-- /.col-wrap -->
          </section>

          <section id="sub-brands" class="with-tabs">
            <div class="col-wrap">
            <?php include_once("design/sub-brands.php"); ?>
            </div><!-- /.col-wrap -->
          </section>

          <section id="color" class="with-tabs">
            <div class="col-wrap">
            <?php include_once("design/color.php"); ?>
            </div><!-- /.col-wrap -->
          </section>

          <section id="typography" class="with-tabs">
            <div class="col-wrap">
            <?php include_once("design/typography.php"); ?>
            </div><!-- /.col-wrap -->
          </section>

          <!-- <section id="voice-and-tone">
            <div class="col-wrap">
            <?php #include_once("design/voice-and-tone.php"); ?>
          </div>
          </section> -->

          <section id="photography" class="with-tabs">
            <div class="col-wrap">
            <?php include_once("design/photography.php"); ?>
            </div><!-- /.col-wrap -->
          </section>

          <section id="secondary-graphics" class="with-tabs">
            <div class="col-wrap">
            <?php include_once("design/secondary-graphics.php"); ?>
            </div><!-- /.col-wrap -->
          </section>

          <section id="design-system" class="with-tabs">
            <div class="col-wrap">
            <?php include_once("design/design-system.php"); ?>
            </div><!-- /.col-wrap -->
          </section>

          <section id="co-branding" class="with-tabs">
            <div class="col-wrap">
            <?php include_once("design/co-branding.php"); ?>
            </div><!-- /.col-wrap -->
          </section>

          <section id="creative-examples">
            <div class="col-wrap">
            <?php include_once("design/inspiration.php"); ?>
            </div>
          </section>

          <section id="downloads">
            <div class="col-wrap">
            <?php include_once("design/downloads.php"); ?>
            </div>
          </section>

          <section id="contact-resources">
            <div class="col-wrap">
            <?php include_once("design/contact.php"); ?>
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
