<?php
/* template name: Location Page */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();

$terms = wp_get_post_terms(get_the_ID(), 'location');
$first_term = null;
// Check if terms exist and get the first term
if (!empty($terms) && !is_wp_error($terms)) {
    $first_term = $terms[0];
}

?>
<main id="main" class="location_page">
    <?php
    the_post();
    the_content();
    ?>
    <div class="bg-grey-400 py-5">
        <div class="container-xl">
            <h2 class="mb-4 h3"><?=$first_term->name?> Property News</h2>
            <div class="row g-2">
            <?php
            
            $q = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'location',
                        'field'    => 'slug',
                        'terms'    => $first_term->slug,
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
                            <div class="news_card__excerpt"><?=wp_trim_words(get_the_content(), 30)?></div>
                            <div class="news_card__link">Read more</div>
                        </div>
                    </a>
                </div>
                <?php
            }

            ?>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>