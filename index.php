<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Timetobeme2024
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>
<main id="main" role="main">
    <div class="container-xl py-6 text-center">
        <div class="h2 mb-0 font-weight-medium">SellHouseFast.co.uk</div>
        <h1>Property <span>Insights</span></h1>
    </div>
    <section class="py-5 bg-grey-400">
        <div class="container-xl">
            <?php
            if (have_posts()) { ?>
            <div class="row g-2">
                        <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="col-md-4">
                        <a class="news_card" href="<?=get_the_permalink()?>">
                            <?=get_the_post_thumbnail(get_the_ID(),'large',array('class' => 'news_card__image'))?>
                            <div class="news_card__inner">
                                <h3><?=get_the_title()?></h3>
                                <div class="news_card__read"><?=estimate_reading_time_in_minutes( get_the_content(), 200, true, true )?></div>
                                <div class="news_card__excerpt"><?=wp_trim_words(get_the_content(), 30)?></div>
                                <div class="news_card__link">Read more</div>
                            </div>
                        </a>
                    </div>
                        <?php
                }
                ?>
                        <?php
            } else {
                ?>
                        <?php get_template_part('loop-templates/content', 'none'); ?>
                        <?php
            }
            ?>
            </div>
            <div class="pt-4">
                <?=understrap_pagination()?>
            </div>
        </div>
    </section>
</main>
<?php

get_footer();
?>