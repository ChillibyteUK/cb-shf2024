<?php
$title = get_field('title') ?: 'Latest Property News';
?>
<section class="latest_news py-5">
    <div class="container-xl">
        <div class="mb-5 d-flex justify-content-between flex-wrap align-items-center">
            <h2><?=$title?></h2>
            <a href="/insights/" class="button">See all articles</a>
        </div>
        <div class="row g-2">
        <?php
        $q = new WP_Query(array(
            'post_type'      => 'post',       // Post type
            'posts_per_page' => 3,            // Number of posts to retrieve
            'orderby'        => 'date',       // Order by date
            'order'          => 'DESC'        // Most recent first
        ));
        
        while ($q->have_posts() ) {
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
</section>