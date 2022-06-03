<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Original-Author: Niklas Rosenqvist
Original-Author URI: https://www.jhotadhari.com/
*/

if (! class_exists('CMB2_NavMenus')) {
    class CMB2_NavMenus
    {
        static function init()
        {
            if (! class_exists('CMB2')) {
                return;
            }

            // Include files
            require_once __DIR__.'/src/Integration.php';
            require_once __DIR__.'/src/helpers.php';

            // Initialize plugin
            \Jhotadhari\CMB2\NavMenus\Integration::init();
        }
    }
}
add_action('admin_init', [CMB2_NavMenus::class, 'init'], 1 );
