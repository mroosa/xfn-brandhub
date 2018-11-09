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
          <section class="section">
            <p>Our secondary graphic system includes key programs, channels, and offerings that support the Xfinity Masterbrand within our brand hierarchy.</p>

            <h3>Xfinity Customer Commitment</h3>
            <p>Our Customer Commitment seal represents our commitment  to making our customer experience our best product, and should be used on all tactics that reference our customer guarantee or a customer experience innovation related to a key pillar.</p>
            <div class="img width-75">
              <img src="<?php print $dir; ?>images/secondary-graphics/01.svg" alt="" />
            </div>
            <a class="button" href="#">Download</a>

            <h3>X1 Channels and Experiences</h3>
            <p>Special design treatments have been developed for the Xfinity X1 interface. They should only be used within the X1 experience, and never in marketing collateral or communications.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/secondary-graphics/03.svg" alt="" />
            </div>
            <a class="button" href="#">Download</a>

            <h3>Xfinity on Campus</h3>
            <p>Xfinity on Campus makes our products and services available to colleges in our region, helping win the loyalty of a new generation of customers. Use this only on program-related communications.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/secondary-graphics/04.svg" alt="" />
            </div>
            <a class="button" href="#">Download</a>

            <h3>Xfinity Communities</h3>
            <p>Xfinity Communities is our Multi Dwelling Unit (MDU) segment of Xfinity that focuses on individual properties such as apartments, condos, healthcare facilities and more. Please only use this logo in those communications.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/secondary-graphics/05.svg" alt="" />
            </div>
            <a class="button" href="#">Download</a>

            <h3>Authorized Retailer and Authorized Dealer</h3>
            <p>The Xfinity Authorized Retailer and Dealer logos are for use expressly by Xfinity third-party agents and eTail environments. These logos should only be used in third-party communications by Authorized Representatives and Dealers.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/secondary-graphics/06.svg" alt="" />
            </div>
            <a class="button" href="#">Download</a>

            <h3>Xfinity on the Fly</h3>
            <p>Xfinity on the Fly is our in-airport lounge-like experience offering customers fast WiFi connections  while on the go. This mark should only be used within Xfinity on the Fly destinations.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/secondary-graphics/07.svg" alt="" />
            </div>
            <a class="button" href="#">Download</a>

            <h3>Xfinity Thanks You</h3>
            <p>Xfinity Thanks You is to be used in select surprise-and-delight loyalty communications to foster commitment, cultivate relationships and build value with our customers.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/secondary-graphics/08.svg" alt="" />
            </div>
            <a class="button" href="#">Download</a>

            <h3>Speed Test Flag</h3>
            <p>Xfinity is the best internet in America, according to speedtest.net. Use this flag when using that claim if design and layout allow.</p>
            <div class="img width-75">
              <img src="<?php print $dir; ?>images/secondary-graphics/02.svg" alt="" />
            </div>
            <a class="button" href="#">Download</a>

          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
