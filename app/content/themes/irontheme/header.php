<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">
    <div class="container">

      <div class="logo header__logo">
        <?php the_custom_logo(); ?>
      </div>

      <nav class="nav header__nav">
        <ul class="nav-list">
          <li class="li">
            <a href="#about">О компании</a>
          </li>
          <li>
            <a href="#services">Услуги</a>
          </li>
          <li>
            <a href="#how-work">Схема работы</a>
          </li>
          <li>
            <a href="#partners">Клиенты/отзывы</a>
          </li>
          <li>
            <a href="#calculate">Рассчитать стоимость</a>
          </li>
          <li>
            <a href="#contact">Контакты</a>
          </li>
        </ul>

        <div class="phone nav__phone">
          <a href="<?php echo preg_replace('![^0-9/+]+!', '', get_field('phone', 'option')); ?>" class="phone__tel"><?php the_field('phone', 'option'); ?></a><br>
          <a href="#" class="phone__callback text-gradient callback_open">Заказать обратный звонок</a>
        </div>
      </nav>

      <div class="nav-overlay"></div>

      <div class="phone header__phone">
        <a href="<?php echo preg_replace('![^0-9/+]+!', '', get_field('phone', 'option')); ?>" class="phone__tel"><?php the_field('phone', 'option'); ?></a><br>
        <a href="#" class="phone__callback text-gradient callback_open">Заказать обратный звонок</a>
      </div>

      <button type="button" class="nav-toggle">
        <span class="nav-toggle__line"></span>
      </button>

    </div>
  </header><!-- /.header-->

  <div class="content">