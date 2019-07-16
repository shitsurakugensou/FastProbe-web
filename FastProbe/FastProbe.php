<?php
/**
 * ProjectName: FastProbe-web.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/7/16
 * Time: 13:23
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */

namespace FastProbe;

// composer
require APP_ROOT . "/vendor/autoload.php";

use Dotenv\Dotenv;
use \Router;


class FastProbe {

    public function start(){

        // load conf
        $conf = Dotenv::create(APP_ROOT);
        $conf->load();

        // load router
        $this->loadRouter();

    }


    protected function loadRouter(){

        $router = new \Bramus\Router\Router();

        $routerDir = scandir(APP_CORE . "/router");

        for ($i = 2; $i < count($routerDir); $i++){
            include_once APP_CORE . "/router/" . $routerDir[$i];
        }

        $router->run();

    }

}