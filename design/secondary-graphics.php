<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 1; // Design
  $activeSub = 9;
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
          <h1>Secondary Graphics</h1>
          <section>
            <p>Our secondary graphic system includes key programs, channels, and offerings that support the Xfinity Masterbrand within our brand hierarchy.</p>
          </section>

          <section class="section">
            <h2 class="section-title">Xfinity Customer Commitment</h2>
            <p>Our Customer Commitment seal represents our commitment  to making our customer experience our best product, and should be used on all tactics that reference our customer guarantee or a customer experience innovation related to a key pillar.</p>
            <div class="flex-column">
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1.png" alt="" />
              </div>
            </div>
            <a class="button" href="#">Download</a>
          </section>

          <section class="section">
            <h2 class="section-title">Speed Test Flag</h2>
            <p>Xfinity is the best internet in America, according to speedtest.net. Use this flag when using that claim if design and layout allow.</p>
            <div class="flex-column flex-4col">
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-3.png" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-4.png" alt="" />
              </div>
              <div></div>
              <div></div>
            </div>
            <a class="button" href="#">Download</a>
          </section>

          <section class="section">
            <h2 class="section-title">X1 Channels and Experiences</h2>
            <p>Special design treatments have been developed for the Xfinity X1 interface. They should only be used within the X1 experience, and never in marketing collateral or communications.</p>
            <div class="flex-column">
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-3.png" alt="" />
              </div>
            </div>
            <a class="button" href="#">Download</a>
          </section>

          <section class="section">
            <h2 class="section-title">Xfinity on Campus</h2>
            <p>Xfinity on Campus makes our products and services available to colleges in our region, helping win the loyalty of a new generation of customers. Use this only on program-related communications.</p>
            <div class="flex-column flex-4col">
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-8.png" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-9.png" alt="" />
              </div>
              <div></div>
              <div></div>
            </div>
            <a class="button" href="#">Download</a>
          </section>

          <section class="section">
            <h2 class="section-title">Authorized Retailer and Authorized Dealer</h2>
            <p>The Xfinity Authorized Retailer and Dealer logos are for use expressly by Xfinity third-party agents and eTail environments. These logos should only be used in third-party communications by Authorized Representatives and Dealers.</p>
            <div class="flex-column flex-4col">
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-10.png" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-11.png" alt="" />
              </div>
              <div></div>
              <div></div>
            </div>
            <div class="flex-column flex-4col">
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-12.png" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-13.png" alt="" />
              </div>
              <div></div>
              <div></div>
            </div>
            <a class="button" href="#">Download</a>
          </section>

          <section class="section">
            <h2 class="section-title">Xfinity on the Fly</h2>
            <p>Xfinity on the Fly is our in-airport lounge-like experience offering customers fast WiFi connections  while on the go. This mark should only be used within Xfinity on the Fly destinations.</p>
            <div class="flex-column flex-4col">
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-14.png" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-15.png" alt="" />
              </div>
              <div></div>
              <div></div>
            </div>
            <a class="button" href="#">Download</a>
          </section>

          <section class="section">
            <h2 class="section-title">Xfinity Thanks You</h2>
            <p>Xfinity Thanks You is to be used in select surprise-and-delight loyalty communications to foster commitment, cultivate relationships and build value with our customers.</p>
            <div class="flex-column flex-4col">
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-16.png" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/secondary-graphics-1-17.png" alt="" />
              </div>
              <div></div>
              <div></div>
            </div>
            <a class="button" href="#">Download</a>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
