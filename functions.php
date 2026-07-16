<?php

require_once get_template_directory() . '/inc/quotes.php';

/**
 * Compass Theme Functions
 */

function compass_setup() {

    load_theme_textdomain(
        'compass',
        get_template_directory() . '/languages'
    );

    add_theme_support('editor-styles');

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_theme_support('automatic-feed-links');

    add_theme_support('wp-block-styles');

    add_theme_support('responsive-embeds');

    add_theme_support('align-wide');

}

add_action(
    'after_setup_theme',
    'compass_setup'
);


function compass_enqueue_assets() {

    wp_enqueue_style(
        'compass-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

}

add_action(
    'wp_enqueue_scripts',
    'compass_enqueue_assets'
);


function compass_enqueue_fonts() {

    wp_enqueue_style(
        'compass-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap',
        array(),
        null
    );

}

add_action(
    'wp_enqueue_scripts',
    'compass_enqueue_fonts'
);


/**
 * Reading Time
 */

function compass_reading_time() {

    $content = get_post_field(
        'post_content',
        get_the_ID()
    );

    $word_count = str_word_count(
        wp_strip_all_tags($content)
    );

    $reading_time = max(
        1,
        ceil($word_count / 200)
    );

    return $reading_time . ' min read';

}


function compass_reading_time_shortcode() {

    return compass_reading_time();

}

add_shortcode(
    'reading_time',
    'compass_reading_time_shortcode'
);
function compass_scripts() {

    wp_enqueue_script(
        'compass-konami',
        get_template_directory_uri() . '/assets/js/konami.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );

}

add_action(
    'wp_enqueue_scripts',
    'compass_scripts'
);

/**
 * Mailchimp Connected Sites
 */
function compass_mailchimp_connected_site() {

    wp_enqueue_script(
        'mailchimp-connected-sites',
        'https://chimpstatic.com/mcjs-connected/js/users/41d12daf5a3640d12ad605ef1/007ab43cc6e564297c8a206fa.js',
        [],
        null,
        false
    );

}

add_action('wp_enqueue_scripts', 'compass_mailchimp_connected_site');