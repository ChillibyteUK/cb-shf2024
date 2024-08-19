<?php
$bg = isset(get_field('background')[0]) && get_field('background')[0] == 'Yes' ? 'bg-grey-400' : null;
?>
<section class="text_image <?=$bg?> py-5">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-md-6 text_image__text_container">
                <div class="text_image__content pt-md-4">
                <?=get_field('content')?>
                </div>
                <?php
                if (isset(get_field('show_form')[0]) && get_field('show_form')[0] == 'Yes') {
                    ?>
                <div class="text_image__cta">
                    <input type="text" name="postcode" id="postcode" placeholder="Enter your postcode"><button class="button button-sm" onclick="redirectToForm()">Get Free Cash Offer</button>
                </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-6">
                <?=wp_get_attachment_image(get_field('image'), 'full', false, array('class' => 'text_image__image', 'alt' => ''))?>
            </div>
        </div>
    </div>
</section>