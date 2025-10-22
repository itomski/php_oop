<?php

require_once 'vendor/autoload.php';

use \Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');
$smarty->caching = true;

$smarty->assign('title', 'Das ist was anderes');
$smarty->assign('content', 'Das ist das Haus von Nikigraus');
$smarty->display('standard.tpl');