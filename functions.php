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
            src: url('{$template_dir}/assets/fonts/Termina Test/TerminaTest-Regular.otf') format('opentype');
            font-weight: 400;
            font-style: normal;
        }
    </style>
    ";
}
add_action('wp_head', 'add_custom_fonts');



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
