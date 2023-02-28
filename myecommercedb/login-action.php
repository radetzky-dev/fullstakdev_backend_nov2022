<?php
include "inc/functions.php";

if (!empty($_POST["login"])) {
    session_start();
    $username = $_POST["user_name"];
    $password = $_POST["password"];

    $isLoggedIn = false;
    $customersArray = readFileJson("data/customers.json");

    foreach ($customersArray as $key => $userdata) {
        if (
            $userdata['username'] === $username &&
            $userdata['password'] === $password
        ) {
            $isLoggedIn = true;
            $_SESSION["userId"] = $userdata['id']; //mettere nuovo
            $_SESSION["userInfo"] = $userdata['name'] . ' ' . $userdata['surname'];
        }
    }
    if (!$isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }
    header("Location: ./index.php");
}
