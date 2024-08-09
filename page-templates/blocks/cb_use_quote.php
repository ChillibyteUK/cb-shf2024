<?php
$cols = get_field('columns') == 2 ? 'col-md-6' : 'col-md-4';
?>
<section class="use_quote pt-5">
    <div class="container-xl">
        <h2 class="text-center"><?=get_field('title')?></h2>
        <div class="text-center mb-5"><?=get_field('intro')?></div>
        <div class="row g-3 justify-content-center">
            <?php
            while (have_rows('cards')) {
                the_row();
                ?>
            <div class="<?=$cols?>">
                <div class="use_card">
                    <div class="use_card__inner">
                        <h3 class="use_card__title"><?=get_sub_field('title')?></h3>
                        <div class="use_card__content"><?=get_sub_field('content')?></div>
                    </div>
                    <div class="use_card__quote pe-5">
                        <div>&quot;<?=get_sub_field('quote')?>&quot;</div>
                        <div class="use_card__attr"><?=get_sub_field('attr')?></div>
                    </div>
                </div>
            </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>