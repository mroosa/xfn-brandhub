<?php
  include_once("_templates/_db/config.php");

  // Check user login or not
  if(!isset($_SESSION['uname'])){
    header('Location: login');
    exit;
  }

  $dir = "";
  $scriptList = ['subnav.js','video-min.js'];
  $styleList = ['video.css'];
  // $activeMain = 0; // Design
  $activeSub = 0;
  $bodyClassList = ['two-col'];
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
    <main id="top">
      <div class="inner">

      <?php if (file_exists("_templates/_nav/_subnav.php")): ?>
        <div class="sidebar black">
          <div id="subnav" class="sticky">
            <div class="logo vid-logo"><a href="#top">
                <svg id="svg-logo" x="0px" y="0px" viewBox="0 0 107.3 115" width="75px">
                  <g>
                    <path d="M51.2,38.6L79.9,0h-12c-5.4,0-8.8,1.9-11.7,5.7L41.1,26.1L26.4,5.7C23.5,1.9,20.1,0,14.7,0h-12l28.4,38.6L0,80.6h11.4
                  c5.4,0,8.8-1.9,11.7-5.7l18-23.9l42.2,58.3c2.7,3.8,6.3,5.7,11.7,5.7h12.3L51.2,38.6z" />
                  </g>
                </svg>
                <span class="ah">Back to top</span>
              </a>
            </div>

            <?php include_once("_templates/_nav/_subnav.php"); ?>
          </div><!-- /.sidebar -->
        </div><!-- /#subnav -->
      <?php endif; ?>
        <div class="content">

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
