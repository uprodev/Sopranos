<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="top-line">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="left p-0">

            <?php wp_nav_menu( array(
              'theme_location'  => 'header-1',
              'container'       => '',
              'items_wrap'      => '<ul class="top-menu d-flex">%3$s</ul>'
            )); ?>

          </div>

          <?php if ($field = get_field('logo_h', 'option')): ?>
            <div class="logo-wrap d-flex justify-content-center p-0">
              <a href="<?= get_home_url() ?>">

                <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
                  <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
                <?php else: ?>
                  <?= wp_get_attachment_image($field['ID'], 'full') ?>
                <?php endif ?>

              </a>
            </div>
          <?php endif ?>
          
          <div class="right d-flex justify-content-end p-0">

            <?php wp_nav_menu( array(
              'theme_location'  => 'header-2',
              'container'       => '',
              'items_wrap'      => '<ul class="top-menu d-flex justify-content-end align-items-center menu_with_border">%3$s</ul>'
            )); ?>

            <div class="open-menu d-flex justify-content-end d-xl-none">
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </header>

  <div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="top">
      <div class="close-menu">
        <a href="#"><i class="fal fa-times"></i></a>
      </div>
    </div>
    <div class="wrap">

      <?php if ($field = get_field('logo_h', 'option')): ?>
        <div class="logo-wrap">
          <a href="<?= get_home_url() ?>">

            <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
              <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
            <?php else: ?>
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            <?php endif ?>

          </a>
        </div>
      <?php endif ?>
      
      <nav class="mob-menu-wrap">

        <?php wp_nav_menu( array(
          'theme_location'  => 'header-1',
          'container'       => '',
          'items_wrap'      => '<ul class="mob-menu p-0">%3$s</ul>'
        )); ?>

        <?php wp_nav_menu( array(
          'theme_location'  => 'header-2',
          'container'       => '',
          'items_wrap'      => '<ul class="mob-menu p-0 menu_with_border">%3$s</ul>'
        )); ?>

      </nav>
    </div>
  </div>

  <main>