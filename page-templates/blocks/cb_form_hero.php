<section class="form_hero">
    <div class="container-xl py-6 text-center">
        <?php
        if (get_field('pre_title') ?? null) {
            ?>
        <div class="h2 mb-0 font-weight-medium"><?=get_field('pre_title')?></div>
            <?php
        }
        ?>
        <h1><?=get_field('title')?></h1>
        <div class="form_hero__form">
            <input type="text" class="postcode" name="postcode" id="postcode" autocomplete="off" placeholder="Enter your postcode"><button class="button button-sm" onclick="redirectToForm()">Get Free Cash Offer</button>
        </div>
    </div>
</section>
<!-- BF89-MY52-EG42-KT54 -->