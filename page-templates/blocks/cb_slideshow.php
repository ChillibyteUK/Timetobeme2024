<section class="full-hero bg-white">
    <div class="container-xl">
        <div class="row">
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-10 p-5">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                <?php
                $counter = 0;
                if( have_rows('banner') ):
                    while( have_rows('banner') ) : the_row();
                ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$counter?>" <?php if ( $counter == 0 ) { ?> class="active" aria-current="true" <?php } ?> aria-label="Slide <?=$counter?>"></button>
                <?php
                        $counter++;
                    endwhile;
                endif;
                ?>
                    </div>
                    <div class="carousel-inner">
                <?php
                $counter = 0;
                if( have_rows('banner') ):
                    while( have_rows('banner') ) : the_row();
                        $image = get_sub_field('image');
                ?>
                        <div class="carousel-item  <?php if ( $counter == 0 ) { ?>active<?php } ?>">
                            <picture>
                                <source srcset="<?php echo esc_url($image['url']); ?>" media="(min-width: 576px)" />
                                <?php
                                if ( get_sub_field('url') ) {
                                ?>
                                <a href="<?=get_sub_field('url')?>"><img src="<?php echo esc_url($image['url']); ?>" class="d-block w-100" alt="<?php echo esc_attr($image['alt']); ?>"></a>
                                <?php
                                } else {
                                ?>
                                <img src="<?php echo esc_url($image['url']); ?>" class="d-block w-100" alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php
                                }
                                ?>
                            </picture>
                        </div>
                <?php
                        $counter++;
                    endwhile;
                endif;
                ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-1"></div>
        </div>
    </div>
</section>