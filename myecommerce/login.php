<?php
include "inc/header.php";
?>

<body>
        <container>
            <div class="container">
                <form action="login-action.php" method="post" id="frmLogin">
                    <div class="demo-table">
                        <div class="form-head">Login</div>
                        <?php
                        if (isset($_SESSION["errorMessage"])) {
                        ?>
                            <div class="error-message"><?php echo $_SESSION["errorMessage"]; ?></div>
                        <?php
                            unset($_SESSION["errorMessage"]);
                        }
                        ?>
                        <?php
                        if (isset($_COOKIE["MusaCookie"])) {
                        ?>
                            <div>Bentornato, <b><?php echo $_COOKIE["MusaCookie"]  ?></b>
                                la tua sessione è scaduta e ti devi riloggare.</div>
                        <?php
                        }
                        unset($_COOKIE['MusaCookie']);
                        setcookie("MusaCookie", "", time() - 3600);
                        ?>
                        <div class="field-column">
                            <div>
                                <label for="username">Username</label><span id="user_info" class="error-info"></span>
                            </div>
                            <div>
                                <input name="user_name" id="user_name" type="text" class="demo-input-box" required>
                            </div>
                        </div>
                        <div class="field-column">
                            <div>
                                <label for="password">Password</label><span id="password_info" class="error-info"></span>
                            </div>
                            <div>
                                <input name="password" id="password" type="password" class="demo-input-box" required>
                            </div>
                        </div>
                        <div class=field-column>
                            <div>
                                <input type="submit" name="login" value="Login" class="btnLogin"></span>
                            </div>
                        </div>
                        <div class=field-column>
                            <a href="#">Password smarrita?</a>|<a href="#">Registrati</a>
                        </div>
                    </div>
                </form>

            </div>
        </container>
    <?php include "inc/footer.php"; ?>