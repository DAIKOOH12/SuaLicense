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
    'name' => 'News', // Tieu de module
    'modfuncs' => 'main,viewcat,topic,groups,author,detail,search,content,tag,rss', // Cac function co block
    'change_alias' => 'topic,groups,content,rss',
    'submenu' => 'content,rss,search',
    'is_sysmod' => 0, // 1:0 => Co phai la module he thong hay khong
    'virtual' => 1, // 1:0 => Co cho phep ao hao module hay khong
    'version' => '4.5.02', // Phien ban cua modle
    'date' => 'Monday, June 20, 2022 4:00:00 PM GMT+07:00', // Ngay phat hanh phien ban
    'author' => 'VINADES.,JSC <contact@vinades.vn>', // Tac gia
    'note' => '', // Ghi chu
    'uploads_dir' => [
        $module_upload,
        $module_upload . '/source',
        $module_upload . '/temp_pic',
        $module_upload . '/topics'
    ],
    'files_dir' => [
        $module_upload . '/topics'
    ]
];
