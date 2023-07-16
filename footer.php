</main>
<footer class="footer js-animaion">
  <div class="container-wrap">
    <div class="footer-column grid three_grids">
      <div class="footer-column__item">
        <div class="logo-container">
          <img src="<?= site_url() ?>/wp-content/uploads/logo-mobile.png" alt="Pietra Roza">
        </div>
        <div class="text-container">
          <?php the_field('descricao_footer', 'opt-footer'); ?>
        </div>
        <div class="button-container">
          <a href="<?php the_field('link_button', 'opt-footer'); ?>" class="button"><?php the_field('button', 'opt-footer'); ?> <span class="arrow-button">→</span></a>
        </div>
      </div>
      <div class="footer-column__item footer-column__item-redes footer-column__item-adress">
        <h5>Local</h5>
        <a href="<?php the_field('endereco_sp', 'opt-footer'); ?>" target="_blank">São Paulo - SP</a>
        <a href="<?php the_field('endereco_uberaba', 'opt-footer'); ?>" target="_blank">Uberaba-MG</a>
      </div>
      <div class="footer-column__item footer-column__item-redes">
        <h5>Redes</h5>
        <div class="social-icon">
          <a href="" target="_blank">
            <?= get_svg_content('instagram'); ?>
          </a>
          <a href="" target="_blank">
            <?= get_svg_content('linkedin'); ?>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-copy">
      <p>
        <?php the_field('copy_rights', 'opt-footer'); ?>
      </p>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
<script src="<?= get_template_directory_uri() ?>/public/js/app.min.js"></script>
</body>

</html>