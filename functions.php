<?php
function theme_enqueue_styles()
{
    wp_enqueue_style(
        'tailwind-style',
        get_template_directory_uri() . 'tailwind-output.css',
        array(),
        '1.0'
    );
}

add_action('wp-enqueue_scripts', 'theme_enqueue_styles');
