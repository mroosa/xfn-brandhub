<?php
$scriptList = ['masonry.pkgd.min.js','imagesloaded.pkgd.min.js','featherlight.js','inspiration.js'];
$styleList = ['inspiration.css','featherlight.css'];
$activeTop = 2;
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="one-col inspiration">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main>
      <div class="inner">
        <div class="content">
          <h1>Inspiration Gallery</h1>
          <section class="section form">
            <div class="selection">
              <label for="product">Product</label>
              <select id="product" name="product">
                <option value="all">All Products</option>
                <option value="gig">Gig</option>
                <option value="double">Double Play</option>
                <option value="account">My Account</option>
                <option value="apps">Apps</option>
                <option value="wifi">WiFi</option>
                <option value="stream">Stream</option>
                <option value="x1">X1</option>
                <option value="home">Xfinity Home</option>
                <option value="internet">Xfinity Internet</option>
              </select>
            </div>
            <div class="selection">
              <label for="tactic">Tactic</label>
              <select id="tactic" name="tactic">
                <option value="all">All Tactics</option>
                <option value="brochure">Brochure</option>
                <option value="collateral">Collateral</option>
                <option value="digital">Digital Banners</option>
                <option value="dm">Direct Mail</option>
                <option value="email">Email</option>
                <option value="video">Online Video</option>
                <option value="ooh">Out-of-Home</option>
                <option value="print">Print</option>
                <option value="social">Social</option>
                <option value="tv">TV</option>
              </select>
            </div>
            <div class="selection">
              <label for="channel">Channel</label>
              <select id="channel" name="channel">
                <option value="all">All Channels</option>
                <option value="acquisition">Acquisition</option>
                <option value="brand">Brand</option>
                <option value="engagement">Customer Engagement</option>
                <option value="multicultural">Multiculural</option>
              </select>
            </div>
            <div class="selection">
              <label for="campaign">Campaigns &amp; Programs</label>
              <select id="campaign" name="campaign">
                <option value="all">All </option>
                <option value="olympics">Olympics</option>
                <option value="sports">Sports</option>
                <option value="world-cup">World Cup</option>
              </select>
            </div>
          </section>
          <section class="section inspiration-gallery">
            <div class="grid">
              <div class="grid-item">
                <a href="images/inspirations/thumbnail/inspo-01.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-01.png" alt="" /></a>
              </div>
              <div class="grid-item">
                <a href="images/inspirations/thumbnail/inspo-02.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-02.png" alt="" /></a>
              </div>
              <div class="grid-item" data-tags="brochure, acquisition">
                <a href="images/inspirations/thumbnail/inspo-03.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-03.png" alt="" /></a>
              </div>
              <div class="grid-item" data-tags="digital">
                <a href="images/inspirations/thumbnail/inspo-04.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-04.png" alt="" /></a>
              </div>
              <div class="grid-item">
                <a href="images/inspirations/thumbnail/inspo-06.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-06.png" alt="" /></a>
              </div>
              <div class="grid-item">
                <a href="images/inspirations/thumbnail/inspo-07.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-07.png" alt="" /></a>
              </div>
              <div class="grid-item">
                <a href="images/inspirations/thumbnail/inspo-10.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-10.png" alt="" /></a>
              </div>
              <div class="grid-item">
                <a href="images/inspirations/thumbnail/inspo-11.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-11.png" alt="" /></a>
              </div>
              <div class="grid-item">
                <a href="images/inspirations/thumbnail/inspo-12.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-12.png" alt="" /></a>
              </div>
              <div class="grid-item" data-tags="digital, olympics">
                <a href="images/inspirations/thumbnail/inspo-13.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-13.png" alt="" /></a>
              </div>
              <div class="grid-item" data-tags="ooh, olympics">
                <a href="images/inspirations/thumbnail/inspo-14.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-14.png" alt="" /></a>
              </div>
              <div class="grid-item">
                <a href="images/inspirations/thumbnail/inspo-15.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-15.png" alt="" /></a>
              </div>
              <div class="grid-item" data-tags="digital, olympics">
                <a href="images/inspirations/thumbnail/inspo-16.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-16.png" alt="" /></a>
              </div>
              <div class="grid-item" data-tags="digital, olympics">
                <a href="images/inspirations/thumbnail/inspo-17.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-17.png" alt="" /></a>
              </div>
              <div class="grid-item">
                <a href="images/inspirations/thumbnail/inspo-18.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-18.png" alt="" /></a>
              </div>
              <div class="grid-item">
                <a href="images/inspirations/thumbnail/inspo-21.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-21.png" alt="" /></a>
              </div>
              <div class="grid-item" data-tags="digital, olympics">
                <a href="images/inspirations/thumbnail/inspo-23.png" data-featherlight="image"><img src="images/inspirations/thumbnail/inspo-23.png" alt="" /></a>
              </div>
            </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
