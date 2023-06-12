<?php //Template name: Home Page ?>
<?php
global $post;
$post_slug = $post->post_name;
?>
<?php get_header() ?>
<section class="hero-header hero-header--<?= $post_slug ?>">
  <div class="container-wrap">
    <div class="hero-header_container grid two_grids"
      style="background-image: linear-gradient(180deg, #fff0 0%, #000000b0 100%), url(<?= site_url() ?>/wp-content/uploads/bg-hero-heder.png);">
      <div class="hero-header--content">
        <div class="title-container">
          <h1>Corra para Sempre</h1>
          <h2>Autocuidado e Performance</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about section-content">
  <div class="container-wrap">
    <div class="about_container grid two_grids">
      <div class="about--image">
        <img src="<?= site_url() ?>/wp-content/uploads/about-company.png" alt="">
      </div>
      <div class="about--content">
        <div class="title-container">
          <h2>A Header for your Landing Page</h2>
        </div>
        <div class="text-container">
          <p>A Corrida Natural é uma Assessoria Esportiva que tem como missão promover o bem estar e a qualidade de vida
            dos alunos através da prática de corrida e de movimentação. Nosso compromisso é com a vida do atleta.</p>
          <p>Nossa equipe conta com conhecimento técnico e científico para que o aluno atinja seus objetivos e seus
            sonhos com maior segurança.</p>
          <p><b>
              Temos como missão fazer com que o atleta tenha condições de correr para sempre! </b></p>
          <p><b>
              Para isso, noções de auto cuidado e respeito corporal são transmitidos a cada treino. </b></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="calling section-content">
  <div class="container-wrap">
    <div class="calling_container">
      <div class="title-container text-center">
        <h2>A Header for your Landing Page</h2>
      </div>
      <div class="button-container">
        <a href="" class="button button-pink"> <?php get_svg('icon-send') ?> Contratar</a>
      </div>
    </div>
  </div>
</section>
<section class="about-card section-content">
  <div class="container-wrap">
    <div class="about-card_container">
      <div class="title-container text-center">
        <h2>Quem Somos</h2>
      </div>
      <div class="about-card_holder grid two_grids">
        <div class="about-card--item">
          <div class="card-header">
            <img src="<?= site_url() ?>/wp-content/uploads/valeri-durte-garci.png" alt="Valéria Duarte Garcia">
          </div>
          <div class="card-content">
            <h3 class="card-nome">Valéria Duarte Garcia</h3>
            <span class="card-formacao">Educação Física pela UNESP</span>
            <div class="text-container">
              <p>Certificado em Osteopatia pela Escola de Osteopatia de Madrid, Mestrando em Biomecânica da Corrida pela
                USP. Tem atuado de forma clínica com o público corredor com foco em prevenção de lesões e ministra
                cursos e palestras em todo o Brasil pela FBA. É Corredor, maratonista e ultra maratonista de montanha e
                ex-triatleta.</p>
            </div>
            <div class="button-container">
              <a href="" class="button button-card"><?php get_svg('icon-envelope') ?>Contato</a>
            </div>
          </div>
        </div>
        <div class="about-card--item">
          <div class="card-header">
            <img src="<?= site_url() ?>/wp-content/uploads/valeri-durte-garci.png" alt="Valéria Duarte Garcia">
          </div>
          <div class="card-content">
            <h3 class="card-nome">Bruno Mascella Rodrigues</h3>
            <span class="card-formacao">Fisioterapeuta pela UNIMEP</span>
            <div class="text-container">
              <p>Certificado em Osteopatia pela Escola de Osteopatia de Madrid, Mestrando em Biomecânica da Corrida pela
                USP. Tem atuado de forma clínica com o público corredor com foco em prevenção de lesões e ministra
                cursos e palestras em todo o Brasil pela FBA. É Corredor, maratonista e ultra maratonista de montanha e
                ex-triatleta.
              </p>
            </div>
            <div class="button-container">
              <a href="" class="button button-card"><?php get_svg('icon-envelope') ?>Contato</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="want-participate section-content">
  <div class="container-wrap">
    <div class="want-participate_container">
      <div class="title-container text-center">
        <h2>Quero Participar</h2>
      </div>
      <div class="description-container text-center">
        <span class="description">A corrida Natural Assessoria esportiva tem como objetivo promover a qualidade de vida
          através da prática esportiva.Com conhecimento técnico e cientifico, estamos preparados para te conduzir ao seu
          objetivo de forma segura e consciente.</span>
        <p>Confira os principais benefícios de treinar com a Corrida Natural:</p>
      </div>
      <div class="want-participate-box grid three_grids">

        <div class="want-participate-box--item">
          <div class="want-participate-box--header">
            <img src="<?= site_url() ?>/wp-content/uploads/bg-box-participar.png" alt="">
            <div class="box-number">1</div>
          </div>
          <div class="want-participate-box--content">
            <h3>Entrevista</h3>
            <span>Com o seu treinador, que saberá dos seus objetivos e necessidades.</span>
          </div>
        </div>
        <div class="want-participate-box--item">
          <div class="want-participate-box--header">
            <img src="<?= site_url() ?>/wp-content/uploads/bg-box-participar.png" alt="">
            <div class="box-number">2</div>
          </div>
          <div class="want-participate-box--content">
            <h3>TREINO</h3>
            <span>Com o seu treinador, que saberá dos seus objetivos e necessidades.</span>
          </div>
        </div>
        <div class="want-participate-box--item">
          <div class="want-participate-box--header">
            <img src="<?= site_url() ?>/wp-content/uploads/bg-box-participar.png" alt="">
            <div class="box-number">3</div>
          </div>
          <div class="want-participate-box--content">
            <h3>CONTROLE DE CARGA</h3>
            <span>Com o seu treinador, que saberá dos seus</span>
          </div>
        </div>
        <div class="want-participate-box--item">
          <div class="want-participate-box--header">
            <img src="<?= site_url() ?>/wp-content/uploads/bg-box-participar.png" alt="">
            <div class="box-number">4</div>
          </div>
          <div class="want-participate-box--content">
            <h3>PLANILHA</h3>
            <span>Com o seu treinador, que saberá dos seus</span>
          </div>
        </div>
        <div class="want-participate-box--item">
          <div class="want-participate-box--header">
            <img src="<?= site_url() ?>/wp-content/uploads/bg-box-participar.png" alt="">
            <div class="box-number">5</div>
          </div>
          <div class="want-participate-box--content">
            <h3>ACOMPANHAMENTO</h3>
            <span>Com o seu treinador, que saberá dos seus</span>
          </div>
        </div>
        <div class="want-participate-box--item">
          <div class="want-participate-box--header">
            <img src="<?= site_url() ?>/wp-content/uploads/bg-box-participar.png" alt="">
            <div class="box-number">6</div>
          </div>
          <div class="want-participate-box--content">
            <h3>TREINOS ESPECIAIS</h3>
            <span>Com o seu treinador, que saberá dos seus</span>
          </div>
        </div>
        <div class="want-participate-box--item">
          <div class="want-participate-box--header">
            <img src="<?= site_url() ?>/wp-content/uploads/bg-box-participar.png" alt="">
            <div class="box-number">7</div>
          </div>
          <div class="want-participate-box--content">
            <h3>UNIFORME EQUIPE</h3>
            <span>Com o seu treinador, que saberá dos seus</span>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="plans section-content">
  <div class="container-wrap">
    <div class="plans_container">

      <div class="title-container text-center">
        <h2>Escolha o seu Plano</h2>
      </div>

      <div class="plans-box grid three_grids">

        <div class="plans--item" data-plan="basico">
          <div class="plans-header">
            <span class="price">$99</span>
            <span class="month">/ mês</span>
          </div>
          <div class="plans-title">
            <h3>PLANO BÁSICO</h3>
          </div>
          <div class="plans-descriptions">
            <span>Faucibus est urna, cursus scelerisque eget senectus. </span>
          </div>
          <div class="plans-pack-content">
            <ul>
              <li>Faucibus est urna </li>
              <li>Cursus scelerisque </li>
              <li>Eget senectus</li>
              <li>Nibh sit viverra vitae</li>
              <li>Morbi ut tristique </li>
              <li>Risus erat et </li>
              <li>Est malesuada. </li>
            </ul>
          </div>
          <div class="button-container">
            <a href="" class="button button-plans">Contratar </a>
          </div>
        </div> <!-- End Plan Item -->

        <div class="plans--item" data-plan="premium">
          <div class="plans-header">
            <span class="price">$99</span>
            <span class="month">/ mês</span>
          </div>
          <div class="plans-title">
            <h3>PLANO PREMIUM</h3>
          </div>
          <div class="plans-descriptions">
            <span>Faucibus est urna, cursus scelerisque eget senectus. </span>
          </div>
          <div class="plans-pack-content">
            <ul>
              <li>Faucibus est urna </li>
              <li>Cursus scelerisque </li>
              <li>Eget senectus</li>
              <li>Nibh sit viverra vitae</li>
              <li>Morbi ut tristique </li>
              <li>Risus erat et </li>
              <li>Est malesuada. </li>
            </ul>
          </div>
          <div class="button-container">
            <a href="" class="button button-plans">Contratar </a>
          </div>
        </div> <!-- End Plan Item -->

        <div class="plans--item" data-plan="premium-plus">
          <div class="plans-header">
            <span class="price">$99</span>
            <span class="month">/ mês</span>
          </div>
          <div class="plans-title">
            <h3>PLANO PREMIUM PLUS</h3>
          </div>
          <div class="plans-descriptions">
            <span>Faucibus est urna, cursus scelerisque eget senectus. </span>
          </div>
          <div class="plans-pack-content">
            <ul>
              <li>Faucibus est urna </li>
              <li>Cursus scelerisque </li>
              <li>Eget senectus</li>
              <li>Nibh sit viverra vitae</li>
              <li>Morbi ut tristique </li>
              <li>Risus erat et </li>
              <li>Est malesuada. </li>
            </ul>
          </div>
          <div class="button-container">
            <a href="" class="button button-plans">Contratar </a>
          </div>
        </div> <!-- End Plan Item -->
      </div>
    </div>
  </div>
</section>
<section class="services section-content">
  <div class="container-wrap">
    <div class="services_container">
      <div class="title-container">
        <h2>Outros Serviços</h2>
      </div>
      <div class="services-flex-box">
        <div class="services--card">
          <div class="image-container">
            <?php get_svg('icon-center-bullet') ?>
          </div>
          <div class="title-container">
            <h4>Fisioterapia Especializada</h4>
          </div>
          <div class="text-container">
            <p>Faucibus est urna, cursus scelerisque eget senectus. Nibh sit viverra vitae a. Morbi ut tristique risus
              erat et malesuada.</p>
          </div>
        </div>
        <div class="services--card">
          <div class="image-container">
            <?php get_svg('icon-center-bullet') ?>
          </div>
          <div class="title-container">
            <h4>Fisioterapia Especializada</h4>
          </div>
          <div class="text-container">
            <p>Faucibus est urna, cursus scelerisque eget senectus. Nibh sit viverra vitae a. Morbi ut tristique risus
              erat et malesuada.</p>
          </div>
        </div>
        <div class="services--card">
          <div class="image-container">
            <?php get_svg('icon-center-bullet') ?>
          </div>
          <div class="title-container">
            <h4>Fisioterapia Especializada</h4>
          </div>
          <div class="text-container">
            <p>Faucibus est urna, cursus scelerisque eget senectus. Nibh sit viverra vitae a. Morbi ut tristique risus
              erat et malesuada.</p>
          </div>
        </div>
        <div class="services--card">
          <div class="image-container">
            <?php get_svg('icon-center-bullet') ?>
          </div>
          <div class="title-container">
            <h4>Fisioterapia Especializada</h4>
          </div>
          <div class="text-container">
            <p>Faucibus est urna, cursus scelerisque eget senectus. Nibh sit viverra vitae a. Morbi ut tristique risus
              erat et malesuada.</p>
          </div>
        </div>
        <div class="services--card">
          <div class="image-container">
            <?php get_svg('icon-center-bullet') ?>
          </div>
          <div class="title-container">
            <h4>Fisioterapia Especializada</h4>
          </div>
          <div class="text-container">
            <p>Faucibus est urna, cursus scelerisque eget senectus. Nibh sit viverra vitae a. Morbi ut tristique risus
              erat et malesuada.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="calling-contact section-content">
  <div class="container-wrap">
    <div class="calling-contact_container">
      <div class="title-container text-center">
        <h2>Entrar em contato</h2>
      </div>
      <div class="button-container">
        <a href="" class="button button-contact">WhatsApp</a>
        <a href="" class="button button-contact">Email</a>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>