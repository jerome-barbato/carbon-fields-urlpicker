<?php
/**
 * Plugin Name: Carbon Field Url Picker
 * Description: Url Picker Field extension for Carbon Fields.
 * Version: 3.0.10
 * Author: Ionuț Staicu
 * Author URI: https://ionutstaicu.com
 * License: GPL2
 * Requires at least: 4.0
 * Tested up to: 4.8
 * Text Domain: carbon-field-urlpicker
 * Domain Path: /languages
 */

use Carbon_Fields\Carbon_Fields;
use Carbon_Field_UrlPicker\UrlPicker_Field;

require( __DIR__ . '/vendor/autoload.php' );

define('Carbon_Field_UrlPicker\\DIR', __DIR__);

add_action('after_setup_theme', function () {

    Carbon_Fields::extend(UrlPicker_Field::class, function ($container) {
        return new UrlPicker_Field( $container['arguments']['type'], $container['arguments']['name'], $container['arguments']['label'] );
    });

}, 99);

