<section class="three_col_cards mb-5 bg-cream pt-5">
    <div class="container-xl text-center">
        <div class="row">
            <div class="col">
                <h2 class="mb-4"><?=get_field('title')?></h2>
            </div>
        </div>
    </div>
    <div class="container pb-4 text-center">
        <div class="row justify-content-md-center">
            <div class="col-lg-6">
                <?=get_field('intro')?>
            </div>
        </div>
    </div>
    <div class="bg-dark-cream pt-5">
        <div class="container-xl three_col_cards__grid">
            <div class="row">
<?php
$featured_posts = get_field('cards');
if( $featured_posts ):
    foreach( $featured_posts as $post ): 
        setup_postdata($post);

        if ( has_post_thumbnail($post->ID) ) {
            $card_img = get_the_post_thumbnail_url($post->ID);
        }
        else {
            $card_img = "/wp-content/uploads/2024/09/jpg-1.jpeg";
        }
?>
                    <div class="col-md-4 mb-5 mb-lg-5">
                        <a href="<?php the_permalink($post->ID); ?>" class="three_col_cards__card d-block position-relative" style="background-image: url(<?php echo $card_img; ?>);">
                            <div class="three_col_cards__title bg-cream text-center p-3 text-decoration-none position-absolute w-100"><?php echo get_the_title($post->ID); ?></div>
                        </a>
                    </div>
<?php
    endforeach;
    wp_reset_postdata();
endif;
?>
            </div>
        </div>
    </div>
</section>