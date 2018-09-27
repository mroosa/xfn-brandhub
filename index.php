<?php
  // Homepage, no variables
  $imgAry = ['homepage_lrg_1.jpg','homepage_lrg_2.jpg','homepage_lrg_3.jpg','homepage_lrg_4.jpg','homepage_lrg_5.jpg'];
  $theImg = $imgAry[rand(0, count($imgAry)-1)];
  $imgAry = ['homepage_mid_1.jpg','homepage_mid_2.jpg','homepage_mid_3.jpg','homepage_mid_4.jpg','homepage_mid_5.jpg'];
  $theImg2 = $imgAry[rand(0, count($imgAry)-1)];
  $imgAry = ['homepage_sml_1.jpg','homepage_sml_2.jpg','homepage_sml_3.jpg','homepage_sml_4.jpg','homepage_sml_5.jpg'];
  $theImg3 = $imgAry[rand(0, count($imgAry)-1)];
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="one-col home">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main>
      <div class="inner">
        <div class="content">
          <section class="section header">
            <a href="brand">
              <img class="lrg" src="images/<?php print $theImg; ?>" alt="Welcome to the Xfinity Brand Site - Let's get started" />
              <img class="mid" src="images/<?php print $theImg2; ?>" alt="Welcome to the Xfinity Brand Site - Let's get started" />
              <img class="sml" src="images/<?php print $theImg3; ?>" alt="Welcome to the Xfinity Brand Site - Let's get started" />
            </a>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
