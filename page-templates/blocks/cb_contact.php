<section class="contact py-5">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-md-6">
                <h2>Get in touch</h2>
                <?=get_field('intro')?>
                <ul class="fa-ul">
                    <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-phone has-blue-400-color"></i></span> <?=contact_phone()?></li>
                    <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-paper-plane has-blue-400-color"></i></span> <?=contact_email()?></li>
                    <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt has-blue-400-color"></i></span> <?=contact_address()?></li>
                </ul>
            </div>
        </div>
    </div>
</section>