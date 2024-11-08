<?php
function add_meta_to_descendants($parent_id) {
    $pages = get_pages([
        'child_of' => $parent_id,
        'post_type' => 'page',
        'post_status' => 'publish',
    ]);

    foreach ($pages as $page) {
        update_post_meta($page->ID, '_is_location_descendant', true);
    }
}

// Run the function once by calling it with the parent ID
add_meta_to_descendants(252); // Replace 252 with your specific parent page ID
?>