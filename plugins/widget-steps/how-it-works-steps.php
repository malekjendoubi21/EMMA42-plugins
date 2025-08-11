<?php
/**
 * Plugin Name: How It Works Steps
 * Description: Un widget Elementor pour afficher des étapes avec icônes et titres.
 * Version: 1.0
 * Author: Malek Jendoubi
 */

if ( ! defined( 'ABSPATH' ) ) exit;

final class How_It_Works_Steps_Plugin {
    const VERSION = '1.0';

    public function __construct() {
        add_action( 'elementor/widgets/register', [ $this, 'register_widget' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_styles' ] );
    }

    public function enqueue_styles() {
        wp_enqueue_style('how-it-works-style', plugin_dir_url(__FILE__) . 'style.css');
    }

    public function register_widget( $widgets_manager ) {
        require_once( __DIR__ . '/widget-how-it-works.php' );
        $widgets_manager->register( new \How_It_Works_Widget() );
    }
}
new How_It_Works_Steps_Plugin();
