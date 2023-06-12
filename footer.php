</main>
<footer class="footer js-animaion">
  <div class="footer-top">
    <div class="container-wrap">
      <div class="footer-top_container">
        <div class="footer-top--item">
          <?php dynamic_sidebar('footer-sidebar-1'); ?>
        </div>
        <div class="footer-top--item">
          <?php dynamic_sidebar('footer-sidebar-2'); ?>
        </div>
        <div class="footer-top--item">
          <?php dynamic_sidebar('footer-sidebar-3'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container-wrap">
      <div class="footer-bottom_container">
        <?php dynamic_sidebar('footer-copyright'); ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
<script src="<?= get_template_directory_uri() ?>/public/js/app.min.js"></script>
</body>

</html>