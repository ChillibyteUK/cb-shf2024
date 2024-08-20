<section class="location_intro py-5">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="row g-4">
            <div class="col-lg-7 location_intro__content">
                <?=get_field('content')?>
            </div>
            <div class="col-lg-3">
                <?=wp_get_attachment_image(get_field('image'), 'full', false, null)?>
            </div>
        </div>
    </div>
</section>