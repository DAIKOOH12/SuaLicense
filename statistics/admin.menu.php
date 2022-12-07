<?php

/**
 * NukeViet Content Management System
 * DEARNASOUL Team
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_ADMIN')) {
    exit('Stop!!!');
}

//Ket noi ngon ngu cua module
if (file_exists(NV_ROOTDIR . '/modules/' . $module_file . '/language/' . NV_LANG_INTERFACE . '.php')) {
    require NV_ROOTDIR . '/modules/' . $module_file . '/language/' . NV_LANG_INTERFACE . '.php';
} elseif (file_exists(NV_ROOTDIR . '/modules/' . $module_file . '/language/' . NV_LANG_DATA . '.php')) {
    require NV_ROOTDIR . '/modules/' . $module_file . '/language/' . NV_LANG_DATA . '.php';
} elseif (file_exists(NV_ROOTDIR . '/modules/' . $module_file . '/language/en.php')) {
    require NV_ROOTDIR . '/modules/' . $module_file . '/language/en.php';
}

$allow_func = [
    'main',
    'allbots',
    'allbrowsers',
    'allcountries',
    'allos',
    'allreferers',
    'referer'
];

$submenu['allbots'] = $lang_module['bot'];
$submenu['allbrowsers'] = $lang_module['browser'];
$submenu['allcountries'] = $lang_module['country'];
$submenu['allos'] = $lang_module['os'];
$submenu['allreferers'] = $lang_module['referer'];

if (defined('NV_IS_GODADMIN')) {
    $allow_func[] = 'cleardata';
    $submenu['cleardata'] = $lang_module['cleardata'];
}
