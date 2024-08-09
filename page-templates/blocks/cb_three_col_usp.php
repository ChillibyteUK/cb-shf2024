<?php
$width = get_field('width') == 'Narrow' ? 'w-lg-75' : '';
?>
<section class="three_col_usp pb-5">
    <div class="container-xl">
        <div class="row g-4 <?=$width?> mx-auto">
            <div class="col-md-4">
                <div class="three_col_usp__icon"></div>
                <?=get_field('usp_1')?>
            </div>
            <div class="col-md-4">
                <div class="three_col_usp__icon"></div>
                <?=get_field('usp_2')?>
            </div>
            <div class="col-md-4">
                <div class="three_col_usp__icon"></div>
                <?=get_field('usp_3')?>
            </div>
        </div>
    </div>
</section>