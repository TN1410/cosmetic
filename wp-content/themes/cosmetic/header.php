<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mamamedicine
 */
$header_logo = get_field('header_logo', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title>Cosmetic</title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'mamamedicine'); ?></a>
        <header id="masthead" class="site-header">
            <div class="uk-navbar-transparent uk-navbar-container" uk-navbar>
                <div class="uk-navbar-left">
                    <a href="<?php echo home_url(); ?>" class="uk-navbar-item uk-logo">
                        <img src="<?php echo $header_logo['url']; ?>" alt="logo" title="logo">
                    </a>
                    <ul class="uk-navbar-nav uk-navbar-middle">
                        <li><a href="<?php echo home_url('/events/'); ?>">Events</a></li>
                        <li><a href="<?php echo home_url('/courses/'); ?>">courses</a></li>
                        <li><a href="<?php echo home_url('/membership/'); ?>">Membership</a></li>
                        <li><a href="<?php echo home_url('/about-us/'); ?>">About Us</a></li>
                        <li><a href="<?php echo home_url('/conatct/'); ?>">Conatct</a></li>
                        <li><a href="<?php echo home_url('/book-now/'); ?>">Book Now</a></li>
                    </ul>
                    <div class="language-wrapper">
                        <?php echo do_shortcode( '[wpml_language_selector_widget]' ); ?>
                    </div>
                    <div class="uk-navbar-item uk-navbar-right">
                     
                    </div>
                </div>
            </div>
        </header>
    </div>
    <?php wp_footer(); ?>
</body>
</html>