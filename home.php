<?php
  $scriptList = ['video.js', 'featherlight.js'];
  $styleList = ['video.css', 'featherlight.css'];
  $activeMain = 0; // Our Brand
  $dir = "";

  $bgColAry = ['#000','#000','#ccc'];
  $imgAry = ['homepage_lrg_1.jpg','homepage_lrg_2.jpg','homepage_lrg_4.jpg'];
  $imgAry2 = ['homepage_mid_1.jpg','homepage_mid_2.jpg','homepage_mid_4.jpg'];
  $imgAry3 = ['homepage_sml_1.jpg','homepage_sml_2.jpg','homepage_sml_4.jpg'];
  $randNum = rand(0, count($imgAry)-1);

?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="one-col home brand">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main>
      <div class="inner">
        <div class="content">
          <section id="brand" class="section">
            <div class="info" style="padding-bottom: 10px;">
              <h1>Who We Are</h1>
              <div class="separator"></div>
              <h2>We’re on a journey to become a brand people love.</h2>
              <p>Xfinity is a key consumer brand in Comcast’s corporate portfolio, alongside Sky, Universal, NBC and others.</p>
              <p>These guidelines are meant for Xfinity communications only.</p>
              <p>Following the spirit of these guidelines is essential to ensuring the Xfinity brand is consistently represented across all touchpoints.</p>
              <h3>We are The Host</h3>
              <p>We invite people into our world and set the stage for discovery in a way only Xfinity can make possible. Our personality comes to life through our attributes: helpful, captivating, approachable, passionate and fresh. Expressing our personality across every interaction builds meaningful, lasting relationships.</p>
              <a class="button" href="design">Let's Get Started</a>
            </div><!-- /.info -->
            <div class="info" style="padding-bottom: 10px;">
              <h2>Brand Voice</h2>
              <p>We invite people in and set the stage for discovering enjoyment through experiences only we can make possible.</p>
              <p>Our brand voice helps us express the personality – and spirit – of our brand. Our voice brings our personality attributes to life, directing the tone and style of all our communications.</p>

              <h3>We’re Helpful</h3>
              <p>A great host is attuned to your wants and needs so that you feel understood and satisfied.</p>
              <ul>
                <li>Simple</li>
                <li>Straightforward</li>
                <li>Empathetic</li>
              </ul>

              <h3>We’re Captivating</h3>
              <p>A great host keeps you engaged through an infectious charm and enthusiasm.</p>
              <ul>
                <li>Delightful</li>
                <li>Engaging</li>
                <li>Dynamic</li>
              </ul>

              <h3>We’re Approachable</h3>
              <p>A great host puts you at ease so you feel happy and comfortable.</p>
              <ul>
                <li>Warm</li>
                <li>Personal</li>
                <li>Human</li>
              </ul>

              <h3>We’re Passionate</h3>
              <p>A great host is the life of the party so you feel hopeful and inspired.<p>
              <ul>
                <li>Optimistic</li>
                <li>Relevant</li>
                <li>Enthusiastic</li>
              </ul>

              <h3>We’re Fresh</h3>
              <p>A great host shares their unique perspective on the latest trends and innovations so you feel ahead of the curve.</p>
              <ul>
                <li>Unexpected</li>
                <li>Witty</li>
                <li>Refreshing</li>
              </ul>

              <a class="button" href="inspired">Get Inspired</a>
            </div><!-- /.info -->
            <div class="info" style="padding-bottom: 10px;">
              <h2>Questions? Please reach out.</h2>
              <p><strong>Catherine Clair Williams</strong> / <a href="#">Catherine_Clair@comcast.com</a></p>
              <p><strong>Jamie Dion</strong> / <a href="#">Jamie_Dion@comcast.com</a></p>
              <p><strong>Simone Bilotta</strong> / <a href="#">Simone_Bilotta@comcast.com</a></p>
            </div><!-- /.info -->






          </section>
        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php # $nxtLink = new NavLink($dir . "design", "How We Look", null); ?>
    <?php # include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
