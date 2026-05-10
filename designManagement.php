<!doctype html>
<html>

<head>
    <title>Design Management — Crown Vision Media</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header-logged.php'); ?>
    <main common dash>


        <section id="dash" class="flex relative">
            <?php require_once('includes/sidebar.php'); ?>
            <div id="content-wrapper">
                <div class="contain">
                   <div class="cmnShadow">
                       <div class="designManagementBlk">
                            <div class="blkHeader flex">
                                <h3>Your Design Request</h3>
                                <div class="bTn">
                                    <a href="?" class="webBtn colorBtn">New design request</a>
                                    <a href="?" class="webBtn simpleBtn">New Advertise request </a>
                                </div>
                            </div>
                            <ul class="designBlkLstig">
                               <li class="lstHead flex">
                                    <div class="colImg">
                                        <h4>CILENT</h4>
                                    </div>
                                    <div class="colMsBig">
                                        <h4>Campaign Details</h4>
                                    </div>
                                    <div class="colSm">
                                        <h4>CREATED DATE</h4>
                                    </div>
                                    <div class="colSm">
                                        <h4>AMOUNT</h4>
                                    </div>
                                    <div class="colSm">
                                        <h4>STATUS</h4>
                                    </div>
                                    <div class="colBig">
                                        <h4>ACTIONS</h4>
                                    </div>
                                </li>
                                <li class="cmnShadow flex">
                                    <div class="colImg">
                                        <img src="images/blog/logo1.png">
                                    </div>
                                    <div class="colMsBig">
                                        <h4>Campaign on Burger King</h4>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing veiusmod tempor incididuntveiusmod tempor incididunt  ……</p>
                                    </div>
                                    <div class="colSm">
                                        <h4>22 oct 2016</h4>
                                    </div>
                                    <div class="colSm">
                                        <h4>$123</h4>
                                    </div>
                                    <div class="colSm">
                                        <span class="statusLable green">Approved</span>
                                    </div>
                                    <div class="colBig">
                                        <div class="flex actionIcon">
                                            <a href="inbox.php">
                                               <i class="fa fa-comments"></i>
                                            </a>
                                            <a href="?">
                                                <i class="fa fa-bell"></i>
                                            </a>
                                            <a href="?">
                                               <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="cmnShadow flex">
                                    <div class="colImg">
                                        <img src="images/blog/logo2.svg">
                                    </div>
                                    <div class="colMsBig">
                                        <h4>Campaign on Burger King</h4>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing veiusmod tempor incididuntveiusmod tempor incididunt  ……</p>
                                    </div>
                                    <div class="colSm">
                                        <h4>22 oct 2016</h4>
                                    </div>
                                    <div class="colSm">
                                        <h4>$123</h4>
                                    </div>
                                    <div class="colSm">
                                        <span class="statusLable purple">Rejected</span>
                                    </div>
                                    <div class="colBig">
                                        <div class="flex actionIcon">
                                            <a href="inbox.php">
                                               <i class="fa fa-comments"></i>
                                            </a>
                                            <a href="?">
                                                <i class="fa fa-bell"></i>
                                            </a>
                                            <a href="?">
                                               <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                       </div>
                   </div>
                </div>
            </div>
        </section>
        <!-- dash -->


    </main>
    <?php require_once('includes/footer-logged.php'); ?>
</body>

</html>