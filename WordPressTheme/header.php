<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__inner">
      <figure class="header__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-big.png" alt="そざい村">
      </figure>
      <div class="header__content">
        <div class="header__search">
          <?php get_search_form(); ?>
        </div>
        <nav class="header__nav">
          <ul class="header__navList">
            <li class="header__navItem home">
              <a href="<?php echo home_url('/'); ?>">ホーム</a>
            </li>
            <li class="header__navItem rule">
              <a href="<?php echo home_url('rule'); ?>">利用規約</a>
            </li>
            <li class="header__navItem profile">
              <a href="<?php echo home_url('profile'); ?>">プロフィール</a>
            </li>
            <li class="header__navItem contact">
              <a href="<?php echo home_url('contact'); ?>">お問い合わせ</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>