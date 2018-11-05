<?php
  $scriptList = ['video.js', 'featherlight.js'];
  $styleList = ['video.css', 'featherlight.css'];
  $activeMain = 0; // Our Brand
  $dir = "";
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="one-col brand">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main>
      <div class="inner">
        <div class="content">
          <section class="section header vid">
            <div class="info">
              <h1 class="light">We’re on a journey to become an admired lifestyle brand.</h1>
              <a class="button" data-featherlight="#brand-video" href="#">Launch Video</a>
            </div>
            <div class="featherlight-ajax" style="display: none;">
              <div id="brand-video">
                <iframe src="https://player.vimeo.com/video/288220044" width="960" height="540" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
            <video id="brand-bg" autoplay loop muted>
              <source src="<?php print $div; ?>video/brand-overview-bg.mp4" type="video/mp4">
            </video>
          </section>
          <section class="section">
            <div class="info" style="padding-bottom: 10px;">
              <h1>Brand Purpose</h1>
              <div class="separator"></div>
              <h2>We exist to fuel discovery for everyday enjoyment.</h2>
              <p>Through our products and services, we make experiences more vivid, more meaningful and more memorable. We offer unparalleled content, connectivity and experience design that work simply and easily to deliver meaningful experiences across every interaction so people can do more and enjoy more of what they love.</p>
            </div><!-- /.info -->
            <img src="<?php print $dir; ?>images/bg_section-1.jpg" alt="" />
          </section>
          <section class="section">
            <div class="info">
              <h1>Our Target Mindset</h1>
              <div class="separator"></div>
              <h2>We are inspired by curious-minded people.</h2>
              <p>They are open to new experiences, committed to developing connections with others, and fulfilled by the journey that leads to new discoveries each day. They see us as more than just technology – we are amplifying their lifestyle. Every experience we create and innovation we dream up is for and because of them.</p>
            </div><!-- /.info -->
          </section>
          <section class="section bg-img">
            <div class="info half">
              <h1>Our Personality</h1>
              <div class="separator"></div>
              <h2>We are The Host.</h2>
              <p>We invite people in to our world and set the stage for discovery in a way only Xfinity can make possible. Our personality comes to life across every interaction to build meaningful, lasting relationships.</p>
            </div><!-- /.info -->
            <img src="<?php print $dir; ?>images/bg_section-2.jpg" alt="" />
          </section>
          <section class="section tuck-up">
            <div class="info">
              <h1>Brand Tagline</h1>
              <div class="separator"></div>
              <h2>The Future of Awesome</h2>
              <p>Together we're creating a new vision beyond the horizon, connecting people to what they can't see today. We will never settle and will keep innovating to deliver experiences – big and small – that people love.</p>
              <p>Here, you’ll find the tools to bring the Xfinity brand to life and live into our brand purpose every day. Let’s get started.</p>
            </div><!-- /.info -->
          </section>
        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php  $nxtLink = new NavLink($dir . "design", "How We Look", null); ?>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
