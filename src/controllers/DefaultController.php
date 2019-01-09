<?php

namespace rpggame\Controllers;

/**
 * DefaultController
 *
 * @author TB
 */
class DefaultController {
    
    /**
     * This function will trigger method passed in url
     * if none given or the method does not exist
     * it will lauch 'index' method
     * 
     * @param string $action 
     * @return type
     */
    public function run($action = 'index') {
        if (!method_exists($this, $action)) {
            $action = 'index';      }
        return $this->$action(); 
    }

    public function index() {
        include(VIEW_PATH . 'DefaultView.php');
    }
}
