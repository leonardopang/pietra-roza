<?php

$args_menu_desktop = array(
  'theme_localtion' => 'desktop'
);

$args_menu_mobile = array(
  'theme_localtion' => 'mobile'
);

$logoAlternative = get_field('logo_desk_alternativo', 'opt-logo');
$logo = get_field('logo_desk', 'opt-logo');
$logoMobile = get_field('logo_mobile', 'opt-logo');

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

$orangeHeader = is_home() || is_page('home') || is_page('sobre') || is_page('contato') ? 'header-orange' : 'header-white';

$logoSelect = is_home() || is_page('home') || is_page('sobre') || is_page('contato') ? $logo : $logoAlternative;

?>

<body <?php body_class('dp8_theme') ?>>
  <?php wp_body_open() ?>
  <header class="header <?= $orangeHeader ?> js-animaion">
    <div class="header-middle">
      <div class="container-wrap">
        <div class="header-middle_container">
          <div class="header-logo logo-container">
            <a href="<?= site_url() ?>">
              <?php if (wp_is_mobile()): ?>
                <img src="<?= $logoMobile ?>" class="logo-mobile" alt="Pietra Roza">
              <?php else: ?>
                <img src="<?= $logoSelect ?>" alt="Pietra Roza">
              <?php endif; ?>
            </a>
          </div>
          <div class="header-menu">
            <nav class="menu-desk">
              <?php wp_nav_menu($args_menu_desktop); ?>
              <div class="social-icon-header">
                <a href="<?php the_field('instagram', 'opt-logo') ?>" title="instagram" target="_blank">
                  <span class="bullet-social">
                    <?= get_svg_content('instagram'); ?>
                  </span>
                </a>
                <a href="<?php the_field('facebook', 'opt-logo') ?>" title="linkedin" target="_blank">
                  <span class="bullet-social">
                    <?= get_svg_content('linkedin'); ?>
                  </span>
                </a>
              </div>
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
        <div class="social-icon-header">
          <a href="" title="instagram" target="_blank">
            <span class="bullet-social">
              <?= get_svg_content('instagram'); ?>
            </span>
          </a>
          <a href="" title="linkedin" target="_blank">
            <span class="bullet-social">
              <?= get_svg_content('linkedin'); ?>
            </span>
          </a>
        </div>
      </div>
    </nav>
  </header>
  <main>