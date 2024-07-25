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

$page = get_page_by_path('knowledge');
$content = $page->post_content;
$blocks = parse_blocks($content);
$background_value = '';
foreach ($blocks as $block) {
    if ($block['blockName'] === 'acf/cb-hero') {
        // Get the background field value
        if (isset($block['attrs']['data']['background'])) {
            $background_value = $block['attrs']['data']['background'];
        }
        break;
    }
}
?>
<section
    class="hero <?=$page?> <?=$class?>">
    <?=wp_get_attachment_image($background_value, 'full', false, array('class' => 'hero__bg', 'alt' => 'Knowledge'))?>
    <div class="container-xl hero__inner">
        <img src="<?=get_stylesheet_directory_uri()?>/img/icon-news.svg"
            class="hero__icon" alt="<?=get_the_title()?>">
        <?php
if (get_field('content') ?? null) {
    ?>
        <h1 class="hero__content">
            <?=get_field('content')?>
        </h1>
        <?php
}
?>
    </div>
</section>
<main id="main" role="main">
    <?php
    if (have_posts()) { ?>
                <?php
        while (have_posts()) {
            the_post();
            ?>
                <div class="row border-bottom">
                    <div class="col-1 my-4">
                        <a
                            href="<?=get_permalink()?>"></a>
                    </div>
                    <div class="col-11 my-4">
                        <div class="small">
                            <?=get_the_date()?></div>
                        <div class="font-weight-bold py-2"><a
                                href="<?=get_permalink()?>"><?=get_the_title()?></a>
                        </div>
                        <div>
                            <?=wp_trim_words(get_the_content(), 30)?>
                        </div>
                    </div>
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
    <div class="pt-4">
        <?=understrap_pagination()?>
    </div>
</main>
<?php

get_footer();
?>