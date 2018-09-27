<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 1; // Design
  $activeSub = 10;
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
          <h1>Our Devices</h1>
          <section class="section">
            <p>Xfinity devices blend physical interaction with digital interfaces to deliver premium styling, modern finishes, and an intuitive experience.</p>
            <a class="button" href="http://xfinity.com/" target="_blank">Download Device Portfolio</a>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-hardware-01.jpg" alt="" />
            </div>

            <h3>TV Boxes</h3>
            <p>Since the longevity of equipment varies between customers, we must design with timeless simplicity in mind. Primary TV Boxes are usually placed within entertainment centers, often with a collection of other devices. Secondary units are often in a bedroom, on top of a dresser. Overuse of lighting is challenging in this environment. TV Boxes should be designed for flat placement or mounting behind a TV.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-hardware-02.jpg" alt="" />
            </div>
            <div class="flex-column flex-2col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-hardware-03-1.jpg" alt="" />
                <p class="caption">Xfinity TV Box</p>
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-hardware-03-2.jpg" alt="" />
              </div>
            </div>

            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-hardware-04.jpg" alt="" />
              <p class="caption">Xfinity Wireless TV Box</p>
            </div>

            <h3>Remotes</h3>
            <p>As TV Boxes become smaller, the remote interface continues to be the most common interaction with Xfinity, but it must also be comfortable for many different types of users. Furthermore, as voice becomes a more popular way for users to control their Xfinity experience, the number and types of buttons and controls will change.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/design-hardware-05-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-hardware-05-2.jpg" alt="" />
              </div>
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-hardware-06.jpg" alt="" />
              <p class="caption">Voice Remote</p>
            </div>

            <h3>Internet</h3>
            <p>Wireless Gateways and Extenders streamline and optimize the process of setting up and maintaining the in-home network. These devices roll multiple components into one. To get the best performance, these devices need to be visible and centrally located. Thoughtful design can significantly impact placement, thus improving overall network performance.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/design-hardware-07.jpg" alt="" />
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-hardware-08.jpg" alt="" />
              <p class="caption">Advanced Wireless Gateway</p>
            </div>

            <h3>Home</h3>
            <p>Xfinity Home devices serve to meet the needs of both a traditional home security system and an "Internet of Things" connected home.</p>
            <p>Customers use keypads, touchscreens, mobile devices, PCs, or their TV to control and monitor their connected homes. Because of this, Xfinity Home devices have varying levels of design interactions.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/design-hardware-09-1.jpg" alt="" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-hardware-09-2.jpg" alt="" />
              </div>
            </div>
            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-hardware-10.jpg" alt="" />
              <p class="caption">Xfinity Home Touchscreen</p>
            </div>

            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-hardware-11.jpg" alt="" />
              <p class="caption">Camera</p>
            </div>

            <div class="img img-w-caption">
              <img src="<?php print $dir; ?>images/design-hardware-12.jpg" alt="" />
              <p class="caption">Keypad</p>
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
