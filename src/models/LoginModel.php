<?php

namespace rpggame\Models;

use rpggame\Util;
/**
 * LoginModel handles logic of login/logout
 *
 * @author TB
 */
class LoginModel {

    public function login() {
        //TODO 
        return false;
    }

    /**
     * verifies login form
     * returns array of errors (if any)
     * 
     */
    public function verify() {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //is login blank?
            $login = $_POST['login'] ?? '';
            if (Util::isBlank($login)) {
                $errors[] = "Login cannot be empty";
            }
            //is password blank?
            $password = $_POST['password'] ?? '';
            if (Util::isBlank($password)) {
                $errors[] = "Password cannot be empty";
            }
        } else {
            $errors[] = "Not a POST request.";
        }
        return $errors;
    }

}
