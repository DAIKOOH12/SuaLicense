<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$array['id'] = $nv_Request->get_int('id', 'get,post', 0);
$array['area'] = $nv_Request->get_int('area', 'get,post', 0);

if ($array['id'] > 0) {
    $array = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id=' . $array['id'])->fetch();

    if (!empty($array['id'])) {
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $array['alias'] . $global_config['rewrite_exturl']);
    } else {
        nv_info_die($lang_global['error_404_title'], $lang_global['error_404_title'], $lang_global['error_404_content'], 404);
    }
}
