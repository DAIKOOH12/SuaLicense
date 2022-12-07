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

$sign_content = '<br /><br />----------<br />Best regards,<br /><br />' . $admin_info['full_name'] . '<br />';
if (!empty($admin_info['position'])) {
    $sign_content .= $admin_info['position'] . '<br />';
}
$sign_content .= '<br />';
$sign_content .= 'E-mail: ' . $admin_info['email'] . '<br />';
//$sign_content .= 'Website: ' . $global_config['site_name'] . '<br />' . $global_config['site_url'];
