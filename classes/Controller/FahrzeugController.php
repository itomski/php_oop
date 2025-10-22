<?php

namespace Controller;

use \Helper\View;

class FahrzeugController {

    public function indexAction() {
        $view = View::getInstance();
        $view->assign('title', 'Das ist die Fahrzeuge-Seite');
        $view->assign('content', 'Bla bla bla bla bla...3');
        $view->display('standard.tpl');
    }
}