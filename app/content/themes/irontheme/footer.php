  </div><!-- /.content -->

  <footer class="footer">
    <div class="container">
      <div class="row align-items-lg-end align-items-center">
        <div class="col-md-6 col-lg-5">
          <div class="logo footer__logo">
            <?php the_custom_logo(); ?>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <p class="policy">
            <a href="#" class="text-gradient docs_open">Скачать наши документы</a>
          </p>
          <?php if (get_field('policy', 'option')): ?>
            <p class="policy">
              <a href="<?php echo esc_url(get_field('policy', 'option')); ?>" target="_blank">Политика конфиденциальности</a>
            </p>
          <?php endif; ?>
        </div>
        <div class="col-lg-4">
          <p class="copy">Copyright &copy; 2011 - <?php echo date('Y'); ?> ООО Пекин</p>
        </div>
      </div>

      <p class="dev">Сделано в <a href="https://bestslide.pro" target="_blank">bestslide.pro</a></p>

    </div>
  </footer><!-- #colophon -->

</div><!-- /.wrapper -->

  <div id="callback" class="modal">
    <button type="button" class="modal__close callback_close"></button>

    <h3 class="modal__title">Обратный звонок</h3>

    <?php echo do_shortcode('[contact-form-7 id="50" title="Обратный звонок"]'); ?>
  </div>

  <div id="calculate-modal" class="modal">
    <button type="button" class="modal__close calculate-modal_close"></button>

    <h3 class="modal__title">Рассчитать <br>стоимость грузоперевозки</h3>

    <?php echo do_shortcode('[contact-form-7 id="6" title="Расчет стоимости грузоперевозки"]'); ?>
  </div>

  <div id="order-services" class="modal">
    <button type="button" class="modal__close order-services_close"></button>

    <h3 class="modal__title">Заказать услугу</h3>

    <?php echo do_shortcode('[contact-form-7 id="51" title="Заказ услуги"]'); ?>
  </div>

  <div id="review" class="modal">
    <button type="button" class="modal__close review_close"></button>

    <h3 class="modal__title">Оставте свой отзыв</h3>

    <?php echo do_shortcode('[contact-form-7 id="52" title="Отзыв"]'); ?>
  </div>

  <div id="docs" class="modal">
    <button type="button" class="modal__close docs_close"></button>

    <h3 class="modal__title">Наши документы</h3>

    <ul>
      <li><a href="<?php echo THEME_URL; ?>/docs/dogovor-zajavka-obrazec.doc" target="_blank">Договор-Заявка на предоставление транспортного средства</a></li>
      <li><a href="<?php echo THEME_URL; ?>/docs/dogovor-obrazec.rtf" target="_blank">Договор перевозки грузов автомобильным транспортом</a></li>
      <li><a href="<?php echo THEME_URL; ?>/docs/dogovor-obrazec.doc" target="_blank">Карта партнера ООО «ПЕКИН»</a></li>
      <li><a href="<?php echo THEME_URL; ?>/docs/svidetelstvo-OOO-PEKIN.jpg" target="_blank">Свидетельство ООО «ПЕКИН»</a></li>
    </ul>

  </div>

<?php wp_footer(); ?>

  <script async src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&onload=init"></script>
  <script>
    <?php $location = get_field('location', 'option'); ?>

    var myMap, myPlacemark,
      coords = [<?php echo esc_js($location['lat']); ?>, <?php echo esc_js($location['lng']); ?>];

    function init() {
      myMap = new ymaps.Map('contact-map', {
        center: coords,
        zoom: 17
      });

      myPlacemark = new ymaps.Placemark(coords, {
        preset: 'islands#circleDotIcon',
        iconColor: '#fe3334'
      });

      myMap.geoObjects.add(myPlacemark);
    }
  </script>

</body>
</html>
