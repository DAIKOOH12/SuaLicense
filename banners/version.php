<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GPL-3.0
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$module_version = [
    'name' => 'Banners',
    'modfuncs' => 'main, addads, stats',
    'is_sysmod' => 1,
    'virtual' => 0,
    'version' => '4.5.02',
    'date' => 'Monday, June 20, 2022 4:00:00 PM GMT+07:00',
    'author' => 'VINADES.,JSC <contact@vinades.vn>',
    'note' => '',
    'uploads_dir' => [
        $module_upload
    ]
];
