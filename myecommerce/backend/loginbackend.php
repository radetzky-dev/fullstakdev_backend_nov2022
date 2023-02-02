<html>
<head>
    <title>Backend</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <container>
        <div class="container">
            <h3>My App</h3>
            <form action="login-backend.php" method="post" id="frmLogin">
                <?php
                if (isset($_SESSION["errorMessage"])) {
                ?>
                    <div class="error-message"><?php echo $_SESSION["errorMessage"]; ?></div>
                <?php
                    unset($_SESSION["errorMessage"]);
                }
                ?>
           
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label><span id="user_info" class="error-info"></span>
                    <input name="user_name" id="user_name" type="text" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label><span id="password_info" class="error-info"></span>
                    <input name="password" id="password" type="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <div>
                        <input type="submit" name="login" value="Login" class="btn btn-primary"></span>
                    </div>
            </div>
            </form>

        </div>
    </container>
    <?php include "../inc/footer.php"; ?>