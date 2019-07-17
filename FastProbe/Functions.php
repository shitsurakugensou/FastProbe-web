<?php
/**
 * ProjectName: FastProbe-web.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/7/17
 * Time: 16:36
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */


/**
 * 视图模板渲染
 */

if ( function_exists("view") == false ){

    function view($view, $vars = array()) {

        // 数组 => 变量
        extract($vars);

        // 替换 . => /
        $view = str_replace(".", "/", $view);

        // 构造完整路径
        $view = APP_VIEW . "/" . $view . ".php";

        require_once $view;

        return;
    }

}
