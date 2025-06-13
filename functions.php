<?php
/**
 * Funções do tema Coopers.
 *
 * @package Coopers
 */

if ( ! function_exists( 'coopers_setup' ) ) :
    /**
     * Configura as funcionalidades básicas do tema.
     */
    function coopers_setup() {
        // Adiciona suporte para Título do Tema
        add_theme_support( 'title-tag' );

        // Adiciona suporte para Imagens Destacadas
        add_theme_support( 'post-thumbnails' );

        // Registra menus de navegação
        register_nav_menus( array(
            'primary' => esc_html__( 'Menu Primário', 'coopers' ),
        ) );

        // Adiciona suporte para HTML5
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Adiciona suporte a Custom Logo
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
 * Enfileira scripts e estilos para o tema.
 */
function coopers_scripts() {
    // Você pode enfileirar outros scripts e estilos aqui, se necessário.
    // Exemplo: wp_enqueue_style( 'coopers-main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0' );
    // Exemplo: wp_enqueue_script( 'coopers-custom-script', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'coopers_scripts' );

// Você pode adicionar mais funções e filtros aqui.
