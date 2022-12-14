<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_IS_MOD_BANNERS')) {
    exit('Stop!!!');
}

$page_title = $lang_module['stats_views'];
$page_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op;
$canonicalUrl = getCanonicalUrl($page_url, true, true);

if (!defined('NV_IS_BANNER_CLIENT')) {
    nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

$xtpl = new XTemplate('stats.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
$xtpl->assign('NV_BASE_URLSITE', NV_BASE_SITEURL);
$xtpl->assign('charturl', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=viewmap');
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->assign('MANAGEMENT', $manament);
$xtpl->parse('main.management');

$sql = 'SELECT id,title FROM ' . NV_BANNERS_GLOBALTABLE . "_rows WHERE act='1' AND clid=" . $user_info['userid'] . ' ORDER BY id ASC';
$result = $db->query($sql);

while ($row = $result->fetch()) {
    $xtpl->assign('ads', $row);
    $xtpl->parse('main.ads');
}

for ($i = 1; $i <= 12; ++$i) {
    $xtpl->assign('month', $i);
    $xtpl->parse('main.month');
}

$xtpl->parse('main');
$contents .= $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
