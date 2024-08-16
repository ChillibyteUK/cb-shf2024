<?php
$width = get_field('width') == 'Narrow' ? 'w-lg-75' : '';

$hp = is_front_page() ? 'three_col_usp__content--hide' : '';

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