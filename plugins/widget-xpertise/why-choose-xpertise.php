<?php
/**
 * Plugin Name: Why Choose Xpertise
 * Description: Un widget Elementor pour afficher les avantages avec icônes et descriptions.
 * Version: 1.0
 * Author: Malek Jendoubi
 */

if ( ! defined( 'ABSPATH' ) ) exit;

final class Why_Choose_Xpertise_Plugin {
    const VERSION = '1.0';

    public function __construct() {
        add_action( 'elementor/widgets/register', [ $this, 'register_widget' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_styles' ] );
    }

    public function enqueue_styles() {
        wp_enqueue_style('why-choose-xpertise-style', plugin_dir_url(__FILE__) . 'style.css');
    }

    public function register_widget( $widgets_manager ) {
        require_once( __DIR__ . '/widget-why-choose-xpertise.php' );
        $widgets_manager->register( new \Why_Choose_Xpertise_Widget() );
    }
}
new Why_Choose_Xpertise_Plugin();
