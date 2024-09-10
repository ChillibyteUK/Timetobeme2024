<?php
$c = count(get_field('slides')) - 1;
?>
<!-- hero_slideshow -->
<section class="hero__container carousel slide carousel-fade" id="heroCarousel" data-interval="3000" data-ride="carousel">
    <ol class="carousel-indicators" style="bottom:130px">
        <?php
        $aa = 'active';
        for ($i = 0; $i <= $c; $i++) {
            ?>
        <li data-target="#heroCarousel" data-slide-to="<?=$i?>" class="<?=$aa?>"></li>
            <?php
            $aa = '';
        }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php
        $active = 'active';
        while (have_rows('slides')) {
            the_row();
            ?>
        <div class="carousel-item <?=$active?>" style="background-image:url(<?=wp_get_attachment_image_url(get_sub_field('image'),'full')?>">
            <div class="container text-center">
                <div class="h0"><?=get_sub_field('title')?></div>
                <div class="buttons w-md-50 mx-auto d-flex flex-wrap justify-content-around">
                    <?php
                    $cta1 = get_sub_field('cta_1');
                    $cta2 = get_sub_field('cta_2');
                    ?>
                    <a href="<?=$cta1['url']?>" class="btn btn-primary mb-2"><?=$cta1['title']?></a>
                    <a href="<?=$cta2['url']?>" class="btn btn-primary mb-2"><?=$cta2['title']?></a>
                </div>
            </div>
        </div>
            <?php
            $active = '';
        }
        ?>
    </div>
    <div class="accreditations">
        <div class="container py-4 d-md-flex justify-content-between align-items-center">
                <div class="accreditations__intro text-center mb-2 mb-md-0">CERTIFICATIONS<br class="d-none d-md-block"> &amp; MEMBERSHIPS</div>
                <div class="accreditations__logos">
                <?php
                $acc = get_field('accreditations','options');

                foreach ($acc as $a) {
                    echo '<div><img src="' . wp_get_attachment_image_url($a,'large') . '"></div>';
                }
                ?>
                </div>
        </div>
    </div>
</section>