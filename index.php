<?php
//
// PHASE: BOOTSTRAP
//
define('WEBBIT_INSTALL_PATH', dirname(__FILE__));
define('WEBBIT_SITE_PATH', WEBBIT_INSTALL_PATH . '/site');

require(WEBBIT_INSTALL_PATH.'/src/bootstrap.php');

$ly = CWebbit::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$ly->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$ly->ThemeEngineRender();

