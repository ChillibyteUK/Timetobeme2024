<section class="gallery bg-cream py-5">
    <div class="container-fluid">
        <div class="row g-4 align-items-start">
            <div class="col">
                <div class="slider responsive">
<?php
if( have_rows('gallery') ):
    while( have_rows('gallery') ) : the_row();
        $image = get_sub_field('image');
        if( !empty( $image ) ):
        ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php
        endif;
    endwhile;
endif;
?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function() {
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
<script>
jQuery( document ).ready(function($) {
    $('.responsive').slick({
      dots: true,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
});
</script>
    <?php
},9999);