<section class="prices py-5 bg-cream">
    <div class="container-xl">
        <div class="row mb-4">
            <div class="col-md-12 cols-lg-2">
        <?php
        while (have_rows('prices')) {
            the_row();
        ?>
                <h2 style="break-after: avoid;"><?php echo get_sub_field('title'); ?></h2>
                <div class="mb-5" style="break-after: column;">
                    <div class="mb-2"><?php echo get_sub_field('text'); ?></div>
                    <?php
                    if ( get_sub_field('cta') ) {
                    ?>
                    <a href="<?php echo get_sub_field('cta'); ?>" class="btn btn-green" target="_blank">Book Now</a>
                    <?php
                    } else {
                    ?>
                    <a href="https://www.phorest.com/salon/timetobeme" class="btn btn-green" target="_blank">Book Now</a>
                    <?php
                    }
                    ?>
                </div>
        <?php
        }
        ?>
            </div>
        </div>
    </div>
</section>