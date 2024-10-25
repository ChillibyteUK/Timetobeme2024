<section class="icons py-5 bg-cream">
    <div class="container-xl">
        <div class="row mb-4">
            <div class="col-md-12 cols-lg-2">
        <?php
        while (have_rows('icons')) {
            the_row();
        ?>
                <h2 style="break-after: avoid;"><?php echo get_sub_field('icon'); ?>&nbsp;<?php echo get_sub_field('title'); ?></h2>
                <div class="mb-5"><?php echo get_sub_field('text'); ?></div>
        <?php
        }
        ?>
            </div>
        </div>
    </div>
</section>