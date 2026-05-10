<!doctype html>
<html>

<head>
    <title>Forgot Password — Crown Vision Media</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common logon>


        <section id="forgot">
            <div class="contain">
                <div class="logBlk">
                    <form action="dashboard.php" method="post">
                        <h3>Reset your password here!</h3>
                        <p>Don’t worry. Just enter the email address you registered with and we’ll email you instructions to reset your password.</p>
                        <div class="txtGrp">
                            <label for="">Email Address</label>
                            <input type="text" name="" id="" class="txtBox">
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn yellowBtn longBtn">Reset Password</button>
                        </div>
                    </form>
                    <div class="haveAccount text-center">
                        <span>Don’t have an account?</span>
                        <a href="register.php">Register</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- forgot -->


    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>