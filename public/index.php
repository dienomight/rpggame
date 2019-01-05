<?php

namespace rpggame;

require_once '../src/AppInit.php';

// setting up constants, autoloading, starting session & ob
AppInit::run();

// ROUTING
$req = $_SERVER['REQUEST_URI'];
$qs = $_SERVER['QUERY_STRING'];

if (!empty($qs)) {
    $req = substr($req, 0, strpos($req, '?'));
}
$req = str_replace(WWW_ROOT, '', $req);
echo "request after trim: " . $req . BR;

switch ($req) {
    case('/login'):
        echo "This is login page";
        break;
    default:
        echo "This is default page";
        break;
}