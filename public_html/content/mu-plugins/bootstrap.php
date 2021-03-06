<?php
/**
 * Plugin Name: Site/MUPlugins/Bootstrap
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 * Description: The Site/MUPlugins/Bootstrap plugin.
 *
 * @package   site\muplugins
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2017, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace site\muplugins;

// register theme directory
add_action('muplugins_loaded', function () {
    define('WP_DEFAULT_THEME', 'unnamed17');
}, 0);

// disallow site changes
add_action('muplugins_loaded', function () {
    define('DISALLOW_FILE_EDIT', TRUE);
    define('DISALLOW_FILE_MODS', TRUE);
    define('AUTOMATIC_UPDATER_DISABLED', TRUE);
}, 0);