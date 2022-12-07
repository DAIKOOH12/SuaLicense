<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_IS_FILE_MODULES')) {
    exit('Stop!!!');
}

$sql_drop_module = [];

$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_rows;';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_blocks;';

$sql_create_module = $sql_drop_module;

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_rows (
 id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 bid mediumint(8) unsigned NOT NULL DEFAULT '0',
 title varchar(255) NOT NULL DEFAULT '',
 description mediumtext NOT NULL,
 link varchar(255) NOT NULL DEFAULT '',
 target varchar(10) NOT NULL DEFAULT '' COMMENT '_blank|_self|_parent|_top',
 image varchar(255) NOT NULL DEFAULT '',
 start_time int(11) NOT NULL DEFAULT '0',
 end_time int(11) NOT NULL DEFAULT '0',
 status tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0: In-Active, 1: Active, 2: Expired',
 PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_blocks (
 bid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 title varchar(255) NOT NULL DEFAULT '',
 description mediumtext NOT NULL,
 PRIMARY KEY (bid)
)ENGINE=MyISAM";

$sql_create_module[] = 'INSERT INTO ' . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'next_execute', '0')";
