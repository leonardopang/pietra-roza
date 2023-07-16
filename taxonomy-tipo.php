<?php get_header(); ?>
<section class="taxonomy">
  <div class="container-wrap">
    <div class="taxonomy-container grid two_grids">
      <div class="filter">
        <div class="categoria">
          <?php
          // Obtém a taxonomia atual
          $current_taxonomy = get_queried_object();

          // Verifica se é uma taxonomia de nível superior (taxonomia pai)
          $is_parent_taxonomy = $current_taxonomy->parent === 0;

          // Obtém o link da taxonomia principal
          $parent_taxonomy_link = $is_parent_taxonomy ? get_post_type_archive_link('obra') : get_term_link($current_taxonomy->parent);

          // Exibe o termo "Todos" como a primeira opção
          echo '<a href="' . $parent_taxonomy_link . '" class="' . ($is_parent_taxonomy ? 'active' : '') . '">Todos</a>';

          // Obtém os termos da taxonomia atual e suas subtaxonomias
          $terms = get_terms(
            array(
              'taxonomy' => 'tipo',
              'hide_empty' => false,
              'parent' => $is_parent_taxonomy ? $current_taxonomy->term_id : $current_taxonomy->parent,
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
        <div class="grid-posts-tipos" id="post-results">
          <!-- Os posts serão carregados aqui via AJAX -->
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              $obras_pictures = get_field('galeria_obras');
              ?>
              <div class="post-item post-item-tipo">
                <div class="slider-tipos">
                  <?php if (has_post_thumbnail()): ?>
                    <div class="slider-tipos__item">
                      <div class="galeria-imagem">
                        <?php the_post_thumbnail(); ?>
                        <div class="overlay">
                          <h3>
                            <?php the_title() ?>
                          </h3>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                  <?php foreach ($obras_pictures as $index => $imagem): ?>
                    <div class="slider-tipos__item">
                      <div class="galeria-imagem">
                        <img src="<?= $imagem ?>" alt=" <?php the_title() ?> - <?= $index ?>">
                        <div class="overlay">
                          <h3>
                            <?php the_title() ?>
                          </h3>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <?php
            }
          } else {
            echo 'Nenhuma obra encontrada.';
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
    var tipoLinks = document.querySelectorAll('.categoria a');
    var postResults = document.getElementById('post-results');
    var taxonomyTitle = document.getElementById('taxonomy-title');
    var orderbySelect = document.getElementById('orderby-select');

    function updatePosts(tipo, title, orderby) {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          postResults.innerHTML = xhr.responseText;
          taxonomyTitle.textContent = title;
        }
      };
      xhr.open('GET', '<?php echo admin_url('admin-ajax.php'); ?>?action=filter_posts_tipo&tipo=' + tipo + '&orderby=' + orderby, true);
      xhr.send();
    }

    tipoLinks.forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault();

        var selectedTipo = link.getAttribute('href').replace(/\/tipo\//, '');
        var selectedTitle = link.textContent;
        var selectedOrderby = orderbySelect.value;
        updatePosts(selectedTipo, selectedTitle, selectedOrderby);

        // Adiciona a classe "active" ao filtro clicado
        tipoLinks.forEach(function (link) {
          link.classList.remove('active');
        });
        link.classList.add('active');

        history.pushState(null, '', link.getAttribute('href'));
      });
    });

    orderbySelect.addEventListener('change', function () {
      var selectedTipo = document.querySelector('.categoria a.active').getAttribute('href').replace(/\/tipo\//, '');
      var selectedTitle = document.querySelector('.categoria a.active').textContent;
      var selectedOrderby = orderbySelect.value;
      updatePosts(selectedTipo, selectedTitle, selectedOrderby);
    });

    window.addEventListener('popstate', function () {
      var selectedTipo = window.location.pathname.replace(/\/tipo\//, '');
      var selectedTitle = document.querySelector('.categoria a[href$="/' + selectedTipo + '/"]').textContent;
      var selectedOrderby = orderbySelect.value;
      updatePosts(selectedTipo, selectedTitle, selectedOrderby);

      // Adiciona a classe "active" ao filtro correspondente ao estado do histórico
      tipoLinks.forEach(function (link) {
        link.classList.remove('active');
      });
      document.querySelector('.categoria a[href$="/' + selectedTipo + '/"]').classList.add('active');
    });
  });
</script>
-->
<?php get_footer(); ?>