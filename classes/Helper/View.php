<?php

namespace Helper;

use Smarty\Smarty;

class View {

    private static $instance = null;

    private function __construct()
    {   
    }

    private function init()
    {   
        self::$instance->setTemplateDir('./templates');
        self::$instance->setCompileDir('./templates_c');
        self::$instance->setCacheDir('./cache');
        self::$instance->setConfigDir('./configs');
        self::$instance->caching = false;
        self::$instance->cache_lifetime = 120;
        self::$instance->debugging = false;
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Smarty();
        }
        return self::$instance;
    }
}