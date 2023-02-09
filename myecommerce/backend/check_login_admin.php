<?php
if (!empty($_POST["login"])) {
    session_start();
    $username = $_POST["user_name"];
    $password = $_POST["password"];

    $isLoggedIn = false;
    if ($username === "admin" && $password === "admin") {
        $isLoggedIn = true;
        $_SESSION["userId"] = "1";
        $_SESSION["isAdmin"] = true;
        $_SESSION["userInfo"] = "ADMIN CEO";
    }

    if (!$isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
        //ti deve ripotare a loginbackend.php
    }
    //SOLO SE LOGGATO CORRETTAMENTE VA ALLA INDEX
   header("Location: ../index.php");
}
