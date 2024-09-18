<section class="cb_team bg-cream py-5">
    <div class="container-xl">
        <div class="row g-4 align-items-start">
<?php
if( have_rows('team') ):
    while( have_rows('team') ) : the_row();
        $image = get_sub_field('image');
        if( !empty( $image ) ):
        ?>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 d-flex flex-column align-self-stretch shadow">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid w-100" />
                <div class="bg-white p-3 h-100">
                    <div class="fw-bold"><?the_sub_field("title");?></div>
                    <div class="fw-bold"><?the_sub_field("position");?></div>
                    <div class=""><?the_sub_field("bio");?></div>
                </div>
            </div>
        <?php
        endif;
    endwhile;
endif;
?>
        </div>
    </div>
</section>