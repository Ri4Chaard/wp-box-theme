<?php

//Styles
function theme_enqueue_styles()
{
    wp_enqueue_style(
        'tailwind-style',
        get_template_directory_uri() . '/assets/css/tailwind-output.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

//Custom font
function add_custom_fonts()
{
    $template_dir = get_template_directory_uri();
    echo "
    <style>
        @font-face {
            font-family: 'Termina Test';
            src: url('{$template_dir}/assets/fonts/Termina Test/TerminaTest-Bold.otf') format('opentype');
            font-weight: 700;
            font-style: normal;
        }
        @font-face {
            font-family: 'Termina Test';
            src: url('{$template_dir}/assets/fonts/Termina Test/TerminaTest-Demi.otf') format('opentype');
            font-weight: 600;
            font-style: normal;
        }
        @font-face {
            font-family: 'Termina Test';
            src: url('{$template_dir}/assets/fonts/Termina Test/TerminaTest-Medium.otf') format('opentype');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'Termina Test';
            src: url('{$template_dir}/assets/fonts/Termina Test/TerminaTest-Regular.otf') format('opentype');
            font-weight: 400;
            font-style: normal;
        }
    </style>
    ";
}
add_action('wp_head', 'add_custom_fonts');

//JS
function theme_enqueue_scripts()
{
    wp_enqueue_style(
        'tailwind-style',
        get_template_directory_uri() . '/assets/css/tailwind-output.css',
        array(),
        '1.0'
    );
    wp_enqueue_script(
        'main-scripts',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');



//Theme Options
add_theme_support('menus');

//Menus
register_nav_menus(

    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);

//Custom walker for li classes
function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function add_menu_list_item_class($classes, $item, $args)
{
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

// Boxing Records Section Customizer
function boxing_records_customizer($wp_customize)
{
    // Section settings
    $wp_customize->add_section('boxing_records_section', [
        'title' => 'Boxing Records',
        'description' => 'Boxing records section settings',
        'priority' => 30,
    ]);

    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting("record_text_$i", [
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("record_text_$i", [
            'label' => "Text for Section $i",
            'section' => 'boxing_records_section',
            'type' => 'textarea',
        ]);

        $wp_customize->add_setting("record_image_$i", [
            'default' => '',
            'sanitize_callback' => 'absint',
        ]);
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, "record_image_$i", [
            'label' => "Upload Image for Section $i",
            'section' => 'boxing_records_section',
            'mime_type' => 'image',
        ]));
    }

    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting("record_number_$i", [
            'default' => 'Num+',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("record_number_$i", [
            'label' => "Records Count Text $i",
            'section' => 'boxing_records_section',
            'type' => 'text',
        ]);

        $wp_customize->add_setting("record_label_$i", [
            'default' => 'Text',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("record_label_$i", [
            'label' => "Record Label $i",
            'section' => 'boxing_records_section',
            'type' => 'text',
        ]);
    }
}
add_action('customize_register', 'boxing_records_customizer');

//Classes
function classes_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Classes',
            'singular_name' => 'Class',
        ),
        // 'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type('classes', $args);
}
add_action('init', 'classes_post_type');
