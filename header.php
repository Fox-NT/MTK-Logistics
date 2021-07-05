<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trk-logistics
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="header">
        <div class="container">
            <div class="header__wrapper--fixed">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="MTK Logistics"></a>
                    </div>
                    <div class="mobile-burder__wrapper">
                        <div class="mobile-burger">
                            <span></span>
                        </div>
                    </div>
                    <div class="header__nav menu mobile-menu">
                        <nav class="menu__nav nav">
                            <ul class="nav__list">
                                <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'container' => false ) ); ?>
                                <!--                            <li class="nav__item"><a id="services-link" href="--><?php //the_field('menu-link-1', 'options'); ?><!--" class="nav__link">--><?php //the_field('menu-1', 'options'); ?><!--</a></li>-->
                                <!--                            <li class="nav__item"><a id="calc-link" href="--><?php //the_field('menu-link-2', 'options'); ?><!--" class="nav__link">--><?php //the_field('menu-2', 'options'); ?><!--</a></li>-->
                                <!--                            <li class="nav__item"><a id="working-link" href="--><?php //the_field('menu-link-3', 'options'); ?><!--" class="nav__link">--><?php //the_field('menu-3', 'options'); ?><!--</a></li>-->
                                <!--                            <li class="nav__item"><a id="reviews-link" href="--><?php //the_field('menu-link-4', 'options'); ?><!--" class="nav__link">--><?php //the_field('menu-4', 'options'); ?><!--</a></li>-->
                                <!--                            <li class="nav__item"><a id="footer-link" href="--><?php //the_field('menu-link-5', 'options'); ?><!--" class="nav__link">--><?php //the_field('menu-5', 'options'); ?><!--</a></li>-->
                            </ul>
                        </nav>
                        <div class="header__contacts contacts mobile-contacts">
                            <div class="contacts__phone">
                                <div class="phone-header">
                                    <a href="tel:<?php the_field('header__phone_dig', 'options'); ?>"><?php the_field('header__phone', 'options'); ?></a></div>
                                <div class="phone-dop">
                                    <a href="tel:<?php the_field('header__phone_dig1', 'options'); ?>"><?php the_field('header__phone1', 'options'); ?></a>
                                </div>
                                <!--                                <a href="tel:--><?php //the_field('header__phone_dig', 'options'); ?><!--">--><?php //the_field('header__phone', 'options'); ?><!--</a> -->
                            </div>
                            <div class="contacts__email"><a href="mailto:manager@mtk-logistics.ru"><?php the_field('header_email', 'options'); ?></a> </div>
                        </div>
                    </div>
                    <div class="header__contacts contacts">
                        <div class="contacts__phone">
                            <div class="phone-header">
                                <a href="tel:<?php the_field('header__phone_dig', 'options'); ?>"><?php the_field('header__phone', 'options'); ?></a></div>
                            <div class="phone-dop">
                                <a href="tel:<?php the_field('header__phone_dig1', 'options'); ?>"><?php the_field('header__phone1', 'options'); ?></a>
                            </div>
                        </div>
                        <div class="contacts__email"><a href="mailto:<?php the_field('header_email', 'options'); ?>"><?php the_field('header_email', 'options'); ?></a> </div>
                    </div>
                </div>
            </div>

            <div class="header__cargo cargo">
                <h1 class="cargo__title"><?php the_field('cargo_title', 'options'); ?></h1>
                <div class="cargo__descr"><?php the_field('cargo_descr', 'options'); ?></div>
                <ul class="cargo__list">
                    <li class="cargo__item"><?php the_field('cargo_item-1', 'options'); ?></li>
                    <li class="cargo__item"><?php the_field('cargo_item-2', 'options'); ?></li>
                    <li class="cargo__item"><?php the_field('cargo_item-3', 'options'); ?></li>
                </ul>
                <div class="cargo__calc-btn"><a class="btn cargo__btn" href="<?php the_field('cargo-btn-link', 'options'); ?>"><?php the_field('cargo-btn', 'options'); ?></a></div>
            </div>
            <div class="header__feedback feedback">
                <div class="feedback__text">
                    <div class="feedback__title"><?php the_field('feedback-title', 'options'); ?></div>
                    <div class="feedback__descr"><?php the_field('feedback-descr
', 'options'); ?></div>
                </div>
                <form id="form-feed" class="form" action="/">
                    <div class="feedback__field">
                        <input id="name" name="name" type="text" placeholder="Иван" required>
                        <input class="phone-mask" id="phone" name="phone" type="tel" placeholder="+7 (___) ___ __ __" required>
                    </div>
                    <div class="feedback__btn">
                        <button class="btn feedback--btn" type="submit"><?php the_field('feedback-btn', 'options'); ?></button>
                    </div>
                </form>
                <div class="form-result"></div>
            </div>
        </div>
    </div>
</header>
<?php wp_body_open(); ?>
