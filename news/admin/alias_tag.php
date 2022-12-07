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

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$title = $nv_Request->get_title('title', 'post', '');

include NV_ROOTDIR . '/includes/header.php';
echo change_alias_tags($title);
include NV_ROOTDIR . '/includes/footer.php';
