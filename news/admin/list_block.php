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

if (!defined('NV_IS_AJAX')) {
    exit('Wrong URL');
}

$bid = $nv_Request->get_int('bid', 'get', 0);

$contents = nv_show_block_list($bid);

include NV_ROOTDIR . '/includes/header.php';
echo $contents;
include NV_ROOTDIR . '/includes/footer.php';
