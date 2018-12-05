<?php
  $dir = "../";
  $scriptList = ['subnav.js'];
  $activeMain = 2; // Voice & Messaging
  $activeSub = 0;
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
          <h1>We are The Host</h1>
          <h2>Helpful, captivating, approachable, passionate and fresh</h2>
          <section class="section">
            <p>Our brand voice and personality allow us to be meaningful and relevant while staying true to the Xfinity brand. Our voice shapes how we talk and our message guides what we say. To learn more about the ins and outs of products and services, take a look at our brand voice and messaging guidelines.</p>
            <p>We’re actively working to incorporate our brand voice and messaging guidelines into this site. Please check back soon for updates. There’s more to come in 2019!</p>
            <p>If you have any questions or issues accessing the guidelines through the links above, please reach out to the brand team.</p>
            <p><a class="button" href="#">Full messaging guidelines</a></p>
          </section>
        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
