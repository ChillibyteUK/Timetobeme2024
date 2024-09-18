<?php
$bg = isset(get_field('background')[0]) && get_field('background')[0] == 'Yes' ? 'bg-cream' : null;

$containerBg = get_field('background') == 'cream' ? 'bg-cream' : 'bg-white';
$contentBg = get_field('background') == 'cream' ? 'bg-white' : 'bg-cream';
?>
<section class="columns <?=$bg?> py-5">
    <div class="container-xl">
        <div class="row g-4 align-items-start">
            <div class="col-md-6">
                <?=get_field('content_1')?>
            </div>
            <div class="col-md-6">
                <?=get_field('content_2')?>
            </div>
        </div>
    </div>
</section>