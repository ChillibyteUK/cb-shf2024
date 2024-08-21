<div class="three_col_cards2">
    <div class="container-xl">
        <h2 class="mb-4"><?=get_field('title')?></h2>
        <div class="three_col_cards2__grid py-5">
            <?php
            while (have_rows('cards')) {
                the_row();
                ?>
<div class="three_col_cards2__card">
    <div class="three_col_cards2__marker"></div>
    <div class="three_col_cards2__title"><h3><?=get_sub_field('title')?></h3></div>
    <div class="three_col_cards2__content"><?=get_sub_field('content')?></div>
</div>
                <?php
            }
            ?>
        </div>
    </div>
</div>