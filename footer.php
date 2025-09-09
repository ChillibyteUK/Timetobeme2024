<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Timetobeme2024
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<footer>
    <div class="container-xl pt-5">
        <div class="row g-4 pb-5">
            <div class="col-md-6">
                <div class="row g-4 pb-5">
                    <div class="col-md-4">
                        <div class="menu-title mb-3 fw-bold">Treatments</div>
                        <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-title mb-3 fw-bold">About</div>
                        <?php wp_nav_menu(array('theme_location' => 'footer_menu_2')); ?>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-title mb-3 fw-bold">Quick Links</div>
                        <?php wp_nav_menu(array('theme_location' => 'footer_menu_3')); ?>
                    </div>
                </div>
            </div>
			<div class="col-md-6">
				<div class="row g-4">
					<div class="col-md-6">
						<div class="menu-title mb-3">Opening Hours:</div>
						<div class="mb-4"><?=do_shortcode('[opening_hours]')?></div>
					</div>
					<div class="col-md-6">
						<div class="menu-title">Address:</div>
						<div class="mb-4"><?=do_shortcode('[contact_address]')?></div>
						<div class="menu-title">Phone:</div>
						<div class="mb-4"><?=do_shortcode('[contact_phone]')?></div>
						<div class="menu-title">Email:</div>
						<div class="mb-4"><?=do_shortcode('[contact_email]')?></div>
						<?=social_icons()?>
					</div>
				</div>
            </div>
        </div>
    </div>
    <div class="container-xl colophon pb-4">
        <div class="row g-4">
            <div class="col-md-6 order-2 order-md-1">
                &copy; <?=date('Y')?> TIME to be ME All Rights Reserved
            </div>
            <div class="col-md-6 order-1 order-md-2 d-flex align-items-center justify-content-md-end flex-wrap gap-1">
                <a href="/terms-conditions/">Terms &amp; Conditions</a> | <a href="/privacy-policy/">Privacy</a> &amp; <a href="/cookie-policy/">Cookie</a> Policy</a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>