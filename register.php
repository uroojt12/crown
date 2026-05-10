<!doctype html>
<html>

<head>
    <title>Register — Crown Vision Media</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common logon>


        <section id="register">
            <div class="contain">
                <div class="logBlk">
                    <form action="dashboard.php" method="post">
                        <h3>Register</h3>
                        <p>Work Better, Live Better.</p>
                        <div class="txtGrp">
                            <label for="">First Name</label>
                            <input type="text" name="" id="" class="txtBox">
                        </div>
                        <div class="txtGrp">
                            <label for="">Last Name</label>
                            <input type="text" name="" id="" class="txtBox">
                        </div>
                        <div class="txtGrp">
                            <label for="">Email Address</label>
                            <input type="text" name="" id="" class="txtBox">
                        </div>
                        <div class="txtGrp pasDv">
                            <label for="">Password</label>
                            <input type="password" name="" id="" class="txtBox">
                            <i class="icon-eye" id="eye"></i>
                        </div>
                        <div class="txtGrp flex">
                            <div class="lblBtn">
                                <input type="checkbox" name="" id="confirm">
                                <label for="confirm">By signing up, I agree to Crown
                                    <a href="terms-and-conditions.php">Terms & Conditions</a>
                                    and
                                    <a href="privacy-policy.php">Privacy Policy.</a>
                                </label>
                            </div>
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" class="webBtn yellowBtn longBtn">Register</button>
                        </div>
                    </form>
                    <div class="haveAccount text-center">
                        <span>Already have an account?</span>
                        <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- register -->


    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>