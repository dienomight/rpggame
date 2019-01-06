<?php

namespace rpggame\Controllers;

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
        if ($this->model->login()) {
            //TODO handle logged user
        } else {
            include(VIEW_PATH . "LoginView.php");
        }
    }

}
