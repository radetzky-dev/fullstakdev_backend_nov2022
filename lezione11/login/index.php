<?php
session_start();
if(!empty($_SESSION["userId"])) {
    //Already logged
    require_once 'inc/dashboard.php';
} else {
    //Login
    require_once 'inc/login-form.php';
}
