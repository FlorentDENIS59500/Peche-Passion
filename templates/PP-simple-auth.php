<?php
/*
 * Filename: SimpleAuth.php
 * Version: 1.0
 * Author: Heiswayi Nrird
 * Dscription: Simple PHP script to protect any PHP page using session
 * Website: https://heiswayi.nrird.com
 *
 * HOW TO USE
 * ==========
 * Just require this code snippet on the top of your PHP page you want to protect:
 * ```
 * <?php
 * session_start();
 * require("SimpleAuth.php");
 * $login = new Login;
 * $login->authorize();
 * ?>
 * ```
 *
 * To logout, put this line of action URI at the end of your page name:
 * Example:
 * <a href="index.php?action=clear_login">Logout</a>
 *
 */

session_start();
// SETTINGS
// ------------------------------------------------------------------------------------------------
// Set your username
define('LOGIN_USER', "admin");
// Set your password
define('LOGIN_PASS', "admin");

// LANGUAGES
// ------------------------------------------------------------------------------------------------
define('LOGOUT_COMPLETE', "Vous avez été déconnecté.");
define('INCORRECT_USERNAME_PASSWORD', "Erreur d'identifiant!");
define('STARTER_GREETING', "Administrateur, merci de vous connecter.");
define('USERNAME', "Login");
define('PASSWORD', "Mot de passe");
define('ENTER_USERNAME', "Login");
define('ENTER_PASSWORD', "Mot de passe");
define('REMEMBER_THIS_COMPUTER', "Se souvenir de cet ordinateur");
define('BUTTON_LOGIN', "Se connecter &rarr;");

// ================================================================================================
// ### DO NOT TOUCH ANYTHING BELOW THIS LINE ###
// ================================================================================================

class Login
{
    // unique prefix that is used with this object (on cookies and password salt)
    var $prefix = "login_";
    // days "remember me" cookies will remain
    var $cookie_duration = 21;
    // temporary values for comparing login are auto set here. do not set your own $user or $pass here
    var $user = "";
    var $pass = "";

    function authorize()
    {
        //save cookie info to session
        if (isset($_COOKIE[$this->prefix . 'user'])) {
            $_SESSION[$this->prefix . 'user'] = $_COOKIE[$this->prefix . 'user'];
            $_SESSION[$this->prefix . 'pass'] = $_COOKIE[$this->prefix . 'pass'];
        }

        //if setting vars
        if (isset($_POST['action']) && $_POST['action'] == "set_login") {

            $this->user = $_POST['user'];
            $this->pass = md5($this->prefix . $_POST['pass']); //hash password. salt with prefix

            $this->check(); //dies if incorrect

            //if "remember me" set cookie
            if (isset($_POST['remember'])) {
                setcookie($this->prefix . "user", $this->user, time() + ($this->cookie_duration * 86400)); // (d*24h*60m*60s)
                setcookie($this->prefix . "pass", $this->pass, time() + ($this->cookie_duration * 86400)); // (d*24h*60m*60s)
            }

            //set session
            $_SESSION[$this->prefix . 'user'] = $this->user;
            $_SESSION[$this->prefix . 'pass'] = $this->pass;
        }

        //if forced log in
        elseif (isset($_GET['action']) && $_GET['action'] == "prompt") {
            session_unset();
            session_destroy();
            //destroy any existing cookie by setting time in past
            if (!empty($_COOKIE[$this->prefix . 'user'])) setcookie($this->prefix . "user", "blanked", time() - (3600 * 25));
            if (!empty($_COOKIE[$this->prefix . 'pass'])) setcookie($this->prefix . "pass", "blanked", time() - (3600 * 25));

            $this->prompt();
        }

        //if clearing the login
        elseif (isset($_GET['action']) && $_GET['action'] == "clear_login") {
            session_unset();
            session_destroy();
            //destroy any existing cookie by setting time in past
            if (!empty($_COOKIE[$this->prefix . 'user'])) setcookie($this->prefix . "user", "blanked", time() - (3600 * 25));
            if (!empty($_COOKIE[$this->prefix . 'pass'])) setcookie($this->prefix . "pass", "blanked", time() - (3600 * 25));

            $msg = '<span class="green">' . LOGOUT_COMPLETE . '</span>';
            $this->prompt($msg);
        }

        //prompt for
        elseif (!isset($_SESSION[$this->prefix . 'pass']) || !isset($_SESSION[$this->prefix . 'user'])) {
            $this->prompt();
        }

        //check le mot de passe
        else {
            $this->user = $_SESSION[$this->prefix . 'user'];
            $this->pass = $_SESSION[$this->prefix . 'pass'];
            $this->check(); //dies if incorrect
        }
    }

    function check()
    {

        if (md5($this->prefix . LOGIN_PASS) != $this->pass || LOGIN_USER != $this->user) {
            //destroy any existing cookie by setting time in past
            if (!empty($_COOKIE[$this->prefix . 'user'])) setcookie($this->prefix . "user", "blanked", time() - (3600 * 25));
            if (!empty($_COOKIE[$this->prefix . 'pass'])) setcookie($this->prefix . "pass", "blanked", time() - (3600 * 25));
            session_unset();
            session_destroy();

            $msg = '<span class="red">' . INCORRECT_USERNAME_PASSWORD . '</span>';
            $this->prompt($msg);
        }
    }

    function prompt($msg = '')
    {

        require('PP-header.php');
?>
        <div class="wrapper">
            <div class="highlight">
                <div class="center">
                    <form class="pure-form pure-form-stacked" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
                        <fieldset>
                            <legend><?php if ($msg !== '') {
                                        echo $msg;
                                    } else {
                                        echo STARTER_GREETING;
                                    } ?></legend>
                            <input type="hidden" name="action" value="set_login">
                            <!-- <label for="username"><strong><?php echo USERNAME; ?>:</strong></label> -->
                            <input id="username" type="text" name="user" placeholder="<?php echo ENTER_USERNAME; ?>" class="pure-input-1">
                            <!-- <label for="password"><strong><?php echo PASSWORD; ?>:</strong></label> -->
                            <input id="password" type="password" name="pass" placeholder="<?php echo ENTER_PASSWORD; ?>" class="pure-input-1">
                            <label for="remember" class="pure-checkbox">
                                <input id="remember" name="remember" type="checkbox"> <?php echo REMEMBER_THIS_COMPUTER; ?>
                            </label>
                            <button type="submit" class="pure-button pure-button-primary"><?php echo BUTTON_LOGIN; ?></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        </body>

        </html>

<?php exit;
    }
} ?>