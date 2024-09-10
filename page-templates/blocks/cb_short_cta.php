<?php
$class = $block['className'] ?? 'py-0';
$invert = isset(get_field('invert')[0]) && get_field('invert')[0] == 'Yes' ? 'short_cta--invert' : null;

$id = random_str(4);
?>
<section class="short_cta bg-cream <?=$invert?> <?=$class?>">
    <div class="container-xl short_cta__inner p-5">
        <div class="text-center text-md-start">
            <a href="" class="btn btn-green">Book Now</a>
        </div>
    </div>
</section>
