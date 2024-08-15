<?php

function acf_blocks()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'				=> 'cb_form_hero',
            'title'				=> __('CB Form Hero'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_form_hero.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_page_hero',
            'title'				=> __('CB Page Hero'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_page_hero.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_three_col_usp',
            'title'				=> __('CB Three Col USP'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_three_col_usp.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_featured_in',
            'title'				=> __('CB Featured Slider'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_featured_in.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_title',
            'title'				=> __('CB Title'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_title.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_steps',
            'title'				=> __('CB Steps'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_steps.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_short_cta',
            'title'				=> __('CB Short CTA'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_short_cta.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_text_video',
            'title'				=> __('CB Text Video'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_text_video.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_calc',
            'title'				=> __('CB Calculator'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_calc.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_text_image',
            'title'				=> __('CB Text Image'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_text_image.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_review_slider',
            'title'				=> __('CB Review Slider'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_review_slider.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_area_cta',
            'title'				=> __('CB Area CTA'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_area_cta.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));

        acf_register_block_type(array(
            'name'				=> 'cb_faq',
            'title'				=> __('CB FAQs'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_faq.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));

        acf_register_block_type(array(
            'name'				=> 'cb_latest_news',
            'title'				=> __('CB Latest News'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_latest_news.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_form_block',
            'title'				=> __('CB Enquiry Form'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_form_block.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));

        acf_register_block_type(array(
            'name'				=> 'cb_services_nav',
            'title'				=> __('CB Services Nav'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_services_nav.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_text_map',
            'title'				=> __('CB Text / Map'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_text_map.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_use_quote',
            'title'				=> __('CB Use Case / Quote'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_use_quote.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_location_stats',
            'title'				=> __('CB Location Stats'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_location_stats.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_title_two_col',
            'title'				=> __('CB Title / Two Col Text'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_title_two_col.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_child_index',
            'title'				=> __('CB Index of Child Pages'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_child_index.php',
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
    }
}

add_action('acf/init', 'acf_blocks');

// Gutenburg core modifications
add_filter('register_block_type_args', 'core_image_block_type_args', 10, 3);
function core_image_block_type_args($args, $name)
{
    if ($name == 'core/paragraph') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/heading') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/list') {
        $args['render_callback'] = 'modify_core_add_container';
    }

    return $args;
}

function modify_core_add_container($attributes, $content)
{
    ob_start();
    // $class = $block['className'];
    ?>
<div class="container-xl">
    <?=$content?>
</div>
<?php
    $content = ob_get_clean();
    return $content;
}
?>