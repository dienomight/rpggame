<?php
/**
 * LoginView
 *
 * @author TB
 */
?>
<!doctype html>

<html lang="en">
    <head>
        <title>RPG game</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Login</h1>
        <form method="POST" action="index.php?action=verify">
            Login<br/>
            <input type="text" name="login" /><br/>
            Password<br/>
            <input type="password" name="password" /><br/>
            <input type="submit" name="submit" value="Log In" />

        </form>
    </body>
</html>