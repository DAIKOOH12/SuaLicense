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

$submenu['content'] = $lang_module['add'];

if (defined('NV_IS_SPADMIN')) {
    $submenu['config'] = $lang_module['config'];
}
