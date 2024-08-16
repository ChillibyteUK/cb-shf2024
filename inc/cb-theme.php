<?php
defined('ABSPATH') || exit;

// require_once get_theme_file_path('inc/class-bs-collapse-navwalker.php');

require_once CB_THEME_DIR . '/inc/cb-posttypes.php';
require_once CB_THEME_DIR . '/inc/cb-utility.php';
require_once CB_THEME_DIR . '/inc/cb-blocks.php';
// require_once CB_THEME_DIR . '/inc/cb-blog.php';
// require_once CB_THEME_DIR . '/inc/cb-careers.php';



if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' 	=> 'Site-Wide Settings',
            'menu_title'	=> 'Site-Wide Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
        )
    );
}

function widgets_init()
{
  
    register_nav_menus(array(
        'primary_nav' => __('Primary Nav', 'cb-shf2024'),
        'footer_menu_1' => __('Footer Services', 'cb-shf2024'),
        'footer_menu_2' => __('Footer Guides', 'cb-shf2024'),
        'footer_menu_3' => __('Footer About', 'cb-shf2024'),
    ));
 
    unregister_sidebar('hero');
    unregister_sidebar('herocanvas');
    unregister_sidebar('statichero');
    unregister_sidebar('left-sidebar');
    unregister_sidebar('right-sidebar');
    unregister_sidebar('footerfull');
    unregister_nav_menu('primary');
 
    add_theme_support('disable-custom-colors');
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name' => 'Yellow',
                'slug' => 'yellow-400',
                'color' => '#FFE41F'
            ),
            array(
                'name' => 'Blue',
                'slug' => 'blue-400',
                'color' => '#0073CC'
            ),
        )
    );
}
add_action('widgets_init', 'widgets_init', 11);


remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');


//Custom Dashboard Widget
add_action('wp_dashboard_setup', 'register_cb_dashboard_widget');
function register_cb_dashboard_widget()
{
    wp_add_dashboard_widget(
        'cb_dashboard_widget',
        'Chillibyte',
        'cb_dashboard_widget_display'
    );
}

function cb_dashboard_widget_display()
{
    ?>
<div style="display: flex; align-items: center; justify-content: space-around;">
    <img style="width: 50%;"
        src="<?= get_stylesheet_directory_uri().'/img/cb-full.jpg'; ?>">
    <a class="button button-primary" target="_blank" rel="noopener nofollow noreferrer"
        href="mailto:hello@www.chillibyte.co.uk/">Contact</a>
</div>
<div>
    <p><strong>Thanks for choosing Chillibyte!</strong></p>
    <hr>
    <p>Got a problem with your site, or want to make some changes & need us to take a look for you?</p>
    <p>Use the link above to get in touch and we'll get back to you ASAP.</p>
</div>
<?php
}


function cb_theme_enqueue()
{
    $the_theme = wp_get_theme();
    wp_deregister_script('jquery');
    // wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js', array(), null, true);
    wp_enqueue_style('swiper-style', "https://unpkg.com/swiper/swiper-bundle.min.css", array());
    wp_enqueue_script('swiper', "https://unpkg.com/swiper/swiper-bundle.min.js", array(), null, true);

}
add_action('wp_enqueue_scripts', 'cb_theme_enqueue');


// Remove comment-reply.min.js from footer
function remove_comment_reply_header_hook()
{
    wp_deregister_script('comment-reply');
}
add_action('init', 'remove_comment_reply_header_hook');

add_action('admin_menu', 'remove_comments_menu');
function remove_comments_menu()
{
    remove_menu_page('edit-comments.php');
}

add_filter('theme_page_templates', 'child_theme_remove_page_template');
function child_theme_remove_page_template($page_templates)
{
    // unset($page_templates['page-templates/blank.php'],$page_templates['page-templates/empty.php'], $page_templates['page-templates/fullwidthpage.php'], $page_templates['page-templates/left-sidebarpage.php'], $page_templates['page-templates/right-sidebarpage.php'], $page_templates['page-templates/both-sidebarspage.php']);
    unset($page_templates['page-templates/blank.php'],$page_templates['page-templates/empty.php'], $page_templates['page-templates/left-sidebarpage.php'], $page_templates['page-templates/right-sidebarpage.php'], $page_templates['page-templates/both-sidebarspage.php']);
    return $page_templates;
}
add_action('after_setup_theme', 'remove_understrap_post_formats', 11);
function remove_understrap_post_formats()
{
    remove_theme_support('post-formats', array( 'aside', 'image', 'video' , 'quote' , 'link' ));
}


add_filter('wpseo_breadcrumb_links', 'override_yoast_breadcrumb_trail');

function override_yoast_breadcrumb_trail($links)
{
    global $post;

    // if (is_singular('people')) {
    //     $breadcrumb[] = array(
    //         'url' => '/about-us/',
    //         'text' => 'About Us',
    //     );
    //     $breadcrumb[] = array(
    //         'url' => '/about-us/our-people/',
    //         'text' => 'Our Senior People',
    //     );
    //     array_splice($links, 1, -2, $breadcrumb);
    // }
    return $links;
}

function disable_taxonomy_archive() {
    // Check if the taxonomy exists
    if (taxonomy_exists('location')) {
      global $wp_taxonomies;
      // Disable archive functionality
      $wp_taxonomies['location']->public = false;
      $wp_taxonomies['location']->rewrite = false;
      // You may also want to set the following to true, depending on your use case
      // $wp_taxonomies['location']->show_ui = true;
      // $wp_taxonomies['location']->show_in_menu = true;
    }
  }
add_action('init', 'disable_taxonomy_archive');

function get_custom_term_link($term) {
    // Get the term slug
    $term_slug = $term->slug;

    $page_path = 'locations/' . $term_slug;

    // Check if a page with the term slug exists
    $page = get_page_by_path($page_path);

    if ($page) {
        // If the page exists, create a custom link
        $page_link = get_permalink($page->ID);
        return '<a href="' . esc_url($page_link) . '">' . esc_html($term->name) . '</a>';
    } else {
        // If no page exists, return the term name as plain text
        return esc_html($term->name);
    }
}

?>