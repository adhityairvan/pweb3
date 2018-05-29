<?php
/**
 * Created by PhpStorm.
 * User: adhityairvan
 * Date: 4/9/18
 * Time: 10:45 PM
 */
setcookie("cookie_user", "", time() - 9999,"/");
session_start();
session_unset();

// destroy the session
session_destroy(); session_unset();

