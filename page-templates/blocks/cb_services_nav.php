<section class="services_nav pt-5">
    <div class="container-xl">
        <?php
        if (get_field('title') ?? null) {
            ?>
        <h2><?=get_field('title')?></h2>
            <?php
        }
        ?>
        <div class="services_nav__grid">
            <?php
            while (have_rows('services')) {
                the_row();
                $l = get_sub_field('link');
                ?>
            <a href="<?=$l['url']?>" class="services_nav__card">
                <div class="services_nav__inner">
                    <h3><?=get_sub_field('title')?></h3>
                    <div><?=get_sub_field('content')?></div>
                </div>
            </a>
                <?php
            }
            ?>
        </div>
    </div>
</section>