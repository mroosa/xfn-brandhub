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
          <h1>More to come in 2019!</h1>
          <section class="section">
            <p>Intentional messaging with a clear brand voice and personality allows us to be meaningful and relevant while staying true to the brand. Our voice shapes how we talk and our messages guide what we say.  To learn more about the ins and outs of our products and services, click here to access our brand voice and messaging guidelines.</p>
            <p>We’re actively working to incorporate our brand voice and messaging guidelines into this site. Please check back soon for updates! In the meantime, if you have questions or issues accessing the guidelines through the link above, please feel free to reach out to the brand team.</p>
            <p><a class="button" href="#">Full messaging guidelines</a></p>
          </section>
        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
