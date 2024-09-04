<?php
$id = random_str(4);
?>
<section class="form_hero">
    <div class="container-xl py-6 text-center">
        <h1><?=get_field('title')?></h1>
        <?php
        if (get_field('leadin') ?? null) {
            ?>
        <div class="h3 font-weight-medium"><?=get_field('leadin')?></div>
            <?php
        }
        ?>
        <div class="form_hero__form">
            <input type="text" name="postcode_<?=$id?>" id="postcode_<?=$id?>" placeholder="Enter your postcode"><button class="button button-sm" onclick="redirectToForm()">Get Free Cash Offer</button>
        </div>
    </div>
</section>