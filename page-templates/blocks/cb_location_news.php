<?php
$terms = wp_get_post_terms(get_the_ID(), 'location') ?? null;
$first_term = null;

if (!empty($terms) && !is_wp_error($terms)) {
    $first_term = $terms[0];
    $location_name = $first_term->name;
} else {
    echo 'NO LOCATION';
    return;
}

$q = new WP_Query(array(
    'post_type'      => 'post', // Change to your post type, e.g., 'post', 'custom_post_type'
    'posts_per_page' => -1, // Retrieve all posts, you can set a specific number
    'tax_query'      => array(
        array(
            'taxonomy' => 'location', // The taxonomy you want to query
            'field'    => 'term_id',  // You can use 'term_id', 'slug', or 'name'
            'terms'    => $first_term->term_id, // The ID of the term you want to match
        ),
    ),
));
?>
<section class="py-5 bg-grey-400">
    <div class="container-xl">
        <?php
        if ($q->have_posts()) { ?>
        <div class="row g-2">
                    <?php
            while ($q->have_posts()) {
                $q->the_post();
                ?>
                <div class="col-md-4">
                    <a class="news_card" href="<?=get_the_permalink(get_the_ID())?>">
                        <?=get_the_post_thumbnail(get_the_ID(),'large',array('class' => 'news_card__image'))?>
                        <div class="news_card__inner">
                            <h3><?=get_the_title(get_the_ID())?></h3>
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
