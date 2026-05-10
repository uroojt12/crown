<!doctype html>
<html>

<head>
    <title>Login — Crown Vision Media</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common logon>


        <section id="login">
            <div class="contain">
                <div class="logBlk">
                    <form action="dashboard.php" method="post">
                        <h3>Login</h3>
                        <p>Enter your details below</p>
                        <div class="txtGrp">
                            <label for="">User Name</label>
                            <input type="text" name="" id="" class="txtBox">
                        </div>
                        <div class="txtGrp pasDv">
                            <label for="">Password</label>
                            <input type="password" name="" id="" class="txtBox">
                            <i class="icon-eye" id="eye"></i>
                        </div>
                        <div class="txtGrp flex">
                            <div class="lblBtn">
                                <input type="checkbox" name="" id="remember" checked="">
                                <label for="remember">Keep me logged in</label>
                            </div>
                            <a href="forgot-password.php" id="pass">Forgot Password?</a>
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn yellowBtn longBtn">Login</button>
                        </div>
                    </form>
                    <div class="haveAccount text-center">
                        <span>Don’t have an account?</span>
                        <a href="register.php">Register</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- login -->


    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>