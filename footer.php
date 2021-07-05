<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trk-logistics
 */

?>
<footer id="footer" class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__documents">
                <div class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_footer.svg" alt="MTK Logistics"></div>
                <div class="download__block">
                    <div class="requisites"><a class="download-link" href="<?php the_field('download-link-1', 'options'); ?>">Скачать</a> <?php the_field('download-text-1', 'options'); ?></div>
                    <div class="contract"><a class="download-link" href="<?php the_field('download-link-2', 'options'); ?>">Скачать</a> <?php the_field('download-text-2', 'options'); ?></div>
                </div>
            </div>
            <div class="footer__info">
                    <span class="footer__text footer__first-paragraph"><?php the_field('footer', 'options'); ?>
</span>
                <span class="footer__text footer__second-paragraph"><?php the_field('footer-2', 'options'); ?></span>
            </div>
            <div class="footer__contacts contacts">
                <div class="contacts__phone"><a href="tel:<?php the_field('footer_phone_dig', 'options'); ?>"></a> <?php the_field('footer_phone', 'options'); ?></div>
                <div class="contacts__email"><a href="mailto:<?php the_field('footer_email', 'options'); ?>"></a> <?php the_field('footer_email', 'options'); ?></div>
                <div class="contacts__address"><?php the_field('footer_address', 'options'); ?></div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="copyright"><?php the_field('copyright', 'options'); ?></div>
            <div class="developer"><?php the_field('developer', 'options'); ?></div>
        </div>
    </div>
</footer>
<div id="map" style="width: 600px; height: 400px; display: none"></div>
<div class="modal__container">
    <div class="modal">
        <div class="modal__wrapper">
            <div class="modal__title">Добавить отзыв</div>
            <form id="review-form" action="/" enctype="multipart/form-data">
                <div class="modal__field">
                    <input type="text" id="usernamerev" name="usernamerev" placeholder="Введите Имя, Фамилию или название компании" required>
                </div>
                <div class="modal__field">
                    <textarea name="textrev" id="textrev" cols="30" rows="8" placeholder="Введите текст отзыва" required></textarea>
                </div>
                <div class="modal__field">
                    <button id="review-sub" type="submit">Отправить</button>
                </div>
                <div class="captcha">Этот сайт защищен reCAPTCHA, и применяются
                    <a href="https://policies.google.com/privacy">Политика конфиденциальности</a> и
                    <a href="https://policies.google.com/terms">Условия использования</a> Google.</div>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            </form>
        </div>
    </div>
</div>
<div class="order__container">
    <div class="order">
        <div class="order__wrapper">
            <div class="order__title">Заказать услугу</div>
            <form id="order-form" method="post" action="submit">
                <div class="order__field">
                    <input type="text" id="orderuser" name="usernamerev" placeholder="Введите Имя, Фамилию или название компании" required>
                </div>
                <div class="order__field">
                    <input class="phone-mask" id="phoneorder" name="phoneorder" type="text" placeholder="+7 (___) ___ __ __">
                </div>
                <div class="order__field">
                    <textarea name="ordertext" id="ordertext" cols="30" rows="4" placeholder="Опишите что Вам необходимо перевезти и какой транспорт необходим..." required></textarea>
                </div>
                <div class="order__field">
                    <button id="order-sub" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/send.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/routes.js"></script>

</body>
<?php wp_footer(); ?>

</html>
