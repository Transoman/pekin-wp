<?php
/**
 * Template Name: Главная
 */
get_header(); ?>

<?php

if ( have_rows('home_layout') ):

  while ( have_rows('home_layout') ) : the_row();

    if ( get_row_layout() == 'hero' ): ?>

      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <?php the_sub_field('text'); ?>
            <div class="hero__typed-text">
              <p>Отправка сборных грузов</p>
              <p>Негабаритные перевозки</p>
              <p>Выделенный транспорт</p>
              <p>От Калининграда до Владивостока</p>
            </div>
            <div class="hero__typed-wrap">
              <span class="hero__typed"></span>
            </div>
            <a href="#" class="btn calculate-modal_open">Оставить заявку на расчет <br>стоимости перевозки</a>
          </div>
        </div>
      </section>

      <div class="container">
        <div class="hero-adv">

          <div class="hero-adv__item">
            <div class="hero-adv__inner">
              <div class="hero-adv__icon-wrap">
                <img src="<?php echo THEME_URL; ?>/images/content/100.svg" height="55" alt="">
              </div>
              <b class="hero-adv__title">Сохранность груза</b>
            </div>
          </div>

          <div class="hero-adv__item">
            <div class="hero-adv__inner">
              <div class="hero-adv__icon-wrap">
                <img src="<?php echo THEME_URL; ?>/images/content/hero-adv-1.svg" width="55" alt="">
              </div>
              <b class="hero-adv__title">Надежные партнеры– <br><span>страховые компании</span></b>
            </div>
          </div>

          <div class="hero-adv__item">
            <div class="hero-adv__inner">
              <div class="hero-adv__icon-wrap">
                <img src="<?php echo THEME_URL; ?>/images/content/hero-adv-2.svg" width="55" alt="">
              </div>
              <b class="hero-adv__title">Отправка <br><span>в течение 24 часов</span></b>
            </div>
          </div>

        </div>
      </div>

    <?php endif;

  endwhile;

else :

  // no layouts found

endif;

?>

<section class="problem">
  <div class="container">
    <h2 class="section-title">К нам обращаются в случаях, когда…</h2>

    <div class="problem-list">
      <div class="problem-list__item">
        <span class="problem-list__number">01</span>
        <h3 class="problem-list__title">…Важно быстро <br>доставить груз</h3>
        <p>из точки А в точку Б по России, а своего автопарка у компании нет, или нет машин нужной грузоподъемности</p>
      </div>
      <div class="problem-list__item">
        <span class="problem-list__number">02</span>
        <h3 class="problem-list__title">…Грузоперевозка нужна «вчера»</h3>
      </div>
      <div class="problem-list__item">
        <span class="problem-list__number">03</span>
        <h3 class="problem-list__title">…Нужно перевезти негабаритный <br>груз —</h3>
        <p>металлоконструкцию, оборудование</p>
      </div>
      <div class="problem-list__item">
        <span class="problem-list__number">04</span>
        <h3 class="problem-list__title">…Груза немного,</h3>
        <p>металлоконструкцию, и есть смысл отправлять его на в составе сборного груза для экономии средств</p>
      </div>
    </div>
    <!-- /.problem-list -->

    <div class="row">
      <div class="col-lg-5">
        <div class="problem__note">Мы успешно <br>решаем даже сложные <br>логистические задачи</div>
      </div>
      <div class="col-lg-7">
        <div class="problem__row">
          <div class="icon-box">
            <div class="icon-box__icon-wrap">
              <img src="<?php echo THEME_URL; ?>/images/content/track.svg" width="80" alt="">
            </div>
            <b class="icon-box__title">Надежный автопарк</b>
            <p>Вся техника проходит <br>предрейсовый и после рейсовый <br>технический осмотр.</p>
          </div>
          <div class="icon-box">
            <div class="icon-box__icon-wrap">
              <img src="<?php echo THEME_URL; ?>/images/content/cargo-track.svg" width="80" alt="">
            </div>
            <b class="icon-box__title">Любые типы автомобилей</b>
            <p>От газели до низкорамной площадки.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="territory">
  <div class="container">
    <h2 class="section-title">Территория <br>нашей ответственности ― <br>вся Россия</h2>
    <img src="<?php echo THEME_URL; ?>/images/content/map.png" class="territory__map" alt="">
  </div>
</section>

<section class="calculate" id="calculate">
  <div class="container">
    <div class="calculate__form-wrap">
      <h3>Рассчитать <br><span>стоимость грузоперевозки</span></h3>
      <?php echo do_shortcode('[contact-form-7 id="6" title="Расчет стоимости грузоперевозки"]')?>
    </div>
    <div class="calculate__adv">
      <div class="icon-box">
        <div class="icon-box__icon-wrap">
          <img src="<?php echo THEME_URL; ?>/images/content/calculations.svg" width="70" alt="">
        </div>
        <b class="icon-box__title">Минимизируем затраты</b>
      </div>
      <div class="icon-box">
        <div class="icon-box__icon-wrap">
          <img src="<?php echo THEME_URL; ?>/images/content/route.svg" width="70" alt="">
        </div>
        <b class="icon-box__title">Разрабатываем индивидуальные маршруты</b>
      </div>
    </div>
  </div>
</section>

<section class="about" id="about">
  <div class="container">
    <h2 class="section-title" data-title="Только факты">Транспортно-экспедиционная <br>компания «Пекин»:</h2>

    <div class="about__wrap">
      <div class="about-number-list">
        <div class="about-number-list__item">
          <b class="about-number-list__number">9 лет</b>
          <p>успешной работы <br>на логистическом рынке России</p>
        </div>
        <div class="about-number-list__item">
          <b class="about-number-list__number">9000+</b>
          <p>заказов выполнено</p>
        </div>
        <div class="about-number-list__item">
          <b class="about-number-list__number">100+</b>
          <p>отличных отзывов</p>
        </div>
        <div class="about-number-list__item">
          <b class="about-number-list__number">85%</b>
          <p>клиентов становятся постоянными</p>
        </div>
      </div>
      <!-- /.about-number-list -->

      <div class="about__right">
        <p class="about__note">По запросу <br>организуем грузоперевозки <br>водным и авиационным транспортом</p>

        <ul class="list-check">
          <li>Сборные грузы</li>
          <li>Негабаритные грузы</li>
          <li>Опасные грузы</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php

if ( have_rows('home_layout') ):

  while ( have_rows('home_layout') ) : the_row();

    if ( get_row_layout() == 'services' ): ?>

      <section class="services" id="services">
        <div class="container">
          <h2 class="section-title" data-title="Услуги"><?php the_sub_field('title'); ?></h2>
          
          <?php if (have_rows('list')): ?>
            <div class="services-list">
              <?php while (have_rows('list')): the_row(); ?>
                <div class="services-list__item">
                  <?php echo wp_get_attachment_image(get_sub_field('img'), 'serv'); ?>
                  <div class="services-list__content">
                    <h3 class="services-list__title"><?php the_sub_field('title'); ?></h3>
                    <div class="services-list__text">
                      <?php the_sub_field('text'); ?>
                    </div>
                    <a href="#" class="btn order-services_open" data-service-name="<?php the_sub_field('title'); ?>">Заказать</a>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </section>

    <?php endif;

  endwhile;

else :

  // no layouts found

endif;

?>

<section class="how-work" id="how-work">
  <div class="container">
    <h2 class="section-title" data-title="Схема работы">Как мы действуем</h2>
    
    <div class="how-work-list">
      <div class="how-work-list__item">
        <div class="how-work-list__inner">
          <div class="how-work-list__icon-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/work-1.svg" width="40" alt="">
          </div>
          <h3 class="how-work-list__title">Получаем заявку</h3>
          <p>Клиент оставляет заявку <br>на сайте</p>
          <span class="how-work-list__dot"></span>
          <span class="how-work-list__number">01</span>
        </div>
      </div>
      <div class="how-work-list__item">
        <div class="how-work-list__inner">
          <div class="how-work-list__icon-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/work-2.svg" width="40" alt="">
          </div>
          <h3 class="how-work-list__title">Подбираем автотранспорт</h3>
          <p>Предлагаем специализированый транспорт для грузоперевозок</p>
          <span class="how-work-list__dot"></span>
          <span class="how-work-list__number">02</span>
        </div>
      </div>
      <div class="how-work-list__item">
        <div class="how-work-list__inner">
          <div class="how-work-list__icon-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/work-3.svg" width="40" alt="">
          </div>
          <h3 class="how-work-list__title">Разрабатываем схему/маршрут</h3>
          <p>Подбираем найболее удобный маршрут для грузоперевозки</p>
          <span class="how-work-list__dot"></span>
          <span class="how-work-list__number">03</span>
        </div>
      </div>
      <div class="how-work-list__item">
        <div class="how-work-list__inner">
          <div class="how-work-list__icon-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/work-4.svg" width="40" alt="">
          </div>
          <h3 class="how-work-list__title">Согласуем с вами детали</h3>
          <p>Стоимость, сроки, даты, дополнительные услуги</p>
          <span class="how-work-list__dot"></span>
          <span class="how-work-list__number">04</span>
        </div>
      </div>
      <div class="how-work-list__item">
        <div class="how-work-list__inner">
          <div class="how-work-list__icon-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/work-5.svg" width="40" alt="">
          </div>
          <h3 class="how-work-list__title">Подписываем договор</h3>
          <p>Подписываем все необходимые документы</p>
          <span class="how-work-list__dot"></span>
          <span class="how-work-list__number">05</span>
        </div>
      </div>
      <div class="how-work-list__item">
        <div class="how-work-list__inner">
          <div class="how-work-list__icon-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/work-6.svg" width="40" alt="">
          </div>
          <h3 class="how-work-list__title">Доставляем груз <br>в пункт назначения</h3>
          <p>Организуем отправку груза</p>
          <span class="how-work-list__dot"></span>
          <span class="how-work-list__number">06</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="partners" id="partners">
  <div class="container">
    <h2 class="section-title text-center">Нам доверяют компании <br>из разных уголков страны</h2>
    
    <div class="partners-list">
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-1.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-2.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-3.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-4.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-5.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-6.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-7.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-8.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-9.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-10.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-11.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-12.jpg" alt="">
      </div>
      <div class="partners-list__item">
        <img src="<?php echo THEME_URL; ?>/images/content/logo-13.jpg" alt="">
      </div>
    </div>
    
    <div class="text-center">
      <a href="#" class="btn calculate-modal_open">Оставить заявку на расчет <br>стоимости перевозки</a>
    </div>

  </div>
</section>

<?php
$testimonials = get_testimonials(-1);
 if ($testimonials->have_posts()): ?>
<section class="testimonial">
  <div class="container">
    <h2 class="section-title" data-title="Клиенты говорят">Отзывы о нашей работе</h2>

    <div class="testimonial-slider swiper-container">
      <div class="swiper-wrapper">
        <?php while ($testimonials->have_posts()): $testimonials->the_post(); ?>
          <div class="testimonial-slider__item swiper-slide">
            <h3 class="testimonial-slider__title"><?php the_title(); ?></h3>
            <span class="testimonial-slider__city"><?php the_field('city'); ?></span>
            <div class="testimonial-slider__content">
              <?php the_content(); ?>
            </div>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-controls">
        <div class="swiper-button-prev">
          <?php ith_the_icon('arrow-left'); ?>
        </div>
        <div class="swiper-button-next">
          <?php ith_the_icon('arrow-right'); ?>
        </div>
      </div>
    </div>
    
    <div class="text-center">
      <a href="#" class="btn review_open">Оставить отзыв</a>
    </div>

  </div>
</section>
<?php endif; ?>

<section class="contact" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xl-7 order-2 order-md-1">
        <div id="contact-map" class="contact__map"></div>
      </div>
      <div class="col-md-6 col-xl-5 order-1 order-md-2">
        <div class="contact__content">
          <h2 class="section-title">Как нас найти</h2>

          <?php if (get_field('address', 'option')): ?>
            <div class="contact__item">
              <p class="contact__item-label">Офис:</p>
              <p><?php the_field('address', 'option'); ?></p>
            </div>
          <?php endif; ?>

          <div class="contact__item">
            <p class="contact__item-label">Бесплатная линия:</p>
            <?php if (get_field('phone', 'option')): ?>
              <a href="tel:<?php echo preg_replace( '![^0-9\+]+!', '', get_field('phone', 'option') ); ?>"><?php the_field('phone', 'option'); ?></a>
            <?php endif; ?>
          </div>

          <div class="contact__item contact__item--email">
            <p class="contact__item-label">E-mail:</p>
            <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
          </div>

          <a href="#" class="btn callback_open">Обратный звонок</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
