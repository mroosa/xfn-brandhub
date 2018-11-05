<?php
  $dir = "";
  // Homepage, no variables
  $bgColAry = ['#000','#000','#ccc'];
  $imgAry = ['homepage_lrg_1.jpg','homepage_lrg_2.jpg','homepage_lrg_4.jpg'];
  $imgAry2 = ['homepage_mid_1.jpg','homepage_mid_2.jpg','homepage_mid_4.jpg'];
  $imgAry3 = ['homepage_sml_1.jpg','homepage_sml_2.jpg','homepage_sml_4.jpg'];
  $randNum = rand(0, count($imgAry)-1);
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="one-col home">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main style="background-color: <?php print $bgColAry[$randNum]; ?>;">
      <div class="inner">
        <div class="content">
          <section class="section header">
            <a href="brand">
              <img class="lrg" src="images/<?php print $imgAry[$randNum]; ?>" alt="Welcome to the Xfinity Brand Site - Let's get started" />
              <img class="mid" src="images/<?php print $imgAry2[$randNum]; ?>" alt="Welcome to the Xfinity Brand Site - Let's get started" />
              <img class="sml" src="images/<?php print $imgAry3[$randNum]; ?>" alt="Welcome to the Xfinity Brand Site - Let's get started" />
            </a>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
