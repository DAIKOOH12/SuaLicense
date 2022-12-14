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

$id = $nv_Request->get_int('id', 'post', 0);

$sql = 'SELECT id FROM ' . NV_PREFIXLANG . '_' . $module_data . '_rows WHERE id=' . $id;
$id = $db->query($sql)->fetchColumn();
if (empty($id)) {
    exit('NO_' . $id);
}

$new_status = $nv_Request->get_bool('new_status', 'post');
$new_status = (int) $new_status;

$sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_rows SET status=' . $new_status . ' WHERE id=' . $id;
$db->query($sql);
$nv_Cache->delMod($module_name);
if ($new_status) {
    nv_insert_logs(NV_LANG_DATA, $module_name, 'Active row menu', 'Row menu id: ' . $id, $admin_info['userid']);
} else {
    nv_insert_logs(NV_LANG_DATA, $module_name, 'Inactive row menu', 'Row menu id: ' . $id, $admin_info['userid']);
}

include NV_ROOTDIR . '/includes/header.php';
echo 'OK_' . $id;
include NV_ROOTDIR . '/includes/footer.php';
