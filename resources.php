<?php
$scriptList = ['downloads.js'];
$styleList = ['downloads.css'];
$activeTop = 3;
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="one-col downloads">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main>
      <div class="inner">
        <div class="content">
          <h1>Resources</h1>
          <section class="section download-gallery">
            <div class="download" id="xfinity-logo">
              <h3>Xfinity Logo</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/xfinity-logo-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
              <div class="download-contents">
                <div class="download-links">
                  <a class="button" data-action="all" href="#">Select All</a>
                  <a class="button" data-action="none" href="#">Clear All</a>
                </div>
                <ul>
                  <li><img src="<?php print $dir; ?>images/downloads/xfinity-logo-1.png" alt="" /><input type="checkbox" checked value="1"></li>
                  <li><img src="<?php print $dir; ?>images/downloads/xfinity-logo-2.png" alt="" /><input type="checkbox" checked value="2"></li>
                  <li><img src="<?php print $dir; ?>images/downloads/xfinity-logo-3.png" alt="" /><input type="checkbox" checked value="3"></li>
                  <li><img src="<?php print $dir; ?>images/downloads/xfinity-logo-4.png" alt="" /><input type="checkbox" checked value="4"></li>
                  <li><img src="<?php print $dir; ?>images/downloads/xfinity-logo-5.png" alt="" /><input type="checkbox" checked value="5"></li>
                  <li><img src="<?php print $dir; ?>images/downloads/xfinity-logo-6.png" alt="" /><input type="checkbox" checked value="6"></li>
                  <li><img src="<?php print $dir; ?>images/downloads/xfinity-logo-7.png" alt="" /><input type="checkbox" checked value="7"></li>
                  <li><img src="<?php print $dir; ?>images/downloads/xfinity-logo-8.png" alt="" /><input type="checkbox" checked value="8"></li>
                </ul>
                <div class="download-links">
                  <a class="button" data-action="download" href="#">Download Selected</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="comcast-logo">
              <h3>Comcast Logo</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/comcast-logo-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
              <div class="download-contents">
                <div class="download-links">
                  <a class="button" data-action="all" href="#">Select All</a>
                  <a class="button" data-action="none" href="#">Clear All</a>
                </div>
                <ul>
                  <li><img src="<?php print $dir; ?>images/downloads/xfinity-logo-1.png" alt="" /><input type="checkbox" checked value="1"></li>
                </ul>
                <div class="download-links">
                  <a class="button" data-action="download" href="#">Download Selected</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="sub-brands">
              <h3>Sub Brands</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/sub-brands-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="color">
              <h3>Color</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/color-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="typography">
              <h3>Typography</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/typography-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="photography">
              <h3>Photography</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/photography-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="xfinity-devices">
              <h3>Xfinity Devices</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/xfinity-devices-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="generic-devices">
              <h3>Generic Devices</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/generic-devices-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="mobile-app-icons">
              <h3>Mobile App Icons</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/mobile-app-icons-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="icons">
              <h3>Icons</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/icons-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="end-card">
              <h3>End Card</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/end-card-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
            </div><!-- /.download -->

            <div class="download" id="powerpoint">
              <h3>Powerpoint Templates</h3>
              <div class="download-intro">
                <div class="flex-col flex-col-1">
                  <img src="<?php print $dir; ?>images/downloads/powerpoint-intro.png" alt="" />
                </div>
                <div class="flex-col flex-col-2">
                  <a class="button" data-action="view" href="#">Choose Items</a>
                  <a class="button" href="#">Download All</a>
                </div>
              </div>
            </div><!-- /.download -->

          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
