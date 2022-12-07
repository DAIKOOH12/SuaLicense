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

/**
 * nv_banner_theme_main()
 *
 * @param array $contents
 * @param mixed $manament
 * @return string
 */
function nv_banner_theme_main($contents, $manament)
{
    global $module_info, $lang_module, $lang_global;

    $xtpl = new XTemplate('home.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);

    if (!empty($contents['rows'])) {
        $xtpl->assign('MAIN_PAGE_INFO', $contents['info']);
        $xtpl->parse('main.if_banner_plan.info');

        foreach ($contents['rows'] as $row) {
            $xtpl->clear_autoreset();
            $xtpl->assign('PLAN_TITLE', $row['title'][0]);
            $xtpl->assign('PLAN_LANG_TITLE', $row['blang'][0]);
            $xtpl->assign('PLAN_LANG_NAME', $row['blang'][1]);
            $xtpl->assign('PLAN_SIZE_TITLE', $row['size'][0]);
            $xtpl->assign('PLAN_SIZE_NAME', $row['size'][1]);
            $xtpl->assign('PLAN_FORM_TITLE', $row['form'][0]);
            $xtpl->assign('PLAN_FORM_NAME', $row['form'][1]);
            $xtpl->assign('PLAN_DESCRIPTION_TITLE', $row['description'][0]);
            $xtpl->assign('PLAN_DESCRIPTION_NAME', $row['description'][1]);
            $xtpl->assign('PLAN_DETAIL', $contents['detail']);
            $xtpl->set_autoreset();
            if ($row['allowed']) {
                $xtpl->parse('main.if_banner_plan.banner_plan.allowed');
            } else {
                $xtpl->parse('main.if_banner_plan.banner_plan.notallowed');
            }
            $xtpl->parse('main.if_banner_plan.banner_plan');
        }

        $xtpl->parse('main.if_banner_plan');
    }

    if (defined('NV_IS_BANNER_CLIENT')) {
        $xtpl->assign('MANAGEMENT', $manament);
        $xtpl->parse('main.management');
    } elseif (!defined('NV_IS_USER')) {
        $xtpl->parse('main.login_check');
    } else {
        $xtpl->parse('main.no_permission');
    }

    $xtpl->parse('main');

    return $xtpl->text('main');
}
