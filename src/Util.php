<?php

namespace rpggame;

/**
 * Util class with various static methods
 *
 * @author TB
 */
class Util {

    /**
     * Returns false if user is not preset in $_SESSION
     * 
     */
    public static function isLogged() {
        $result = false;
        if(isset($_SESSION['user'])) {
            $result = (! self::isBlank($_SESSION['user']));
        }
        return $result;
    }

    /**
     * Displays errors array (if any)
     * 
     * @param type $errors array of error messages
     * @return string result message
     * 
     */
    public static function displayErrors($errors) {
        $output = "";
        if (!empty($errors)) {
            $output .= "<div id=\"errors\" style=\"color:red\">";
            $output .= "Please fix following:";
            $output .= "<ul>";
            foreach ($errors as $error) {
                $output .= "<li>" . $error . "</li>";
            }
            $output .= "</ul>";
            $output .= "</div>";
        }
        return $output;
    }

    /**
     * Validate data presence
     * better than empty() which considers "0" to be empty
     * uses trim() so empty spaces don't count
     * uses === to avoid false positives
     * 
     * @param any type $value
     * @return boolean
     */
    public static function isBlank($value) {
        return !isset($value) || trim($value) === '';
    }

    /**
     * Redirects to given url and exits the script
     * 
     * @param String $url destination url
     */
    public static function redirectTo($url) {
        header("Location: " . $url);
        exit;
    }

}
