<?php
$bg = isset(get_field('background')[0]) && get_field('background')[0] == 'Yes' ? 'bg-cream' : null;
$class = get_field('class');
?>
<section class="full_text <?=$bg?> py-5">
    <div class="container-xl">
        <div class="row g-4 align-items-center">
            <div class="col-md-12 <?=$class?>">
                <?=get_field('content')?>
            </div>
        </div>
    </div>
</section>