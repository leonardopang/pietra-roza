<?php

$args_menu_desktop = array(
  'theme_localtion' => 'desktop'
);

$args_menu_mobile = array(
  'theme_localtion' => 'mobile'
);


?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>
<?php

$orangeHeader = is_home() ? 'header-orange' : 'header-white';

?>

<body <?php body_class('dp8_theme') ?>>
  <?php wp_body_open() ?>
  <header class="header <?= $orangeHeader ?> js-animaion">
    <div class="header-middle">
      <div class="container-wrap">
        <div class="header-middle_container">
          <div class="header-logo logo-container">
            <a href="<?= site_url() ?>">
              <img src="<?= site_url() ?>/wp-content/uploads/logo-white.png" alt="">
            </a>
          </div>
          <div class="header-menu">
            <nav class="menu-desk">
              <?php wp_nav_menu($args_menu_desktop); ?>
            </nav>
          </div>
          <div class="hamburguer-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
        </div>
      </div>
    </div>
    <nav class="menu-mobile">
      <div class="container-wrap">
        <span class="close-menu">
          X
        </span>
        <div class="header-logo logo-container">
          <a href="<?= site_url() ?>">
            <img src="<?= site_url() ?>/wp-content/uploads/logo-white.png" alt="">
          </a>
        </div>
        <?php wp_nav_menu($args_menu_mobile); ?>
      </div>
    </nav>
  </header>
  <main>