<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

if(!isset($_COOKIE['ABTest'])) {
    $random = rand(1,2);        // Tildeler en random værdie på 1 eller 2
    $cookie_name = 'ABTest';    // Cookie navn
    $cookie_value = $random;    // Værdien bliver lagt over i Cookie variablen $cookie_value
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Her sættes Cookien med en leve tid på 86400 * 30 dage (86400 sekunder er længden på en dag)
    header('Refresh:0'); // Refresher vores webside når cookie'en er sat
}
