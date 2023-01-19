<?php
session_start();
if (empty($_SESSION["userId"])) {
    require_once 'inc/login-form.php';
}
