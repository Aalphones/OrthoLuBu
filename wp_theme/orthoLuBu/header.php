<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <?php if (is_singular() && pings_open()) { ?>
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
            <?php
        }
        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="page-header">
<?php if (get_header_image()) { ?>
                <img src="<?php echo esc_url(get_header_image()); ?>" class="ken-burns"
                     alt="<?php echo esc_html(get_bloginfo('title')); ?>"/>
                 <?php } else {
                     ?>
                <div id="uri" class="hidden"><?php echo get_template_directory_uri(); ?></div>
                <img src="" class="ken-burns" id="default-header"
                     alt="<?php echo esc_html(get_bloginfo('title')); ?>"/>
<?php } ?>
            <div class="title_brand">
                <h1>
                    Dr. med. Thomas Oechsler<br>
                    Eric Vahsen
                </h1>
                <h2><?php bloginfo('description'); ?></h2>
            </div>
            <nav>
                <div class="nav-wrapper">
                    <a href="" data-activates="mobile" class="button-collapse"><i class="fa fa-bars"></i></a>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'container' => '',
                            'menu_class' => 'right hide-on-med-and-down',
                            'menu_id' => 'nav-mobile',
                            'fallback_cb' => '__return_false'
                        ));
                        ?>
                </div>
            </nav>
        </header>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => '',
            'menu_class' => 'side-nav',
            'menu_id' => 'mobile',
            'fallback_cb' => '__return_false'
        ));
        ?>
