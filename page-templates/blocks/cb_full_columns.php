<?php
$bg = isset(get_field('background')[0]) && get_field('background')[0] == 'Yes' ? 'bg-cream' : null;

$containerBg = get_field('background') == 'cream' ? 'bg-cream' : 'bg-white';
$contentBg = get_field('background') == 'cream' ? 'bg-white' : 'bg-cream';
?>
<section class="full_columns <?=$bg?> py-5">
    <div class="container-fluid">
        <?php
        if ( get_field('title') ) {
        ?>
        <div class="row g-4 align-items-start">
            <div class="col-md">
                <h2 class="text-center"><?=get_field('title')?></h2>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="row g-4 align-items-start">
<?php
if( have_rows('columns') ):
    while( have_rows('columns') ) : the_row();
?>
            <div class="col-md">
                <?=get_sub_field('column')?>
            </div>
<?php
    endwhile;
endif;
?>
        </div>
    </div>
</section>