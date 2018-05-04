<?php snippet('header') ?>

<div class="site-container">

  <header class="site-header cf">

      <?php snippet('logo') ?>

      <div class="cf"></div>

      <div class="site-tagline">
        <span class="txt anim-text-flow">  <?php echo $page->text()->kirbytext() ?> </span>
      </div>
      
  </header><!-- / .site-header -->

  <?php snippet('projects') ?>


<!--END .site-container-->
</div>
<?php snippet('footer') ?> 


