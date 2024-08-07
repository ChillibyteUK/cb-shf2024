<section class="form_block py-5">
    <div class="container-xl text-center">
        <h2><?=get_field('title')?></h2>
        <div class="fs-500 mb-5"><?=get_field('content')?></div>
        <?=do_shortcode('[gravityform id="' . get_field('enquiry_form_id','options') . '" title="false"]')?>
    </div>
</section>