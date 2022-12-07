<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$module_version = [
    'name' => 'Statistics',
    'modfuncs' => 'main,allreferers,allcountries,allbrowsers,allos,allbots,referer',
    'change_alias' => 'allreferers,allcountries,allbrowsers,allos,allbots,referer',
    'submenu' => 'main,allreferers,allcountries,allbrowsers,allos,allbots',
    'layoutdefault' => 'body:main,allreferers,allcountries,allbrowsers,allos,allbots',
    'is_sysmod' => 0,
    'virtual' => 2,
    'version' => '4.5.02',
    'date' => 'Monday, June 20, 2022 4:00:00 PM GMT+07:00',
    'author' => 'VINADES.,JSC <contact@vinades.vn>',
    'note' => ''
];
