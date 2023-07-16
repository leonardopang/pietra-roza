<?php //Template name: Contact ?>
<?php get_header() ?>
<section class="contact">
  <div class="container-wrap">
    <div class="contact-container">
      <div class="title-container">
        <h1>
          <?php the_title() ?>
        </h1>
      </div>
      <div class="text-container">
        <?php the_field('descricao_contato') ?>
      </div>
      <div class="button-container">
        <a href="<?php the_field('link_button_1') ?>" target="_blank" class="button button-white"><?php the_field('button_1') ?></a>
        <a href="<?php the_field('link_button_2') ?>" target="_blank" class="button button-white"><?php the_field('button_2') ?></a>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>