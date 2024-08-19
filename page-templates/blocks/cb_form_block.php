<section class="form_block py-5">
    <div class="container-xl text-center">
        <h2><?=get_field('title')?></h2>
        <div class="fs-500 mb-5"><?=get_field('content')?></div>


        <input type="text" name="addr1" id="addr1" placeholder="Address Line 1">
        <input type="text" name="town" id="town" placeholder="Town/City">
        <input type="text" name="county" id="county" placeholder="County">
        <input type="text" name="pcode" id="pcode" placeholder="Enter your postcode">
        
        <button class="button button-sm" onclick="redirectToFormAll()">Get Free Cash Offer</button>

    </div>
</section>