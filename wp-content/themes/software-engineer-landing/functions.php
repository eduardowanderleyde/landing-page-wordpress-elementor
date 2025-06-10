<?php
/**
 * Funções e definições do tema Software Engineer Landing
 */

if (!defined('ABSPATH')) {
    exit; // Saída se acessado diretamente
}

// Configuração do tema
function software_engineer_landing_setup() {
    // Suporte a recursos do WordPress
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Registrar menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'software-engineer-landing'),
        'footer' => __('Menu Rodapé', 'software-engineer-landing'),
    ));
}
add_action('after_setup_theme', 'software_engineer_landing_setup');

// Registrar scripts e estilos
function software_engineer_landing_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);
    
    // Estilo principal
    wp_enqueue_style('software-engineer-landing-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Scripts personalizados
    wp_enqueue_script('software-engineer-landing-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'software_engineer_landing_scripts');

// Suporte ao Elementor
function software_engineer_landing_elementor_support() {
    add_theme_support('elementor');
    add_theme_support('elementor-pro');
}
add_action('after_setup_theme', 'software_engineer_landing_elementor_support');

// Registrar widgets
function software_engineer_landing_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'software-engineer-landing'),
        'id'            => 'sidebar-1',
        'description'   => __('Adicione widgets aqui.', 'software-engineer-landing'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'software_engineer_landing_widgets_init');

// Personalizar o excerpt
function software_engineer_landing_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'software_engineer_landing_excerpt_length');

function software_engineer_landing_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'software_engineer_landing_excerpt_more'); 