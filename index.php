<?php
/**
 * ProjectName: FastProbe-web.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/7/16
 * Time: 13:20
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

// 根目录
define("APP_ROOT", __DIR__);

// 核心目录
define("APP_CORE", __DIR__ . "/FastProbe");

require_once APP_CORE . "/FastProbe.php";

$app = new \FastProbe\FastProbe();
$app->start();