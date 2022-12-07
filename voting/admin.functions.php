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

$submenu['content'] = $lang_module['voting_add'];

$allow_func = [
    'main',
    'content',
    'del',
    'setting'
];

define('NV_IS_FILE_ADMIN', true);

// Document
$array_url_instruction['main'] = 'https://wiki.nukeviet.vn/nukeviet4:admin:voting';
$array_url_instruction['content'] = 'https://wiki.nukeviet.vn/nukeviet4:admin:voting#them_tham_do';
