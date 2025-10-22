<?php

namespace Controller;

use \Helper\View;

class IndexController {

    public function indexAction() {
        $view = View::getInstance();
        $view->assign('title', 'Das ist die Index-Seite');
        $view->assign('content', 'Bla bla bla bla bla...1');
        $view->display('standard.tpl');
    }

    // localhost:8080/index.php?c=index$a=admin
    public function adminAction() {
        $view = View::getInstance();
        $view->assign('title', 'Das ist die Admin-Seite');
        $view->assign('content', 'Bla bla bla bla bla...2');
        $view->display('standard.tpl');
    }
}