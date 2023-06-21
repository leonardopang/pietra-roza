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

<section class="about section-content">
  <div class="container-wrap">
    <div class="about-container grid two_grids">
      <div class="about-container__item">
        <div class="image-container fav-icon-logo">
          <img src="<?= site_url() ?>/wp-content/uploads/fav-icon.png" alt="Pietra Roza">
        </div>
        <div class="title-container">
          <span>Mármores e Revestimentos →</span>
          <h2>Pietra Roza</h2>
        </div>
        <div class="text-container">
          <p>Da junção das marcas Dimarmo Mármores e Granitos e Petra Design Mármores e Interiores, nasceu a Pietra Roza
            Mármores e Revestimentos, empresa destaque na área de pedras naturais e fabricadas. Atuamos no setor há mais
            de 25 anos com equipe qualificada, de confiança e treinada para sempre atender às necessidades dos clientes
            com o melhor do design.</p>
        </div>
        <div class="button-container">
          <a href="" class="button button-orange">Conheça mais <span class="arrow-button">→</span></a>
        </div>
      </div>
      <div class="about-container__item grid two_grids">
        <div class="about-container__item-service">
          <a href="">
            <img src="<?= site_url() ?>/wp-content/uploads/produtos-thumbnail.jpg" alt="">
            <div class="content">
              <h3>Produtos</h3>
              <span>Veja mais →</span>
            </div>
          </a>
        </div>
        <div class="about-container__item-service">
          <a href="">
            <img src="<?= site_url() ?>/wp-content/uploads/projeto-thumbnail.jpg" alt="">
            <div class="content">
              <h3>Projetos</h3>
              <span>Veja mais →</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-content obras">
  <div class="container-wrap">
    <div class="obras-container">
      <div class="title-container">
        <span>Nossas obras →</span>
        <h2>Projetos e Mostras de decoração</h2>
      </div>
      <div class="obras-container__posts">
        <?php if (wp_is_mobile()): ?>
          <div class="obras-container__posts-slider"></div>
        <?php else: ?>
          <div class="obras-container__posts-grid">
            <div class="obras-container__posts-grid-item item-1x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
            <div class="obras-container__posts-grid-item item-1x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra-2.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
            <div class="obras-container__posts-grid-item item-2x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra-3.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
            <div class="obras-container__posts-grid-item item-2x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra-4.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
            <div class="obras-container__posts-grid-item item-1x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra-5.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
            <div class="obras-container__posts-grid-item item-1x">
              <img src="<?= site_url() ?>/wp-content/uploads/nome-obra-6.jpg" alt="">
              <a href="">
                <div class="content">
                  <h3>nome da obra</h3>
                </div>
              </a>
            </div>
          </div>
        <?php endif; ?>
        <div class="button-container">
          <a href="" class="button button-orange">Conheça <span class="arrow-button">→</span></a>
        </div>
      </div>
    </div>
</section>
<section class="section-content about-products">
  <div class="container-wrap">
    <div class="about-products-container grid two_grids">
      <div class="about-products-container__item">
        <div class="about-products-container__slide">
          <img src="<?= site_url() ?>/wp-content/uploads/product-thumbnail.jpg" alt="">
        </div>
      </div>
      <div class="about-products-container__item">
        <div class="title-container">
          <h2>Produtos</h2>
        </div>
        <div class="text-container">
          <p>Fornecemos pedras ornamentais diversas como mármores, granitos, limestones, quartzitos, fabricados em
            quartzo e lâminas sinterizadas e ultracompactas para serviços em obras (bancadas, pisos, fachadas, lareiras,
            escadas, dentre outros) ou para mobiliário (tampos mosaicos, mesas laterais, aparadores, mesas de jantar,
            mesas de centro e objetos decorativos) de desenho exclusivo ou do cliente.</p>
        </div>
        <div class="button-container">
          <a href="" class="button button-orange">Conhecer produtos <span class="arrow-button">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-content about-company">
  <div class="container-wrap">
    <div class="about-company-container">
      <div class="title-container">
        <h2>Sobre</h2>
      </div>
      <div class="about-company-container__grid grid three_grids">
        <div class="about-company-container__grid-item">
          <div class="image-container">
            <img src="<?= site_url() ?>/wp-content/uploads/maquinario-thumbnail.jpg" alt="">
          </div>
          <div class="content">
            <h3>Maquinários</h3>
            <div class="text">
              <p>Investimos em tecnologia e inovação com maquinário de última geração para aprimorar nossos processos
                produtivos e garantir resultados com maior precisão.</p>
            </div>
          </div>
        </div>
        <div class="about-company-container__grid-item">
          <div class="image-container">
            <img src="<?= site_url() ?>/wp-content/uploads/sustentabilidade-thumbnail.png" alt="">
          </div>
          <div class="content">
            <h3>Sustentabilidade</h3>
            <div class="text">
              <p>Temos compromisso com a natureza buscando práticas responsáveis em nossas operações, desde a seleção de
                fornecedores sustentáveis até a adoção de medidas de reaproveitamento de recursos naturais e resíduos.
              </p>
            </div>
          </div>
        </div>
        <div class="about-company-container__grid-item">
          <div class="image-container">
            <img src="<?= site_url() ?>/wp-content/uploads/equipe-thumbnail.jpg" alt="">
          </div>
          <div class="content">
            <h3>Equipe</h3>
            <div class="text">
              <p>Nossa equipe é qualificada para ter um ótimo atendimento, compreensão dos projetos dos profissionais de
                construção, execução de desenhos técnicos ao cliente
                e estar sempre atenta as novidades
                do mercado.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="button-container">
        <a href="" class="button button-orange">Quero conhecer mais <span class="arrow-button">→</span></a>
      </div>
    </div>
  </div>
</section>
<section class="parceiros">
  <div class="container-wrap">
    <div class="parceiros-container">
      <div class="title-container">
        <h2>Nossos Parceiros</h2>
        <span>A Pietra Roza trabalha com varios parceiros que ajudam você a ter o projeto dos seus sonhos</span>
      </div>
      <div class="paceiros-container__grid grid four_grids">
        <div class="paceiros-container__grid-item">
          <div class="image-container">
            <img src="<?= site_url() ?>/wp-content/uploads/only-icon-logo-white.png" alt="">
          </div>
          <div class="content">
            <h3>Nome do parceiro</h3>
            <span>Arquiteto</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="feedback">
  <div class="container-wrap">
    <div class="feedback-container">
      <div class="feedback-grid">
        <div class="feedback-grid__item feedback-grid__item-content">
          <div class="title-container">
            <h2>Feedback dos Clientes</h2>
            <span>Veja o depoimento de clientes e arquitetos</span>
          </div>
          <?php if (!wp_is_mobile()): ?>
            <div class="control-slide-container">
              <span class="arrow arrows-left">
                <?= get_svg_content('icon-arrow-chevron-left'); ?>
              </span>
              <span class="arrow arrows-right">
                <?= get_svg_content('icon-arrow-chevron-right'); ?>
              </span>
            </div>
          <?php endif; ?>
        </div>
        <div class="feedback-grid__item feedback-grid__item-slider">
          <div class="feedback-slider"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="certificacoes">
  <div class="container-wrap">
    <div class="certificacoes-container">
      <div class="title-container">
        <h2>Certificações</h2>
      </div>
      <div class="certificacoes-grid grid three_grids">
        <div class="certificacoes-grid__item">
          <img src="<?= site_url() ?>/wp-content/uploads/only-icon-logo.png" alt="">
          <div class="content">
            <h3>Nome da certificação</h3>
          </div>
        </div>
        <div class="certificacoes-grid__item">
          <img src="<?= site_url() ?>/wp-content/uploads/only-icon-logo.png" alt="">
          <div class="content">
            <h3>Nome da certificação</h3>
          </div>
        </div>
        <div class="certificacoes-grid__item">
          <img src="<?= site_url() ?>/wp-content/uploads/only-icon-logo.png" alt="">
          <div class="content">
            <h3>Nome da certificação</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>