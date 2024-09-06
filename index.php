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
 * @package cb-shf2024
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>
<main id="main" role="main">
    <section class="form_hero">
        <div class="container-xl py-6 text-center">
            <div class="h2 mb-0 font-weight-medium">SellHouseFast.co.uk</div>
            <h1>Property <span>Insights</span></h1>
            <div class="form_hero__form">
                <input type="text" name="postcode_<?=$id?>" id="postcode_<?=$id?>" placeholder="Enter your postcode" autocomplete="off"><button class="button button-sm formbutton" onclick="redirectToForm('postcode_<?=$id?>')">Get Free Cash Offer</button>
            </div>
        </div>
    </section>
    <?php get_template_part( 'page-templates/blocks/cb_featured_in' ); ?>
    <section class="py-5 bg-grey-400">
        <div class="container-xl">
            <div class="row g-2">
            <?php
            // get posts without location
            $q = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'location',
                        'field'    => 'term_id',
                        'operator' => 'NOT EXISTS', // Return posts with no term in the 'location' taxonomy
                    ),
                ),
            ));

            while ($q->have_posts()) {
                $q->the_post();
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

            // get posts with location
            
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