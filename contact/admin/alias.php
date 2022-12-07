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

$title = $nv_Request->get_title('title', 'post', '');
$id = $nv_Request->get_int('id', 'post', 0);

$alias = change_alias($title);

$stmt = $db->prepare('SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $module_data . '_department WHERE id !=' . $id . ' AND alias = :alias');
$stmt->bindParam(':alias', $alias, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->fetchColumn()) {
    $weight = $db->query('SELECT MAX(id) FROM ' . NV_PREFIXLANG . '_' . $module_data . '_department')->fetchColumn();
    $weight = (int) $weight + 1;
    $alias = $alias . '-' . $weight;
}

include NV_ROOTDIR . '/includes/header.php';
echo $alias;
include NV_ROOTDIR . '/includes/footer.php';
