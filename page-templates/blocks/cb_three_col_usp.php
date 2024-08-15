<?php
$width = get_field('width') == 'Narrow' ? 'w-lg-75' : '';

$hp = is_front_page() ? 'three_col_usp__content--hide' : '';

function wrap_non_strong_content($input) {
    // Use regular expression to match content outside <strong> tags
    $pattern = '/(<strong>.*?<\/strong>)|([^<]+)(?![^<]*<\/strong>)/is';

    // Apply the pattern to the input string
    $result = preg_replace_callback($pattern, function($matches) {
        // If the content is within <strong> tags, return it as is
        if (!empty($matches[1])) {
            return $matches[1];
        }
        // Otherwise, wrap the non-<strong> content in a <span> tag
        return '<span>' . $matches[2] . '</span>';
    }, $input);

    return $result;
}

?>
<section class="three_col_usp pb-5">
    <div class="container-xl">
        <div class="row g-4 <?=$width?> mx-auto">
            <div class="col-md-4">
                <div class="three_col_usp__icon"></div>
                <div class="three_col_usp__content <?=$hp?>">
                    <?=wrap_non_strong_content(get_field('usp_1'))?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="three_col_usp__icon"></div>
                <div class="three_col_usp__content <?=$hp?>">
                    <?=wrap_non_strong_content(get_field('usp_2'))?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="three_col_usp__icon"></div>
                <div class="three_col_usp__content <?=$hp?>">
                    <?=wrap_non_strong_content(get_field('usp_3'))?>
                </div>
            </div>
        </div>
    </div>
</section>