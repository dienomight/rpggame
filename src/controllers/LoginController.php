<?php

namespace rpggame\Controllers;

use rpggame\Util;
/**
 * Controller that decides about login/logout actions
 *
 * @author TB
 */
class LoginController extends DefaultController {

    private $model = null;

    public function __construct() {
        $this->model = new \rpggame\Models\LoginModel();
    }

    // this is default action for login
    public function index() {
        if (Util::isLogged()) {
            //TODO handle logged user
            // Util::redirectTo...
        } else {
            include(VIEW_PATH . "LoginView.php");
        }
    }
    
    /**
     * uses model->verify to display errors in login form (if any)
     * otherwise proceed to login
     */
    public function verify() {
        $errors = $this->model->verify();
        if($errors) {
            include(VIEW_PATH . "LoginView.php");
        } else {
            //TODO login logic here
            echo "ALL GOOD";
        }
    }

}
