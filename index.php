<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trk-logistics
 */

get_header();
?>
    <main>
        <section class="about container">
            <div class="about__descr">
               <span class="about__descr--first-paragraph"><?php the_field('services-descr', 'options'); ?>
            </div>
            <h2 id="services" class="about__for-you"><?php the_field('services-title', 'options'); ?></h2>
            <div class="services cards">
                <div class="card card-1">
                    <div class="card__title"><?php the_field('services-card-title-1', 'options'); ?></div>
                    <div class="card__detail"><?php the_field('services-card-text-1', 'options'); ?></div>
                    <div class="card__btn"><a class="order-btn btn card--btn" href="<?php the_field('services-card-link-1', 'options'); ?>"><?php the_field('services-card-text-link-1', 'options'); ?></a></div>
                    <div class="card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-1.png" alt="<?php the_field('services-card-title-1', 'options'); ?>">
                    </div>
                </div>
                <div class="card card-2">
                    <div class="card__title"><?php the_field('services-card-title-2', 'options'); ?></div>
                    <div class="card__detail"><?php the_field('services-card-text-2', 'options'); ?></div>
                    <div class="card__btn"><a class="order-btn btn card--btn" href="<?php the_field('services-card-link-2', 'options'); ?>"><?php the_field('services-card-link-text-2', 'options'); ?></a></div>
                    <div class="card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-2.png" alt="<?php the_field('services-card-title-2', 'options'); ?>">
                    </div>
                </div>
                <div class="card card-3">
                    <div class="card__title"><?php the_field('services-card-title-3', 'options'); ?></div>
                    <div class="card__detail"><?php the_field('services-card-text-3', 'options'); ?></div>
                    <div class="card__btn"><a class="order-btn btn card--btn" href="<?php the_field('services-card-link-3', 'options'); ?>"><?php the_field('services-card-link-text-3', 'options'); ?></a></div>
                    <div class="card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-3.png" alt="<?php the_field('services-card-title-3', 'options'); ?>">
                    </div>
                </div>
                <div class="card card-4">
                    <div class="card__title"><?php the_field('services-card-title-4', 'options'); ?>
                    </div>
                    <div class="card__detail"><?php the_field('services-card-text-4', 'options'); ?></div>
                    <div class="card__btn"><a class="order-btn btn card--btn" href="<?php the_field('services-card-link-4', 'options'); ?>"><?php the_field('services-card-link-text-4', 'options'); ?></a></div>
                    <div class="card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-4.png" alt="<?php the_field('services-card-title-4', 'options'); ?>
">
                    </div>
                </div>
                <div class="card card-5">
                    <div class="card__title"><?php the_field('services-card-title-5', 'options'); ?></div>
                    <div class="card__detail"><?php the_field('services-card-text-5', 'options'); ?></div>
                    <div class="card__btn"><a class="order-btn btn card--btn" href="<?php the_field('services-card-link-5', 'options'); ?>"><?php the_field('services-card-link-text-5', 'options'); ?></a></div>
                    <div class="card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-5.png" alt="<?php the_field('services-card-title-5', 'options'); ?>">
                    </div>
                </div>
                <div class="card card-light">
                    <div class="card__title"><?php the_field('services-card-title-6', 'options'); ?></div>
                    <div class="card__footer">
                        <div class="card__descr"><?php the_field('services-card-text-5', 'options'); ?></div>
                        <div class="card__btn"><a class="order-btn btn card--btn" href="<?php the_field('services-card-link-6', 'options'); ?>" class="btn card--btn"><?php the_field('services-card-link-text-6', 'options'); ?></a></div>
                    </div>
                </div>
            </div>
            <div class="about__footer">
                <?php the_field('services-text-footer', 'options'); ?>
            </div>
        </section>
        <section class="autopark">
            <div class="container">
                <div class="autopark__wrapper">
                    <h2 class="autopark__title"><?php the_field('autopark__title', 'options'); ?></h2>
                    <div class="autopark__descr"><?php the_field('autopark_descr', 'options'); ?></div>
                    <div class="autopark__lists">
                        <ul class="autopark__list list-1">
                            <li class="autopark__item"><?php the_field('autopark_list-1', 'options'); ?></li>
                            <li class="autopark__item"><?php the_field('autopark_list-2', 'options'); ?></li>
                            <li class="autopark__item"><?php the_field('autopark_list-3', 'options'); ?></li>
                        </ul>
                        <ul class="autopark__list list-2">
                            <li class="autopark__item"><?php the_field('autopark_list-4', 'options'); ?></li>
                            <li class="autopark__item"><?php the_field('autopark_list-5', 'options'); ?></li>
                            <li class="autopark__item"><?php the_field('autopark_list-6', 'options'); ?></li>
                        </ul>
                        <ul class="autopark__list list-3">
                            <li class="autopark__item"><?php the_field('autopark_list-7', 'options'); ?></li>
                            <li class="autopark__item"><?php the_field('autopark_list-8', 'options'); ?></li>
                            <li class="autopark__item"><?php the_field('autopark_list-9', 'options'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="advantages container">
            <div class="advantages__title"><h2><?php the_field('advantages_title', 'options'); ?></h2></div>
            <div class="advantages__cards cards">
                <div class="card card-1">
                    <div class="card__title"><?php the_field('advantages_card-title-1', 'options'); ?></div>
                    <div class="card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selected-1.png" alt="<?php the_field('advantages_card-title-1', 'options'); ?>">
                    </div>
                </div>
                <div class="card card-2">
                    <div class="card__title"><?php the_field('advantages_card-title-2', 'options'); ?></div>
                    <div class="card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selected-2.png" alt="<?php the_field('advantages_card-title-2', 'options'); ?>">
                    </div>
                </div>
                <div class="card card-3">
                    <div class="card__title"><?php the_field('advantages_card-title-3', 'options'); ?></div>
                    <div class="card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selected-3.png" alt="<?php the_field('advantages_card-title-3', 'options'); ?>">
                    </div>
                </div>
                <div class="card card-4">
                    <div class="card__title"><?php the_field('advantages_card-title-4', 'options'); ?></div>
                    <div class="card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selected-4.png" alt="<?php the_field('advantages_card-title-4', 'options'); ?>">
                    </div>
                </div>
            </div>
            <div class="advantages__descr">
                <?php the_field('advantages_descr', 'options'); ?>
            </div>
            <div class="advantages__info">
                <div class="advantages__tons tons info-item">
                    <div class="tons__count count"><?php the_field('advantages-count-count-1', 'options'); ?></div>
                    <div class="tons__title count__title"><?php the_field('advantages-count-text-1', 'options'); ?></div>
                </div>
                <div class="advantages__transports transports info-item">
                    <div class="transports__count count"><?php the_field('advantages-count-count-2', 'options'); ?></div>
                    <div class="transports__title count__title"><?php the_field('advantages-count-text-2', 'options'); ?></div>
                </div>
                <div class="advantages__cities cities info-item">
                    <div class="cities__count count"><?php the_field('advantages-count-count-3', 'options'); ?></div>
                    <div class="cities__title count__title"><?php the_field('advantages-count-text-3', 'options'); ?></div>
                </div>
            </div>
        </section>
        <section id="calc" class="calculator">
            <div class="container">
                <div class="calculator__wrapper">
                    <div class="calculator__head">
                        <div class="calculator__title">
                            <h2><?php the_field('calc_title', 'options'); ?></h2>
                        </div>
                        <div class="calculator__descr">
                            <?php the_field('calc_descr', 'options'); ?></div>
                    </div>
                    <div class="calculator__body">
                        <form action="#">
                            <div class="first-field field">
                                <div class="calculator__input">
                                    <label for="from-where">Откуда</label>
                                    <input class="first-input" type="text" name="from-where" id="from-where" placeholder="Воронеж" required>
                                </div>
                                <div class="calculator__input">
                                    <label for="where-to">Куда</label>
                                    <input class="second-input"  type="text" name="where-to" id="where-to" placeholder="Санкт-Петербург" required>
                                </div>
                                <div class="btn-swap"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-swap.png" alt="Поменять местами"></div>
                            </div>
                            <div class="second-field field">
                                <div class="calculator__input">
                                    <label for="weight">Вес груза (т.)</label>
                                    <input class="first-input"  type="text" name="weight" id="weight" placeholder="5 тонн" required>
                                </div>
                                <div class="calculator__input">
                                    <label for="volume">Объем (м³)</label>
                                    <input class="second-input"  type="text" name="volume" id="volume" placeholder="до 92 м³">
                                </div>
                            </div>
                            <div class="checkbox-field">
                                <div class="first-column">

                                    <div class="label-checkbox"><?php the_field('calc_type', 'options'); ?></div>
                                    <div class="checkbox-input">
                                        <label class="control control-checkbox">
                                            <?php the_field('calc_type_1', 'options'); ?>
                                            <input type="checkbox" name="temperature" id="temperature">
                                            <div class="control_indicator"></div>
                                        </label>
                                    </div>
                                    <div class="checkbox-input">
                                        <label class="control control-checkbox">
                                            <?php the_field('calc_type_2', 'options'); ?>
                                            <input type="checkbox" name="danger" id="danger">
                                            <div class="control_indicator"></div>
                                        </label>
                                    </div>
                                </div>
                                <div class="second-column">
                                    <div class="label-checkbox"><?php the_field('calc_dops', 'options'); ?></div>
                                    <div class="checkbox-input">
                                        <label class="control control-checkbox">
                                            <?php the_field('calc_dops_1', 'options'); ?>
                                            <input type="checkbox" name="insurance" id="insurance">
                                            <div class="control_indicator"></div>
                                        </label>
                                    </div>
                                    <div class="checkbox-input">
                                        <label class="control control-checkbox">
                                            <?php the_field('calc_dops_2', 'options'); ?>
                                            <input type="checkbox" name="express" id="express">
                                            <div class="control_indicator"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="third-field field">
                                <div class="calculator__input">
                                    <label for="extra-options">Дополнительные параметры</label>
                                    <input class="first-input" type="text" name="extra-options" id="extra-options" placeholder="Длинна груза, кол-во паллет и тд.">
                                </div>
                                <button id="calc-submit" type="submit">Рассчитать стоимость</button>
                            </div>
                        </form>
                    </div>
                    <div class="calculator__footer">
                        <div class="service-cost"><?php the_field('calc_total', 'options'); ?> <span class="total-wrapper"><span class="total-cost">0</span> руб</span></div>
                        <div class="calculator__feedback"><a href="<?php the_field('calc_btn_link', 'options'); ?>" class="btn calculator__feedback--btn"><?php the_field('calc_btn', 'options'); ?></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="working" class="working container">
            <div class="working__title">
                <h2><?php the_field('working_title', 'options'); ?></h2>
            </div>
            <div class="working__steps steps">
                <div class="steps__item">
                    <div class="steps__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/worked-1.png" alt="#">
                    </div>
                    <div class="steps__title"><?php the_field('working_title_1', 'options'); ?></div>
                    <div class="steps__count">1</div>
                </div>
                <div class="steps__item">
                    <div class="steps__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/worked-2.png" alt="#">
                    </div>
                    <div class="steps__title"><?php the_field('working_title_2', 'options'); ?></div>
                    <div class="steps__count">2</div>
                </div>
                <div class="steps__item">
                    <div class="steps__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/worked-3.png" alt="#">
                    </div>
                    <div class="steps__title"><?php the_field('working_title_3', 'options'); ?></div>
                    <div class="steps__count">3</div>
                </div>
                <div class="steps__item">
                    <div class="steps__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/worked-4.png" alt="#">
                    </div>
                    <div class="steps__title"><?php the_field('working_title_4', 'options'); ?></div>
                    <div class="steps__count">4</div>
                </div>
                <div class="steps__item">
                    <div class="steps__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/worked-5.png" alt="#">
                    </div>
                    <div class="steps__title"><?php the_field('working_title_5', 'options'); ?></div>
                    <div class="steps__count">5</div>
                </div>
                <div class="steps__item">
                    <div class="steps__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/worked-6.png" alt="#">
                    </div>
                    <div class="steps__title"><?php the_field('working_title_6', 'options'); ?></div>
                    <div class="steps__count">6</div>
                </div>
            </div>
        </section>
        <section id="reviews" class="reviews">
            <div class="container">
                <div class="reviews__wrapper">
                    <div class="reviews__title">
                        <h2><?php the_field('reviews_title', 'options'); ?></h2>
                        <div class="reviews__add"><a href="<?php the_field('reviews_btn-link', 'options'); ?>" class="btn reviews__add-btn"><?php the_field('reviews_btn', 'options'); ?></a></div>
                    </div>
                    <div class="reviews__body">
                        <div class="reviews__btn" style="display: none;">
                            <button class="prev--btn reviews--btn" disabled><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-prev.svg" alt="Назад"></button>
                            <div class="reviews__count">
                                <span class="current-count">1</span>/<span class="total-count">3</span>
                            </div>
                            <button class="next--btn reviews--btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-next.svg" alt="Вперед"></button>
                        </div>
                        <div class="reviews__list">
                            <div class="reviews__list--column">
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-1', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-1', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-1', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-2', 'options'); ?><!--</div>-->
<!--                                    <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-2', 'options'); ?><!--</time></div>-->
<!--                                    <div class="review__name">--><?php //the_field('reviews-author-2', 'options'); ?><!--</div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-3', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-3', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-3', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-4', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-4', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-4', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-5', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-5', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-5', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-6', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-6', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-6', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-7', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-7', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-7', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-8', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-8', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-8', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-9', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-9', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-9', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-10', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-10', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-10', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-11', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-11', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-11', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="reviews__item review">-->
<!--                                    <div class="review__text">--><?php //the_field('reviews-12', 'options'); ?><!--</div>-->
<!---->
<!--                                    <div class="review__footer">-->
<!--                                        <div class="review__date"><time datetime="2021-09-26">--><?php //the_field('reviews-date-12', 'options'); ?><!--</time></div>-->
<!--                                        <div class="review__name">--><?php //the_field('reviews-author-12', 'options'); ?><!--</div>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="help container">
            <div class="help__title">
                <h2><?php the_field('help_title', 'options'); ?></h2>
                <div class="help__descr"><?php the_field('help_descr', 'options'); ?></div>
            </div>
            <div class="help__feedback feedback">
                <div class="feedback__text">
                    <div class="feedback__title"><?php the_field('help_feed-title', 'options'); ?></div>
                    <div class="feedback__descr"><?php the_field('help_feed-descr', 'options'); ?></div>
                </div>
                <form class="form" action="#">
                    <div class="feedback__field">
                        <input id="namefooter" name="name" type="text" placeholder="Иван" required>
                        <input class="phone-mask" id="phonefooter" name="phone" type="text" placeholder="+7 (___) ___ __ __" required>
                    </div>
                    <div class="feedback__btn">
                        <button class="btn feedback--btn" type="submit"><?php the_field('help_feed-btn', 'options'); ?></button>
                    </div>
                </form>
                <div class="form-result"></div>
            </div>
        </section>
        <section class="partners">
            <div class="container">
                <div class="partners__wrapper">
                    <div class="partners__list">
                        <div class="partners__item" style="height: max-content">
                            <img style="width: 200px; height: auto; max-height: 70px;" src="<?php the_field('logo-1', 'options'); ?>" alt="">
                        </div>
                        <div class="partners__item" style="height: max-content">
                            <img style="width: 200px; height: auto; max-height: 70px;" src="<?php the_field('logo-2', 'options'); ?>" alt="">
                        </div>
                        <div class="partners__item" style="height: max-content">
                            <img style="width: 200px; height: auto; max-height: 70px;" src="<?php the_field('logo-3', 'options'); ?>" alt="">
                        </div>
                        <div class="partners__item" style="height: max-content">
                            <img style="width: 200px; height: auto; max-height: 70px;" src="<?php the_field('logo-4', 'options'); ?>" alt="">
                        </div>
                        <div class="partners__item" style="height: max-content">
                            <img style="width: 200px; height: auto; max-height: 70px;" src="<?php the_field('logo-5', 'options'); ?>" alt="">
                        </div>
                        <div class="partners__item" style="height: max-content">
                            <img style="width: 200px; height: auto; max-height: 70px;" src="<?php the_field('logo-6', 'options'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
<?php
get_footer();
