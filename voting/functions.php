<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_SYSTEM')) {
    exit('Stop!!!');
}

if (!in_array($op, ['detail', 'result'], true)) {
    define('NV_IS_MOD_VOTING', true);
}

if (!empty($array_op)) {
    unset($matches);
    if (preg_match("/^result\-([0-9]+)$/", $array_op[0], $matches)) {
        $id = (int) $matches[1];
        $op = 'result';
    }
}
