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

// functions
require APP_CORE . "/Functions.php";

use Dotenv\Dotenv;
use \Router;


class FastProbe {

    public function start(){

        // load conf
        $conf = Dotenv::create(APP_ROOT);
        $conf->load();

        // load file
        $this->loadFile();

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

    protected function loadFile(){

        $controllerDir = scandir(APP_ROOT . "/App/Controller");

        for ($i = 2; $i < count($controllerDir); $i++){
            include_once APP_ROOT . "/App/Controller/" . $controllerDir[$i];
        }

        $modelDir = scandir(APP_ROOT . "/App/Model");

        for ($i = 2; $i < count($modelDir); $i++){
            include_once APP_ROOT . "/App/Model/" . $modelDir[$i];
        }

    }

}