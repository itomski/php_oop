<?php

require_once 'includes/config.php';

use \Controller\FrontController;

$fc = new FrontController();

try {
    $fc->run();
}
catch(Exception $e) {
    echo $e->getMessage();
}