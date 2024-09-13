<section class="featured_in py-4">
    <div class="container-xl featured_in__grid">
        <div class="featuredSwiper swiper">
            <div class="swiper-wrapper">
        <?php
        foreach (get_field('featured_logos','options') as $l) {
            ?>
            <div class="swiper-slide"><?=wp_get_attachment_image($l,'full',false,array('width' => '305', 'height' => '90' ))?></div>
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
window.addEventListener('DOMContentLoaded', function() {
    const observer = new MutationObserver(function() {
        const swiperEl = document.querySelector('.featuredSwiper');
        if (swiperEl && !swiperEl.swiper) { // Check if Swiper is already initialised
            const featuredSwiper = new Swiper('.featuredSwiper', {
                autoplay: true,
                slidesPerView: 2,
                spaceBetween: 10,
                loop: true,
                lazyPreloadPrevNext: 2,
                breakpoints: {
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
            featuredSwiper.update();
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
});
</script>
    <?php
}, 9999);
