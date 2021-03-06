<?php
/**
 * @package    site\plugins\functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2017, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace site\plugins\functionality;

// jetpack developer friendly by default
add_action('plugins_loaded', function () {
    defined('JETPACK_DEV_DEBUG') or define('JETPACK_DEV_DEBUG', TRUE);
    add_filter('jetpack_get_default_modules', '__return_empty_array', 99);
});