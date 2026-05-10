<!doctype html>
<html>

<head>
    <title>Request to Book — Crown Vision Media</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common strip for_you>


        <section id="book_req">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div id="strip" class="trans">
                            <a href="index.php" class="backBtn fi-chevron-left"></a>
                            <div class="txt">
                                <h2>Request to Book</h2>
                            </div>
                        </div>
                        <div class="inside">
                            <div class="topHead">
                                <h5>Your ads request</h5>
                            </div>
                            <h6 class="flex">Location <a href="?">Edit</a></h6>
                            <div class="txtGrp flexGrp">
                                <img src="images/icon-map.svg" alt=""> Los Angeles
                            </div>
                            <hr>
                            <h6 class="flex">Dates <a href="?">Edit</a></h6>
                            <div class="formRow row">
                                <div class="col-lg-6">
                                    <div class="txtGrp flexGrp">
                                        <img src="images/icon-calendar.svg" alt=""> July 06 2021
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="txtGrp flexGrp">
                                        <img src="images/icon-clock.svg" alt=""> 12am - 12am
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="txtGrp flexGrp">
                                        <img src="images/icon-calendar.svg" alt=""> July 06 2021
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="txtGrp flexGrp">
                                        <img src="images/icon-clock.svg" alt=""> 12am - 12am
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="txtGrp flexGrp">
                                        <img src="images/icon-calendar.svg" alt=""> July 06 2021
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="txtGrp flexGrp">
                                        <img src="images/icon-clock.svg" alt=""> 12am - 12am
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="txtGrp topHead">
                                <h5>Card Payment</h5>
                                <ul class="cardLst">
                                    <li><img src="images/payment-visa.svg" alt=""></li>
                                    <li><img src="images/payment-master.svg" alt=""></li>
                                    <li><img src="images/payment-discover.svg" alt=""></li>
                                </ul>
                            </div>
                            <form action="success-ad-request.php" method="post" class="uiForm">
                                <div class="formRow row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <div class="txtGrp">
                                            <label for="">Card Number</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 col-xx-5">
                                        <div class="txtGrp">
                                            <label for="">Name on card</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                        <div class="txtGrp">
                                            <label for="">Expiry Date</label>
                                            <input type="text" name="" id="" class="txtBox datepicker">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-xx-3">
                                        <div class="txtGrp">
                                            <label for="">CVC?</label>
                                            <input type="text" name="" id="" class="txtBox">
                                        </div>
                                    </div>
                                </div>
                                <div class="bTn formBtn"><button type="submit" class="webBtn yellowBtn">Proceed and Confirm Payment</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="smryBlk">
                            <h5 class="_head">Payment Details</h5>
                            <div class="small semi">You have booked for advertising from</div>
                            <h5>Mon, Jul 6 - Wed, Jul 8</h5>
                            <ul class="list">
                                <li>
                                    <small>Adv* 4days</small>
                                    <strong>$160</strong>
                                </li>
                                <li>
                                    <small>Time* 37hrs</small>
                                    <strong>$400</strong>
                                </li>
                                <li class="hr"></li>
                                <li>
                                    <small>Peak time* 4hrs</small>
                                    <strong>$100</strong>
                                </li>
                                <li>
                                    <div class="coupBlk small"> <i class="fi-percent fi-2x"></i> Apply Coupon</div>
                                </li>
                                <li class="hr"></li>
                                <li class="total">
                                    <strong>Total</strong>
                                    <strong>$660</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- book_req -->


    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>