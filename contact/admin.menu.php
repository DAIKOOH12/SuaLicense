<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_ADMIN')) {
    exit('Stop!!!');
}

if (defined('NV_IS_SPADMIN')) {
    $submenu['department'] = $lang_module['department_title'];
    $submenu['supporter'] = $lang_module['supporter'];
}
$submenu['send'] = $lang_module['send_title'];
if (defined('NV_IS_SPADMIN')) {
    $submenu['config'] = $lang_module['config'];
}
