<?php //Template name: Home Page 
?>
<?php get_header() ?>
<?php

$heroHeader = wp_is_mobile() ? site_url() . '/wp-content/uploads/hero-heder-mobile.jpg' : site_url() . '/wp-content/uploads/hero-heder.jpg';

?>
<section class="hero-header" style="background-image: url('<?= $heroHeader ?>');">
  <div class="container-wrap">
    <div class="hero-header-container">
      <div class="title-container">
        <h2>Chamada Banner</h2>
      </div>
      <div class="button-container">
        <a href="" class="button button-yellow">Conheça mais <span class="arrow-button">→</span></a>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>