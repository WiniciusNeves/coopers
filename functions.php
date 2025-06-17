<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
if ( ! function_exists( 'coopers_setup' ) ) :

    function coopers_setup() {
        // Add theme support for title tag
        add_theme_support( 'title-tag' );

        // Add theme support for post thumbnails
        add_theme_support( 'post-thumbnails' );

        // Register Primary Menu
        register_nav_menus( array(
            'primary' => esc_html__( 'Menu Primário', 'coopers' ),
        ) );

        // Add theme support for HTML5 markup
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Add theme support for custom logo
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'coopers_setup' );

/**
 * Enqueue styles and scripts
 */
function coopers_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style( 'coopers-style', get_stylesheet_uri() );

    // Enqueue theme script
    wp_enqueue_script( 'coopers-script', get_template_directory_uri() . '/js/script.js', array(), null, true );

    // Localize script only on front page or home page
    if ( is_front_page() || is_home() ) {
        $good_things_section = get_field('good_things_section');

        // Initialize ACF cards data
        $acf_cards_data = array();

        // Loop through ACF cards and build data array
        if (isset($good_things_section['good_things_cards']) && is_array($good_things_section['good_things_cards'])) {
            foreach ($good_things_section['good_things_cards'] as $card) {
                $acf_cards_data[] = array(
                    'img' => !empty($card['card_image']) ? esc_url($card['card_image']) : get_template_directory_uri() . '/assets/img/placeholder.png',
                    'text' => !empty($card['card_text']) ? esc_html($card['card_text']) : 'Default card text.',
                    'read_more_text' => !empty($card['read_more_text']) ? esc_html($card['read_more_text']) : 'read more',
                    'read_more_url' => !empty($card['read_more_url']) ? esc_url($card['read_more_url']) : '#',
                );
            }
        } else {
            // Set default ACF cards data if no data is found
            $acf_cards_data = [
                ['img' => get_template_directory_uri() . '/assets/img/card1.png', 'text' => 'Organize your daily job enhance your life performance', 'read_more_text' => 'read more', 'read_more_url' => '#'],
                ['img' => get_template_directory_uri() . '/assets/img/card2.png', 'text' => 'Mark one activity as done makes your brain understands the power of doing.', 'read_more_text' => 'read more', 'read_more_url' => '#'],
                ['img' => get_template_directory_uri() . '/assets/img/card3.png', 'text' => 'Careful with misunderstanding between list of things and desires.', 'read_more_text' => 'read more', 'read_more_url' => '#'],
                ['img' => get_template_directory_uri() . '/assets/img/card1.png', 'text' => 'Explore the wonders of the world with curiosity.', 'read_more_text' => 'read more', 'read_more_url' => '#'],
                ['img' => get_template_directory_uri() . '/assets/img/card2.png', 'text' => 'Learn a new skill and open doors to new opportunities.', 'read_more_text' => 'read more', 'read_more_url' => '#'],
                ['img' => get_template_directory_uri() . '/assets/img/card3.png', 'text' => 'Embrace challenges as they are steps to growth.', 'read_more_text' => 'read more', 'read_more_url' => '#'],
                ['img' => get_template_directory_uri() . '/assets/img/card1.png', 'text' => 'Cherish every moment with loved ones.', 'read_more_text' => 'read more', 'read_more_url' => '#'],
                ['img' => get_template_directory_uri() . '/assets/img/card2.png', 'text' => 'Travel to places unknown and find new perspectives.', 'read_more_text' => 'read more', 'read_more_url' => '#'],
                ['img' => get_template_directory_uri() . '/assets/img/card3.png', 'text' => 'Create a positive impact in your community.', 'read_more_text' => 'read more', 'read_more_url' => '#'],
            ];
        }

        // Localize script with ACF cards data
        wp_localize_script(
            'coopers-script',
            'coopersScriptData',
            array(
                'goodThingsCards' => $acf_cards_data,
            )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'coopers_scripts' );

