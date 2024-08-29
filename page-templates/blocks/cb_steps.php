<section class="steps">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-sm-6 col-md-3">
                <img src="<?=get_stylesheet_directory_uri()?>/img/icon-fill.svg" alt="Fill Form">
                <div><?=styleFirstWord(get_field('f'))?></div>
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="<?=get_stylesheet_directory_uri()?>/img/icon-accept.svg" alt="Accept Offer">
                <div><?=styleFirstWord(get_field('a'))?></div>
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="<?=get_stylesheet_directory_uri()?>/img/icon-sign.svg" alt="Sign Contract">
                <div><?=styleFirstWord(get_field('s'))?></div>
            </div>
            <div class="col-sm-6 col-md-3">
                <img src="<?=get_stylesheet_directory_uri()?>/img/icon-transfer.svg" alt="Transfer Money">
                <div><?=styleFirstWord(get_field('t'))?></div>
            </div>
        </div>
    </div>
</section>