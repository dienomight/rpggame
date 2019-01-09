<?php
/**
 * LoginView
 *
 * @author TB
 */

use rpggame\Util;

$errors = $errors ?? null;
$login = $_POST['login'] ?? '';
?>
<!doctype html>

<html lang="en">
    <head>
        <title>RPG game</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Login</h1>
        <?= Util::displayErrors($errors); ?>
        <form method="POST" action="<?= WWW_ROOT ?>/login?action=verify">
            Login<br/>
            <input type="text" name="login" value="<?= $login?>"/><br/>
            Password<br/>
            <input type="password" name="password" /><br/>
            <input type="submit" name="submit" value="Log In" />
        </form>
    </body>
</html>