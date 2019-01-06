<?php


namespace rpggame;

/**
 * Util class with various static methods
 *
 * @author TB
 */
class Util {
    
    /**
     * returns false if user is not preset in SESSION
     */
    public static function isLogged() {
        return (isset($_SESSION['user']) && !isEmpty($_SESSION['user']));
    }
}
