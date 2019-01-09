<?php

namespace rpggame;

/**
 * Core class for initializing and autoloading the app
 *
 * @author TB
 */
class AppInit {

    private static function init() {
        // Define path constants

        define("DS", DIRECTORY_SEPARATOR);
        define("BR", '<br/>');
        define("SRC", dirname(__FILE__) . DS);
        define("ROOT", dirname(SRC) . DS);
        define("PUBLIC_PATH", ROOT . "public" . DS);
        define("CONTROLLER_PATH", SRC . "controllers" . DS);
        define("MODEL_PATH", SRC . "models" . DS);
        define("VIEW_PATH", SRC . "views" . DS);

        // Assign the root URL to a PHP constant
        // * Do not need to include the domain
        // * Use same document root as webserver
        // * Can dynamically find everything in URL up to "/public"
        $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
        $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
        define("WWW_ROOT", $doc_root);

        // Start session
        session_start();
        
        // Initialize output buffer
        ob_start(); 

        echo "initialized" . BR;
    }

    private static function autoload() {
        
        // Load all classes of rpggame namespace
        spl_autoload_register(function($class_name) {
            require_once SRC . str_replace(['rpggame', '\\'], ['', ''], $class_name) . '.php';
            var_dump($class_name);
        });
        
        // Include the composer autoloader
        require ROOT . 'vendor/autoload.php';
        echo "autoloaded" . BR;
    }

    public static function run() {
        self::init();
        self::autoload();
    }

}
