<?php

namespace rpggame;

require_once '../src/AppInit.php';
require_once '../src/Util.php';

// setting up constants, autoloading, starting session & ob
AppInit::run();

// ROUTING

$req = $_SERVER['REQUEST_URI'];
$qs = $_SERVER['QUERY_STRING'];

if (!empty($qs)) {
    $req = substr($req, 0, strpos($req, '?'));
}
// after this, request of 'http://domain/rpggame/public/login?test=112' should give $req = '/login'
$req = str_replace(WWW_ROOT, '', $req);

// if there is no action passed in qs default will be 'index'
$action = $_GET['action'] ?? 'index';
echo "ACTION: " . $action . BR;
switch ($req) {
    case('/login'):
        $controller = new Controllers\LoginController();
        break;
    default:
        $controller = new Controllers\DefaultController();
        break;
}
$controller->run($action);
