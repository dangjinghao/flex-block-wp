<?php
function theme_setup() {
    $logo_width  = 280;
    $logo_height = 32;

    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );

    register_nav_menus();

    add_theme_support('post-thumbnails');


}

add_action('after_setup_theme', 'theme_setup');

?>