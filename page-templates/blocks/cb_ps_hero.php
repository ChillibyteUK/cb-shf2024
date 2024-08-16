<section class="ps_hero">
    <div class="container-xl py-6">
        <div class="row">
            <div class="col-md-6">
                <h1><?=get_field('title')?></h1>
                <ul>
                    <?php
                    foreach (textarea_array(get_field('bullets')) as $b) {
                        echo '<li>' . $b . '</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-6 text-center">
                <div class="ps_hero__form">
                    <h2 class="h3">Invest in properties today</h2>
                    <div class="ps_hero__form_intro">Enter your details below</div>
                    <div>FORM HERE<br>
                        <input type="text" name="postcode" id="" placeholder="Enter your postcode">
                        <button class="button button-sm">Enquire</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>