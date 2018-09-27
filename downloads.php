<?php
$scriptList = ['downloads.js'];
$styleList = ['downloads.css'];
$activeTop = 3;
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="one-col download">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main>
      <div class="inner">
        <div class="content">
          <h1>Download Library</h1>
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
                <ul>
                  <li><img src="<?php print $dir; ?>images/downloads/xfinity-logo-1.png" alt="" /><input type="checkbox" checked value="1"></li>
                </ul>
                <div class="download-links">
                  <a class="button" data-action="all" href="#">Select All</a>
                  <a class="button" data-action="none" href="#">Clear All</a>
                  <a class="button" data-action="download" href="#">Download Selected</a>
                </div>
              </div>
            </div><!-- /.download -->
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
