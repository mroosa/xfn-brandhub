<?php
  include_once("_templates/_db/config.php");

  // Check user login or not
  if(!isset($_SESSION['uname'])){
    header('Location: login');
    exit;
  }

  $dir = "";
  $scriptList = [];
  $styleList = ['redesign.css'];
  // $activeMain = 0; // Design
  $activeSub = 0;
  $bodyClassList = ['redesign'];
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>

    <main id="top">
      <div class="inner">
        <div class="content">
          <div class="redesign-top">
            <svg x="0px" y="0px" viewBox="0 0 107.3 115" width="60px" style="fill: #fff;">
              <g>
                <path d="M51.2,38.6L79.9,0h-12c-5.4,0-8.8,1.9-11.7,5.7L41.1,26.1L26.4,5.7C23.5,1.9,20.1,0,14.7,0h-12l28.4,38.6L0,80.6h11.4
              c5.4,0,8.8-1.9,11.7-5.7l18-23.9l42.2,58.3c2.7,3.8,6.3,5.7,11.7,5.7h12.3L51.2,38.6z" />
              </g>
            </svg>
            <br><br><br>
            <h1>Welcome to the <br class="mobile-only">Xfinity Brand Hub</h1>
            <p class="disc">Explore the helpful resources below, and feel free to reach out to <a href="#">the brand team</a> with any questions. Stay tuned for more exciting updates to come!</p>
          </div>

          <div class="new-tiles three-tiles">

            <div class="new-tile" id="tile-3">
              <img src="images/landing/icon-new.jpg" alt="">
              <h2>Xfinity<br> Brand Guidelines</h2>
              <hr>
              <p class="tile-info">The guidance and tools to bring our new brand to life consistently and impactfully</p>
              <a class="button" href="http://xfinity.com/" target="_blank"><span>Download</span></a>
            </div>

            <div class="new-tile" id="tile-4">
              <img src="images/landing/icon-messaging.jpg" alt="">
              <h2>Interactive Messaging<br> Framework</h2>
              <hr>
              <p class="tile-info">Your go-to destination for compelling messaging to consistently reinforce the Xfinity brand</p>
              <a class="button" href="messaging"><span>Explore</span></a>
            </div>

            <div class="new-tile" id="tile-2">
              <img src="images/landing/icon-templates.jpg" alt="">
              <h2>Presentation<br> Templates</h2>
              <hr>
              <p class="tile-info">Impactful presentation templates designed to showcase the Xfinity brand</p>
              <a class="button" href="http://xfinity.com/" target="_blank"><span>Explore</span></a>
            </div>
         </div>

          <div class="lower">
            <h2>Additional assets and resources</h2>

            <div class="new-tiles four-tiles">

              <div class="new-tile" id="lower-tile-1">
                <img src="images/downloads/bh_downloads-1.png" alt="Xfinity Logo">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>Xfinity Logo</span></a>
              </div>

              <div class="new-tile" id="lower-tile-13">
                <img src="images/downloads/bh_downloads-13.png" alt="Olympic Brand Assets">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>Olympic Brand Assets</span></a>
              </div>

              <div class="new-tile" id="lower-tile-3">
                <img src="images/downloads/bh_downloads-3.png" alt="Color">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>Color</span></a>
              </div>

              <div class="new-tile" id="lower-tile-6">
                <img src="images/downloads/bh_downloads-6.png" alt="Photography">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>Photography</span></a>
                <p>(new library coming soon)</p>
              </div>
            </div>

            <div class="new-tiles four-tiles">
              <div class="new-tile" id="lower-tile-4">
                <img src="images/downloads/bh_downloads-4.png" alt="Typography">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>Typography</span></a>
              </div>
              <div class="new-tile" id="lower-tile-5">
                <img src="images/downloads/bh_downloads-5.png" alt="Iconography">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>Iconography</span></a>
              </div>
              <div class="new-tile" id="lower-tile-4">
                <img src="images/downloads/bh_downloads-14.png" alt="App icons">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>App Icons</span></a>
              </div>
              <div class="new-tile" id="lower-tile-7">
                <img src="images/downloads/bh_downloads-7.png" alt="End Card">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>End Card</span></a>
              </div>
            </div>

            <div class="new-tiles four-tiles">
              <div class="new-tile" id="lower-tile-2">
                <img src="images/downloads/bh_downloads-12.png" alt="Supplemental Guidelines">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>Supplemental Guidelines</span></a>
              </div>

              <div class="new-tile" id="lower-tile-8">
                <img src="images/downloads/bh_downloads-8.png" alt="CTA Button">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>CTA Button</span></a>
              </div>

              <div class="new-tile" id="lower-tile-2">
                <img src="images/downloads/bh_downloads-2.png" alt="Xfinity Sub-Brand Logos">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>Xfinity Sub-Brand Logos</span></a>
              </div>

              <div class="new-tile" id="lower-tile-11">
                <img src="images/downloads/bh_downloads-11.png" alt="Xfinity Rewards">
                <a class="link" href="http://xfinity.com/" target="_blank"><span>Xfinity Rewards</span></a>
              </div>
            </div>

          </div>

          <br>
          <br>
          <br>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>

    <footer>
      <div class="foot-inside">
      <div class="logo">
        <svg x="0px" y="0px" viewBox="0 0 458 154.5" style="fill: #fff;">
          <g>
          	<path d="M51.2,78.1l28.8-38.6h-12c-5.4,0-8.8,1.9-11.7,5.7L41.1,65.6L26.4,45.2c-2.8-3.8-6.3-5.7-11.7-5.7h-12l28.4,38.6L0,120.1
        		h11.4c5.4,0,8.8-1.9,11.7-5.7l18-23.9l42.2,58.3c2.7,3.8,6.3,5.7,11.7,5.7h12.3L51.2,78.1z M281.4,120.1h16.3V39.5h-16.3V120.1z
        		 M152.3,120.1h16.3V39.5h-16.3V120.1z M399.1,148.5l58.9-109h-8.8c-5.4,0-9.5,1.6-11.7,5.7l-23.2,43.1l-20.1-43.1
        		c-2.1-4.3-6.3-5.7-11.7-5.7H374l31,65.7l-27,49.3h8.8C392.3,154.5,396.7,152.8,399.1,148.5z M188,39.5v80.6h16.3V64.8
        		c5.1-7.1,12.3-11.5,21.3-11.5c12,0,20.2,7.6,20.2,22.8v36.3c0,4.6,3.2,7.7,7.6,7.7h8.7V73.2c0-20.9-13.3-35.4-32.5-35.4
        		c-10.3,0-18.8,3.6-25.3,9.6v-7.9H188z M327.8,91.5c0,17.5,10.7,30,30,30c4.7,0,8.7-0.6,11.8-1.6l-3.3-14.2
        		c-2.1,0.5-4.6,0.8-7.4,0.8c-7.9,0-14.9-4.3-14.9-15.3V54h22.8l-6.6-14.5h-16.1V7.1l-16.3,7.1v25.3h-17.2V54h17.2V91.5z M102.2,54
        		v66h16.3V54h20.9V39.5h-20.9v-6c0-13.7,8.2-18.3,16.3-18.3c2.1,0,4,0.3,5.5,0.8l3.3-14.4c-2.1-0.8-5.4-1.6-10.1-1.6
        		c-20.2,0-31.3,15-31.3,33.2v6.3h-8.5L83.4,54H102.2z"/>
          </g>
        </svg>
      </div>
      <!-- <div class="foot-nav"><a href="brandhub#contact-resources">Contacts & Resources</a></div> -->
    </div>
    </footer>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
