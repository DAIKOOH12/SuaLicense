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

// So lien he chua doc
$number = $db->query('SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $mod_data . '_send where is_read= 0')->fetchColumn();
if ($number > 0) {
    $pendinginfo[] = [
        'key' => $lang_siteinfo['siteinfo_new'],
        'value' => number_format($number),
        'link' => NV_BASE_ADMINURL . 'index.php?' . NV_NAME_VARIABLE . '=' . $mod
    ];
}
