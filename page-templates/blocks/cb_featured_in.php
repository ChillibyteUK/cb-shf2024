<section class="featured_in py-4">
    <div class="container-xl featured_in__grid">
        <div class="featuredSwiper swiper">
            <div class="swiper-wrapper">
        <?php
        foreach (get_field('featured_logos','options') as $l) {
            ?>
            <div class="swiper-slide"><?=wp_get_attachment_image($l,'large')?></div>
            <?php
        }
        ?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function() {
    ?>
<script>
    const featuredSwiper = new Swiper('.featuredSwiper', {
        autoplay: true,
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        breakpoints: {
            340: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            576: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 5,
                spaceBetween: 20
            }
        }
    });
</script>
    <?php
},9999);