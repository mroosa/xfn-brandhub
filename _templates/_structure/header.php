<header>

  <div class="upper-head clearfix">
    <div class="inner">
      <div class="logo mobile">
        <a href="#"><img src="<?php print $dir; ?>gfx/xfn-logo-wht.svg" alt="Xfinity" /></a>
      </div>
      <?php #include_once($dir . "_templates/_nav/top.php"); ?>
    </div>
  </div>

  <div class="lower-head">
    <div class="inner">
      <div class="logo desktop">
        <a href="<?php print $dir; ?>index"><img src="<?php print $dir; ?>gfx/xfn-logo-blk.svg" alt="Xfinity" /></a>
      </div>
      <nav id="primary-nav">
        <?php include_once($dir . "_templates/_nav/main.php"); ?>
      </nav>
    </div>
  </div>

</header>
