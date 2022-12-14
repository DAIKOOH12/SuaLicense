<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_ADMIN')) {
    exit('Stop!!!');
}

/*
 * Note:
 * 	- Module var is: $lang, $module_file, $module_data, $module_upload, $module_theme, $module_name
 * 	- Accept global var: $db, $db_config, $global_config
 */

$db->query('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . " VALUES (1, 'Qu&#039;est ce que NukeViet 3.0?', '', 1, 0, 1, '6', " . NV_CURRENTTIME . ', 0, 1, 0)');

$sth = $db->prepare('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_rows VALUES (?, ?, ?, ?, ?)');
$sth->execute([1, 1, 'Une code source de web tout neuve', '', 0]);
$sth->execute([2, 1, 'Open source, libre et gratuit', '', 0]);
$sth->execute([3, 1, 'Utilise xHTML, CSS et supporte Ajax', '', 0]);
$sth->execute([4, 1, 'Toutes ces réponses', '', 1]);
