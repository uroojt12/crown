<!doctype html>
<html>

<head>
    <title>My Orders — Crown Vision Media</title>
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
                       <div class="myOrderBlk">
                              <!-- =======latest order block==== -->
                                <div class="flex headOrder">
                                    <div class="col1">
                                        <h4>Recent orders</h4>
                                    </div>
                                    <div class="col">
                                        <h4>Amount</h4>
                                    </div>
                                    <div class="col">
                                        <h4>Status</h4>
                                    </div>
                                </div>
                                <div class="latestOrders cmnBorder">
                                    <!-- ==========latest order loop start========= -->
                                    <div class="flex orderColumns">
                                        <div class="col1">
                                            <div class="flex">
                                                <div class="orderImage">
                                                    <img src="images/blog/1.png">
                                                </div>
                                                <div class="orderCntnt">
                                                    <a href="?">Advertising-Own-“mortis Garrages works ltd”_Boston</a>
                                                    <p>Order No : 12121 </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>140$</h3>
                                        </div>
                                        <div class="col">
                                        <a href="?" class="webBtn colorBtn">Track</a>
                                        </div>
                                    </div>
                                    <!-- ===========latest order loop end========= -->
                                    <div class="flex orderColumns">
                                        <div class="col1">
                                            <div class="flex">
                                                <div class="orderImage">
                                                    <img src="images/blog/2.png">
                                                </div>
                                                <div class="orderCntnt">
                                                    <a href="?">Advertising-Own-“mortis Garrages works ltd”_Boston</a>
                                                    <p>Order No : 12121 </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>140$</h3>
                                        </div>
                                        <div class="col">
                                        <a href="?" class="webBtn colorBtn">Track</a>
                                        </div>
                                    </div>
                                    <div class="flex orderColumns">
                                        <div class="col1">
                                            <div class="flex">
                                                <div class="orderImage">
                                                    <img src="images/blog/3.png">
                                                </div>
                                                <div class="orderCntnt">
                                                    <a href="?">Advertising-Own-“mortis Garrages works ltd”_Boston</a>
                                                    <p>Order No : 12121 </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>140$</h3>
                                        </div>
                                        <div class="col">
                                        <a href="?" class="webBtn colorBtn statusGreen">Progress</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- =========past orders block=== -->
                                <div class="flex headOrder">
                                    <div class="col1">
                                        <h4>Past orders</h4>
                                    </div>
                                    <div class="col">
                                        <h4>Amount</h4>
                                    </div>
                                    <div class="col">
                                        <h4>Status</h4>
                                    </div>
                                </div>

                                <div class="latestOrders cmnBorder">
                                    <!-- ==========old order loop start========= -->
                                    <div class="flex orderColumns">
                                        <div class="col1">
                                            <div class="flex">
                                                <div class="orderImage">
                                                    <img src="images/blog/1.png">
                                                </div>
                                                <div class="orderCntnt">
                                                    <a href="?">Advertising-Own-“mortis Garrages works ltd”_Boston</a>
                                                    <p>Order No : 12121 </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>140$</h3>
                                        </div>
                                        <div class="col">
                                        <a href="?" class="webBtn colorBtn statusGray">Completed</a>
                                        </div>
                                    </div>
                                    <!-- ===========old order loop end========= -->
                                    <div class="flex orderColumns">
                                        <div class="col1">
                                            <div class="flex">
                                                <div class="orderImage">
                                                    <img src="images/blog/2.png">
                                                </div>
                                                <div class="orderCntnt">
                                                    <a href="?">Advertising-Own-“mortis Garrages works ltd”_Boston</a>
                                                    <p>Order No : 12121 </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h3>140$</h3>
                                        </div>
                                        <div class="col">
                                        <a href="?" class="webBtn colorBtn statusGray">Completed</a>
                                        </div>
                                    </div>
                                </div>
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