<?php
$bg = isset(get_field('background')[0]) && get_field('background')[0] == 'Yes' ? 'bg-cream' : null;

$containerBg = get_field('background') == 'cream' ? 'bg-cream' : 'bg-white';
$contentBg = get_field('background') == 'cream' ? 'bg-white' : 'bg-cream';

$orderText = 'order-2 order-md-1';
$orderImage = 'order-1 order-md-2';

if (get_field('order') == 'image-text') {
    $orderText = 'order-2 order-md-2';
    $orderImage = 'order-1 order-md-1';
}
?>
<section class="text_image <?=$bg?> py-5">
    <div class="container-xl">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text_image__text_container <?=$orderText?>">
                <div class="text_image__content pt-md-4">
                <?=get_field('content')?>
                </div>
                <?php
                if (isset(get_field('show_form')[0]) && get_field('show_form')[0] == 'Yes') {
                    $id = random_str(4);
                    ?>
                <div class="text_image__cta">
                    <input type="text" name="postcode_<?=$id?>" id="postcode_<?=$id?>" placeholder="Enter your postcode" autocomplete="off"><button class="button button-sm" onclick="redirectToForm('postcode_<?=$id?>')">Get Free Cash Offer</button>
                </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-6 <?=$orderImage?>">
                <?=wp_get_attachment_image(get_field('image'), 'full', false, array('class' => 'text_image__image', 'alt' => ''))?>
            </div>
        </div>
    </div>
</section>