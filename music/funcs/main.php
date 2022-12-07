<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_MOD_MUSIC')) {
    exit('Stop!!!');
}
$page_title = $lang_module['main'];
$array = [];

$content="Nội dung trang chính";

//Gọi header của hệ thống
include NV_ROOTDIR . '/includes/header.php';


echo nv_site_theme($content);

//Gọi footer trước khi xử lý xuât ra trình duyệt
include NV_ROOTDIR . '/includes/footer.php';
