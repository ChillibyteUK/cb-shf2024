<section class="text_map">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-lg-7">
                <h2><?=get_field('title')?></h2>
                <?=get_field('content')?>
            </div>
            <div class="col-lg-5">
                <iframe style="min-height:450px" src="<?=get_field('map_url')?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>