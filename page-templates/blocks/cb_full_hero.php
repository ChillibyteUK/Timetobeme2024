<?php
$class = $block['className'] ?? null;
?>
<section class="full-hero bg-green">
    <div class="container-xl position-relative">
        <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php
                $counter = 0;
                foreach (get_field('slides') as $s) {
                ?>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="<?=$counter;?>" <?php if ( $counter == 0 ) { ?>class="active" aria-current="true"<?php } ?> aria-label="Slide <?php echo $counter+1; ?>"></button>
                <?php
                    $counter++;
                }
                ?>
            </div>
            <div class="carousel-inner">
                <?php
    $active = 'active';
    foreach (get_field('slides') as $s) {
        $img = wp_get_attachment_image_url($s, 'full');
        ?>
                <div class="carousel-item <?=$active?>">
                    <div class="row">
                        <div class="full-hero__inner col-lg-8 p-5">
                            <img src="/wp-content/uploads/2024/10/logo-slider.png" alt="Time to be Me" class="logo">
                            <h1 class="">
                                <?=get_field('title')?>
                            </h1>
                            <?php
                                if (get_field('content')) {
                                    ?>
                            <div class="mb-4 h5">
                                <?=get_field('content')?>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="col-lg-4 bg-image" style="background-image:url(<?=$img?>)"></div>
                    </div>
                </div>
                <?php
        $active = '';
    }
    ?>
            </div>
        </div>
    </div>
</section>