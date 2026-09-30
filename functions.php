<?php

function tema_aisyah_style() {
    wp_enqueue_style(
        'tema-aisyah-style',
        get_stylesheet_uri()
    );
}

add_action('wp_enqueue_scripts', 'tema_aisyah_style');