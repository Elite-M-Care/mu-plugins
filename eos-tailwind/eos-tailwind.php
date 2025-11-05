<?php
/**
 * Plugin Name: EOS Tailwind Design System
 * Plugin URI: https://emcos.com
 * Description: Master Tailwind CSS design system for all EOS plugins. Provides utility-first CSS framework to replace Bootstrap.
 * Version: 1.0.0
 * Author: EOS Development Team
 * Author URI: https://emcos.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Current plugin version.
 */
define( 'EOS_TAILWIND_VERSION', '1.0.0' );

/**
 * Plugin directory path.
 */
define( 'EOS_TAILWIND_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Plugin directory URL.
 */
define( 'EOS_TAILWIND_URL', plugin_dir_url( __FILE__ ) );

/**
 * Enqueue Tailwind CSS.
 *
 * Loads with high priority (5) to ensure it loads before other plugin styles.
 */
function eos_tailwind_enqueue_styles() {
    $css_file = EOS_TAILWIND_PATH . 'dist/tailwind.css';

    // Check if compiled CSS exists
    if ( file_exists( $css_file ) ) {
        $version = filemtime( $css_file ); // Cache busting based on file modification time

        wp_enqueue_style(
            'eos-tailwind',
            EOS_TAILWIND_URL . 'dist/tailwind.css',
            array(),
            $version,
            'all'
        );
    } else {
        // Log error if CSS file doesn't exist
        error_log( 'EOS Tailwind Design System: Compiled CSS file not found at ' . $css_file );
    }
}
add_action( 'wp_enqueue_scripts', 'eos_tailwind_enqueue_styles', 5 );

/**
 * Enqueue Tailwind CSS in admin area.
 *
 * Excludes Gravity Forms pages to prevent style conflicts.
 */
function eos_tailwind_enqueue_admin_styles() {
    // Get current screen
    $screen = get_current_screen();

    // Exclude Gravity Forms pages
    if ( $screen && (
        strpos( $screen->id, 'gf_' ) === 0 ||
        strpos( $screen->id, 'gravityforms' ) !== false ||
        strpos( $screen->base, 'gf_' ) === 0 ||
        isset( $_GET['page'] ) && strpos( $_GET['page'], 'gf_' ) === 0
    ) ) {
        return; // Don't load Tailwind on Gravity Forms pages
    }

    $css_file = EOS_TAILWIND_PATH . 'dist/tailwind.css';

    if ( file_exists( $css_file ) ) {
        $version = filemtime( $css_file );

        wp_enqueue_style(
            'eos-tailwind-admin',
            EOS_TAILWIND_URL . 'dist/tailwind.css',
            array(),
            $version,
            'all'
        );
    }
}
add_action( 'admin_enqueue_scripts', 'eos_tailwind_enqueue_admin_styles', 5 );
