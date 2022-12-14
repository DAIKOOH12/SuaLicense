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

$page_title = $lang_module['addtotopics'];

$id_array = [];
$listid = $nv_Request->get_string('listid', 'get,post', '');

if ($nv_Request->isset_request('topicsid', 'post')) {
    nv_insert_logs(NV_LANG_DATA, $module_name, 'log_add_topic', 'listid ' . $listid, $admin_info['userid']);

    $topicsid = $nv_Request->get_int('topicsid', 'post');
    $listid = array_filter(array_unique(array_map('intval', explode(',', $listid))));

    foreach ($listid as $_id) {
        $db->query('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_rows SET topicid=' . $topicsid . ' WHERE id=' . $_id);

        $result = $db->query('SELECT listcatid FROM ' . NV_PREFIXLANG . '_' . $module_data . '_rows WHERE id=' . $_id);
        list($listcatid) = $result->fetch(3);
        $listcatid = explode(',', $listcatid);

        foreach ($listcatid as $catid) {
            $db->query('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_' . $catid . ' SET topicid=' . $topicsid . ' WHERE id=' . $_id);
        }
    }

    $nv_Cache->delMod($module_name);

    exit($lang_module['topic_update_success']);
}

$db->sqlreset()
    ->select('id, title')
    ->from(NV_PREFIXLANG . '_' . $module_data . '_rows')
    ->order('id DESC');
if ($listid == '') {
    $db->where('inhome=1')->limit(20);
} else {
    $id_array = array_map('intval', explode(',', $listid));
    $db->where('inhome=1 AND id IN (' . implode(',', $id_array) . ')');
}

$result = $db->query($db->sql());

$xtpl = new XTemplate('addtotopics.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);

while (list($id, $title) = $result->fetch(3)) {
    $xtpl->assign('ROW', [
        'id' => $id,
        'title' => $title,
        'checked' => in_array((int) $id, $id_array, true) ? ' checked="checked"' : ''
    ]);

    $xtpl->parse('main.loop');
}

$result = $db->query('SELECT topicid, title FROM ' . NV_PREFIXLANG . '_' . $module_data . '_topics ORDER BY weight ASC');
while ($row = $result->fetch()) {
    $xtpl->assign('TOPICSID', [
        'key' => $row['topicid'],
        'title' => $row['title']
    ]);
    $xtpl->parse('main.topicsid');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$set_active_op = 'topics';

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
