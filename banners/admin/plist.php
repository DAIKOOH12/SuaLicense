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

if ($client_info['is_myreferer'] != 1) {
    exit('Wrong URL');
}

$sql = 'SELECT * FROM ' . NV_BANNERS_GLOBALTABLE . '_plans ORDER BY blang ASC';
$result = $db->query($sql);

$contents = [];
$contents['caption'] = $lang_module['plans_list2'];
$contents['thead'] = [$lang_module['title'], $lang_module['blang'], $lang_module['size'], $lang_module['is_act'], $lang_global['actions']];
$contents['view'] = $lang_global['detail'];
$contents['edit'] = $lang_global['edit'];
$contents['add'] = $lang_module['add_banner'];
$contents['del'] = $lang_global['delete'];
$contents['rows'] = [];

while ($row = $result->fetch()) {
    $contents['rows'][$row['id']]['title'] = $row['title'];
    $contents['rows'][$row['id']]['blang'] = (!empty($row['blang'])) ? $language_array[$row['blang']]['name'] : $lang_module['blang_all'];
    $contents['rows'][$row['id']]['size'] = $row['width'] . ' x ' . $row['height'] . 'px';
    $contents['rows'][$row['id']]['act'] = ['act_' . $row['id'], $row['act'], 'nv_pl_chang_act(' . $row['id'] . ",'act_" . $row['id'] . "');"];
    $contents['rows'][$row['id']]['view'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=info_plan&amp;id=' . $row['id'];
    $contents['rows'][$row['id']]['edit'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=edit_plan&amp;id=' . $row['id'];
    $contents['rows'][$row['id']]['add'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=add_banner&amp;pid=' . $row['id'];
    $contents['rows'][$row['id']]['del'] = 'nv_pl_del(' . $row['id'] . ');';
}

include NV_ROOTDIR . '/includes/header.php';
echo nv_plist_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
