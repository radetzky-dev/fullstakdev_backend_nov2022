<?php
if (!empty($_POST["login"])) {
    session_start();
    $username = $_POST["user_name"];
    $password = $_POST["password"];

    $isLoggedIn = false;
    if ($username === "test" && $password === "test") {
        $isLoggedIn = true;
        $_SESSION["userId"] = "1";
        $_SESSION["userInfo"] = "Mario Rossi";
    }

    if (!$isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }

   header("Location: index.php");
}
