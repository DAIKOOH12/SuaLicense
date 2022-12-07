<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_IS_MOD_RSS')) {
    exit('Stop!!!');
}

/**
 * nv_rss_main_theme()
 *
 * @param string $array
 * @return string
 */
function nv_rss_main_theme($array)
{
    $array .= '<div class="tree well"><ul>';
    $array .= nv_get_rss_link();
    $array .= '</ul></div>';

    return $array;
}
