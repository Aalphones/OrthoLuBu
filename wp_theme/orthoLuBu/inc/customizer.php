<?php

/**
 * Creates the settings, controls and sections for the customizer
 *
 * @param $wp_customize
 */
function theme_register($wp_customize) {
    $colors = array();
    $colors[] = array(
        'slug' => 'header_textcolor',
        'label' => __('H1 Text Color')
    );
    $colors[] = array(
        'slug' => 'h2_textcolor',
        'label' => __('H2 Text Color')
    );
    $colors[] = array(
        'slug' => 'h1_bordercolor',
        'label' => __('H1 Border Color')
    );
    $colors[] = array(
        'slug' => 'heading_color',
        'label' => __('Headings Color')
    );
    $colors[] = array(
        'slug' => 'text_color',
        'label' => __('Text Color')
    );
    $colors[] = array(
        'slug' => 'link_color',
        'label' => __('Link Color')
    );
    $colors[] = array(
        'slug' => 'blockquote_color',
        'label' => __('Blockquote Color')
    );
    $colors[] = array(
        'slug' => 'footer_color',
        'label' => __('Footer Color')
    );

    foreach ($colors as $color) {
        // SETTINGS
        $wp_customize->add_setting(
                $color['slug'], array(
            'default' => $color['default'],
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
                )
        );
        // CONTROLS
        $wp_customize->add_control(
                new WP_Customize_Color_Control(
                $wp_customize, $color['slug'], array('label' => $color['label'],
            'section' => 'colors',
            'settings' => $color['slug'])
                )
        );
    }

    $wp_customize->add_section("werbung", array(
        "title" => __("Footer Text", "customizer_werbung_sections"),
        "priority" => 30,
    ));

    $wp_customize->add_setting("werbung_text", array(
        "default" => "",
        "transport" => "postMessage",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "werbung_text", array(
        "label" => __("Leittext", "customizer_werbung_text_label"),
        "section" => "werbung",
        "settings" => "werbung_text",
        "type" => "textarea",
            )
    ));
    
    $wp_customize->add_setting("kontakt_text", array(
        "default" => "",
        "transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "kontakt_text", array(
        "label" => __("Kontaktdaten", "customizer_kontakt_text_label"),
        "section" => "werbung",
        "settings" => "kontakt_text",
        "type" => "textarea",
            )
    ));
}

add_action('customize_register', 'theme_register');

function theme_customize_css() {
    ?>
    <style type="text/css">
        html { color:<?php echo get_option('text_color') ?>; }
        #page-header .title_brand h1 { color:#<?php echo get_option('header_textcolor') ?>; border-bottom: 5px solid <?php echo get_option('h1_bordercolor') ?>; }
        #page-header .title_brand h2 { color:<?php echo get_option('h2_textcolor') ?>; }
        h1, h2, h3, h4, h5, h6 { color:<?php echo get_option('heading_color') ?>; }
        a { color:<?php echo get_option('link_color') ?>; }
        blockquote { border-left: 5px solid <?php echo get_option('blockquote_color') ?>; }
        footer.page-footer { background-color: <?php echo get_option('footer_color') ?>; }
        #page-header { background-color: <?php echo get_option('footer_color') ?>; }
    </style>
    <?php
}

add_action('wp_head', 'theme_customize_css');
