<?php

namespace Controller;

use \Helper\View;
use Repository\KundeRepository;

class KundeController {

    public function indexAction() {
        $view = View::getInstance();
        $view->assign('title', 'Das ist die Kunde-Seite');
        $view->assign('content', 'Bla bla bla bla bla...4');
        $view->display('standard.tpl');
    }

    public function listeAction() {
        $view = View::getInstance();
        $repo = KundeRepository::getInstance();
        $kunden = $repo->findAll();
        $view->assign('title', 'Kundenliste');
        $view->assign('content', $kunden);
        $view->display('tabelle.tpl');
    }
}