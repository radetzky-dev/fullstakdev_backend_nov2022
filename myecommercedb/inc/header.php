<?php
session_start();
if (empty($_SESSION["userId"])) {
   // header("Location: login.php");
}
?>
<html>

<head>
    <title><?php echo $appName; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="js/function.js"></script>
</head>

<body>