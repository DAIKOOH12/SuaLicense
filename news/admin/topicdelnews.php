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

$id = $nv_Request->get_string('list', 'post,get');
$arr_id = array_map('intval', array_unique(array_filter(explode(',', $id))));

foreach ($arr_id as $id) {
    $db->query('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_rows SET topicid=0 WHERE id = ' . $id);
}

nv_htmlOutput($lang_module['topic_delete_success']);
