<section class="contact py-5">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-md-6">
                <h2 class="h4 mb-4">Contact Details</h2>
                <ul class="fa-ul">
                    <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-envelope"></i></span> <a
                            href="mailto:<?=get_field('contact_email', 'options')?>"><?=get_field('contact_email', 'options')?></a>
                    </li>
                    <li class="mb-2"><span class="fa-li"><i class="fa-solid fa-phone"></i></span>  Phone: <a
                    href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>"><?=get_field('contact_phone', 'options')?></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="h4 mb-4">Connect</h2>
                <div class="contact__socials h3">
                    <?php
                    $s = get_field('socials','options');
                    ?>
                    <? if ( $s['instagram_url'] ) { ?>
                    <a href="<?=$s['instagram_url']?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <? } ?>
                    <? if ( $s['twitter_url'] ) { ?>
                    <a href="<?=$s['twitter_url']?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <? } ?>
                    <? if ( $s['youtube_url'] ) { ?>
                    <a href="<?=$s['youtube_url']?>" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    <? } ?>
                    <? if ( $s['linkedin_url'] ) { ?>
                    <a href="<?=$s['linkedin_url']?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <? } ?>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <h2 class="h4 mb-4">Address</h2>
                <?=get_field("contact_address",'options')?>
            </div>
            <div class="col-md-6">
                <h2 class="h4 mb-4">Opening Hours</h2>
                <?=get_field("opening_hours",'options')?>
            </div>
        </div>
    </div>
</section>
<section class="contact py-5">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col">
                <?php echo do_shortcode('[gravityform id="1" title="true"]'); ?>
            </div>
        </div>
    </div>
</section>
<section class="contact py-5 pb-0">
    <div class="container-fluid p-0">
        <iframe class="d-block" src="<?=get_field('ho_map_url','options')?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>