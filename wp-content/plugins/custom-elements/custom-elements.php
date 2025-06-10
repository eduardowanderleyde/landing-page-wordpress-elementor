<?php
/**
 * Plugin Name: Custom Elements for Software Engineer Landing
 * Description: Widgets personalizados para a landing page do engenheiro de software
 * Version: 1.0.0
 * Author: Eduardo Wanderley
 */

if (!defined('ABSPATH')) {
    exit;
}

class Custom_Elements_Plugin {
    public function __construct() {
        add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets']);
        add_action('elementor/elements/categories_registered', [$this, 'add_elementor_widget_categories']);
    }

    public function add_elementor_widget_categories($elements_manager) {
        $elements_manager->add_category(
            'software-engineer',
            [
                'title' => __('Software Engineer', 'custom-elements'),
                'icon' => 'fa fa-code',
            ]
        );
    }

    public function register_widgets() {
        require_once(__DIR__ . '/widgets/skill-card.php');
        require_once(__DIR__ . '/widgets/project-card.php');
        require_once(__DIR__ . '/widgets/contact-form.php');

        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Skill_Card_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Project_Card_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Contact_Form_Widget());
    }
}

new Custom_Elements_Plugin(); 