<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN')) {
    exit('Stop!!!');
}

$allow_func = [
    'main',
    'content',
    'alias',
    'change_status',
    'change_weight',
    'del',
    'view'
];

define('NV_IS_FILE_ADMIN', true);

if (defined('NV_IS_SPADMIN')) {
    $allow_func[] = 'config';
}

// Document
$array_url_instruction['content'] = 'https://wiki.nukeviet.vn/nukeviet4:admin:about#them_bai_mới';
$array_url_instruction['config'] = 'https://wiki.nukeviet.vn/nukeviet4:admin:about#cấu_hinh';
$array_url_instruction['main'] = 'https://wiki.nukeviet.vn/nukeviet4:admin:about';

// Get Config Module
$sql = 'SELECT config_name, config_value FROM ' . NV_PREFIXLANG . '_' . $module_data . '_config';
$list = $nv_Cache->db($sql, '', $module_name);
$page_config = [];
foreach ($list as $values) {
    $page_config[$values['config_name']] = $values['config_value'];
}
