<?php include("conexion.php") ?>

<?php include("includes/header.php") ?>

<link rel="stylesheet" type="text/css" href="css/log.css">
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="img/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="controller_login/registrarse.php" method="POST">
                <span class="login100-form-title">
                    Create your account
                </span>

                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset();
                } ?>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="confirm_pass" placeholder="Confirm password">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="btn_register">
                        Register
                    </button>
                </div>

                <!-- <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot
                    </span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div> -->

                <div class="text-center p-t-136">
                    <a class="txt2" href="login.php">
                        <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                         Sign in
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>


<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>