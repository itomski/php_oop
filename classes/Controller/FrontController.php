<?php

namespace Controller;

class FrontController {
    
    const DEFAULT_CONTROLLER  = __NAMESPACE__.'\\IndexController';
    const DEFAULT_ACTION = 'indexAction';
    
    private $controller = self::DEFAULT_CONTROLLER;
    private $action = self::DEFAULT_ACTION;
    
    public function __construct() {
        $this->parseURL();
    }
    
    public function setController($controller) {
        if($controller != null) {
            $controller = __NAMESPACE__.'\\'.ucfirst(strtolower($controller)).'Controller';
            if(class_exists($controller)) {
                $this->controller = $controller;
            }
        }
    }

    public function setAction($action) {
        if($action != null) {
            $action = strtolower($action).'Action';
            $rc = new \ReflectionClass($this->controller);
            if($rc->hasMethod($action)) {
                $this->action = $action;
            }
        }
    }
    
    private function parseURL() {
        $controller = filter_input(INPUT_GET, 'c');
        $action = filter_input(INPUT_GET, 'a');
        $this->setController($controller);
        $this->setAction($action);
    }
    
    public function run() {
        $controller = new $this->controller();
        call_user_func_array(array($controller, $this->action), array());
    }
}