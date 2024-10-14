<?php
/**
 * Plugin Name: Sticky Element Scroll Animations
 * Description: Adds scroll animations to sticky elements in Elementor.
 * Version: 1.0
 * Author: MD ARAFAT RAHMAN
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

// Define constants for easier access
define('STICKY_SCROLL_ANIMATIONS_VERSION', '1.0');
define('STICKY_SCROLL_ANIMATIONS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('STICKY_SCROLL_ANIMATIONS_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include the main class file
require_once STICKY_SCROLL_ANIMATIONS_PLUGIN_DIR . 'includes/class-sticky-scroll-animations.php';

// Initialize the plugin
function sticky_scroll_animations_init() {
    \StickyScrollAnimations\StickyScrollAnimations::instance();
}
add_action('plugins_loaded', 'sticky_scroll_animations_init');
