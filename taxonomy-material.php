<?php get_header(); ?>
<section class="taxonomy">
  <div class="container-wrap">
    <div class="taxonomy-container grid two_grids">
      <div class="filter">
        <div class="categoria">
          <?php
          $current_taxonomy = get_queried_object();
          // Obtém os termos da taxonomia "material"
          $terms = get_terms(
            array(
              'taxonomy' => 'material',
              'hide_empty' => false,
            )
          );

          // Verifica se foram encontrados termos
          if (!empty($terms)) {
            foreach ($terms as $term) {
              // Obtém o título e o link do termo
              $term_title = $term->name;
              $term_link = get_term_link($term);
              $active_class = ($term->term_id === $current_taxonomy->term_id) ? 'active' : '';
              // Exibe o título e o link do termo
              echo '<a href="' . $term_link . '" class="' . $active_class . '">' . $term_title . '</a>';
            }
          }
          ?>
        </div>
      </div>
      <div class="content-items">
        <div class="title-container">
          <h1 id="taxonomy-title">
            <?= single_term_title('', false) ?>
          </h1>
        </div>
        <div style="display: none;" class="order-posts">
          <select id="orderby-select">
            <option value="title">Ordenar por Título</option>
            <option value="date">Ordenar por Data</option>
          </select>
        </div>
        <div class="grid-posts" id="post-results">
          <!-- Os posts serão carregados aqui via AJAX -->
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              ?>
              <div class="post-item post-item-material">
                <a>
                  <?php if (has_post_thumbnail()): ?>
                    <div class="thumbnail">
                      <?php the_post_thumbnail(); ?>
                      <div class="overlay"></div>
                    </div>
                  <?php endif; ?>
                  <div class="post-details">
                    <h2>
                      <?php the_title(); ?>
                    </h2>
                    <div class="description">
                      <?= get_the_content() ?>
                      <span class="codigo-identificacao">
                        <?php if (get_field('codigo_identificacao')): ?>
                          <?php the_field('codigo_identificacao') ?>
                        <?php else: ?>
                          Código identificação
                        <?php endif; ?>
                      </span>
                    </div>
                  </div>
                </a>
              </div>
              <?php
            }
          } else {
            echo 'Nenhum produto encontrado.';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var materialLinks = document.querySelectorAll('.categoria a');
    var postResults = document.getElementById('post-results');
    var taxonomyTitle = document.getElementById('taxonomy-title');
    var orderbySelect = document.getElementById('orderby-select');

    function updatePosts(material, title, orderby) {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          postResults.innerHTML = xhr.responseText;
          taxonomyTitle.textContent = title;
        }
      };
      xhr.open('GET', '<?php echo admin_url('admin-ajax.php'); ?>?action=filter_posts&material=' + material + '&orderby=' + orderby, true);
      xhr.send();
    }

    materialLinks.forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault();

        var selectedMaterial = link.getAttribute('href').replace(/\/material\//, '');
        var selectedTitle = link.textContent;
        var selectedOrderby = orderbySelect.value;
        updatePosts(selectedMaterial, selectedTitle, selectedOrderby);

        // Adiciona a classe "active" ao filtro clicado
        materialLinks.forEach(function (link) {
          link.classList.remove('active');
        });
        link.classList.add('active');

        history.pushState(null, '', link.getAttribute('href'));
      });
    });

    orderbySelect.addEventListener('change', function () {
      var selectedMaterial = document.querySelector('.categoria a.active').getAttribute('href').replace(/\/material\//, '');
      var selectedTitle = document.querySelector('.categoria a.active').textContent;
      var selectedOrderby = orderbySelect.value;
      updatePosts(selectedMaterial, selectedTitle, selectedOrderby);
    });

    window.addEventListener('popstate', function () {
      var selectedMaterial = window.location.pathname.replace(/\/material\//, '');
      var selectedTitle = document.querySelector('.categoria a[href$="/' + selectedMaterial + '/"]').textContent;
      var selectedOrderby = orderbySelect.value;
      updatePosts(selectedMaterial, selectedTitle, selectedOrderby);

      // Adiciona a classe "active" ao filtro correspondente ao estado do histórico
      materialLinks.forEach(function (link) {
        link.classList.remove('active');
      });
      document.querySelector('.categoria a[href$="/' + selectedMaterial + '/"]').classList.add('active');
    });
  });
</script>-->

<?php get_footer(); ?>