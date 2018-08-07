<?php
  $scriptList = ['video.js'];
  $styleList = ['video.css'];
  $activeMain = 0; // Our Brand
  //$nxtLink = new NavLink($dir . "design", "Design", null);
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="one-col home">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main>
      <div class="inner">
        <div class="content">
          <section class="section header">
            <h1 class="light">Welcome to the Xfinity Style Guide</h1>
            <!-- <video id="brand-bg" autoplay loop muted>
              <source src="<?php print $div; ?>video/design-overview.mp4" type="video/mp4">
            </video> -->
            <a href="brand" class="button">Let's Get Started</a>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
