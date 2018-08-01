<div class="page-nav">
  <div class="inner clearfix">
  <?php if ($prvLink -> link != ""): ?>
    <a class="pager page-prv" href="<?php print $prvLink -> link; ?>">
      <span class="lil-ttl">Previous</span>
      <span class="ttl"><?php print $prvLink -> getTtl(); ?></span>
    </a>
  <?php else: ?>
    <div class="pager empty">&nbsp;</div>
  <?php endif; ?>
  <?php if ($nxtLink -> link != ""): ?>
    <a class="pager page-nxt" href="<?php print $nxtLink -> link; ?>">
      <span class="lil-ttl">Next</span>
      <span class="ttl"><?php print $nxtLink -> getTtl(); ?></span>
    </a>
  <?php else: ?>
    <div class="pager empty">&nbsp;</div>
  <?php endif; ?>
  </div><!-- /.inner -->
</div><!-- /.page-nav -->
