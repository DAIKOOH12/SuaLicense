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
*/

if (!defined('NV_ADMIN')) {
    exit('Stop!!!');
}

$submenu['content'] = $lang_module['add'];

if (defined('NV_IS_SPADMIN')) {
    $submenu['config'] = $lang_module['config'];
}
