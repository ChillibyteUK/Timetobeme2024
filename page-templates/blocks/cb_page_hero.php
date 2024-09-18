<?php
$id = random_str(4);
?>
<section class="form_hero bg-green">
    <div class="container-xl py-6 text-center text-white">
        <h1><?=get_field('title')?></h1>
        <?php
        if (get_field('leadin') ?? null) {
            ?>
        <div class="h3 font-weight-medium"><?=get_field('leadin')?></div>
            <?php
        }
        ?>
    </div>
</section>