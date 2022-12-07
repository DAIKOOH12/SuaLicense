<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_IS_FILE_SITEINFO')) {
    exit('Stop!!!');
}

$lang_siteinfo = nv_get_lang_module($mod);
$data['link'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $data['module'] . '&amp;' . NV_OP_VARIABLE . '=user_waiting';

if ($data['type'] == 'send_active_link_fail') {
    $data['title'] = sprintf($lang_siteinfo['notification_sendactive_fail'], $data['content']['title']);
} else {
    $data['title'] = sprintf($lang_siteinfo['notification_new_acount'], $data['content']['title']);
}
