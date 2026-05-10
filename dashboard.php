<!doctype html>
<html>

<head>
    <title>Dashboard — Crown Vision Media</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header-logged.php'); ?>
    <main common dash>


        <section id="dash" class="flex relative">
            <?php require_once('includes/sidebar.php'); ?>
            <div id="content-wrapper">
                <div class="contain">
                    <div class="flex blkTwo">
                        <div class="colL">
                            <div class="cmnShadow smallSideBlk">
                                <h4 class="top">All Bookings</h4>
                                <form>
                                    <div class="relative">
                                        <input type="text" class="serchFiled" placeholder="Search">
                                        <button type="submit"><i class="fi-search"></i></button>
                                    </div>
                                </form>
                                <div class="smallSideBlkBdy">
                                   <ul class="relative cityLstingDash">
                                       <li class="active">
                                            <div class="bookingAddCity">
                                                <div class="cityIco">
                                                    <img src="images/city1.svg">
                                                </div>
                                                <div class="cityCntnt">
                                                    <h4>Los Angeles campain</h4>
                                                    <p>July 06 - July 08</p>
                                                </div>
                                            </div>
                                            <div class="bookingAddBtn">
                                                <span class="greebLbl infoLbl">Active</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bookingAddCity">
                                                <div class="cityIco">
                                                    <img src="images/city2.svg">
                                                </div>
                                                <div class="cityCntnt">
                                                    <h4>Kansas city</h4>
                                                    <p>Nov 06 - Nov 08</p>
                                                </div>
                                            </div>
                                            <div class="bookingAddBtn">
                                                <span class="infoLbl">Completed</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bookingAddCity">
                                                <div class="cityIco">
                                                    <img src="images/city3.svg">
                                                </div>
                                                <div class="cityCntnt">
                                                    <h4>Atlanta</h4>
                                                    <p>Sep 15 - sep 18</p>
                                                </div>
                                            </div>
                                            <div class="bookingAddBtn">
                                                <span class="infoLbl">Completed</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="bookingAddCity">
                                                <div class="cityIco">
                                                    <img src="images/city4.svg">
                                                </div>
                                                <div class="cityCntnt">
                                                    <h4>Coloumbus</h4>
                                                    <p>Oct 12 - Oct 18</p>
                                                </div>
                                            </div>
                                            <div class="bookingAddBtn">
                                                <span class="infoLbl">Completed</span>
                                            </div>
                                        </li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                        <div class="colR">
                            <div class="innerDt cmnShadow">
                                <div class="dashboardBanner">
                                    <div class="overCntnt">
                                        <div class="inner_cntnt flex">
                                            <div class="_colL">
                                                <h2><img src="images/mapBooking.svg"> Los Angeles</h2>
                                                <p>Ad duration : <strong>12 Hours</strong></p>
                                            </div>
                                            <div class="_colR">
                                                <p>Remaining AD time <strong>08:24:13</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ----------your ads request--------- -->
                                <div class="adRequest">
                                    <h3>Your ads request</h3>
                                    <div class="addRow flex">
                                        <div class="colAddL flex">
                                            <div class="images">
                                                <img src="images/blog/add.png">
                                            </div>
                                            <div class="cntnt">
                                                <a href="?"><h6>Advertising-Own-“mortis Garrages works ltd”_Boston</h6></a>
                                                <p><small>Order No</small> <strong>12121</strong></p>
                                            </div>
                                        </div>
                                        <div class="colAddR">
                                            <p><small>Distance covered till now </small></p>
                                            <h2>87<sub>KM</sub></h2>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="bookingTimeDashboard" id="for_you">
                                            <div class="miniHead">
                                                <h6 class="small">Selected Date & Time</h6>
                                                <div class="toggleBlk">
                                                    <small class="semi">Repeat time all days</small>
                                                    <div class="switchBtn">
                                                        <input type="checkbox" name="" id="">
                                                        <em></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tblBlk">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="day semi">Mon, Jul 6</td>
                                                            <td>
                                                                <div class="timeBlk">
                                                                    <small>Start Time</small>
                                                                    <img src="images/icon-clock.svg" alt="">
                                                                    <select name="" id="">
                                                                        <option value="12am">12 am</option>
                                                                        <option value="12pm">12 pm</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="timeBlk">
                                                                    <small>End Time</small>
                                                                    <img src="images/icon-clock.svg" alt="">
                                                                    <select name="" id="">
                                                                        <option value="12am">12 am</option>
                                                                        <option value="12pm">12 pm</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="day semi">Mon, Jul 7</td>
                                                            <td>
                                                                <div class="timeBlk">
                                                                    <small>Start Time</small>
                                                                    <img src="images/icon-clock.svg" alt="">
                                                                    <select name="" id="">
                                                                        <option value="12am">12 am</option>
                                                                        <option value="12pm">12 pm</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="timeBlk">
                                                                    <small>End Time</small>
                                                                    <img src="images/icon-clock.svg" alt="">
                                                                    <select name="" id="">
                                                                        <option value="12am">12 am</option>
                                                                        <option value="12pm">12 pm</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="day semi">Mon, Jul 8</td>
                                                            <td>
                                                                <div class="timeBlk">
                                                                    <small>Start Time</small>
                                                                    <img src="images/icon-clock.svg" alt="">
                                                                    <select name="" id="">
                                                                        <option value="12am">12 am</option>
                                                                        <option value="12pm">12 pm</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="timeBlk">
                                                                    <small>End Time</small>
                                                                    <img src="images/icon-clock.svg" alt="">
                                                                    <select name="" id="">
                                                                        <option value="12am">12 am</option>
                                                                        <option value="12pm">12 pm</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="day semi">Mon, Jul 9</td>
                                                            <td>
                                                                <div class="timeBlk">
                                                                    <small>Start Time</small>
                                                                    <img src="images/icon-clock.svg" alt="">
                                                                    <select name="" id="">
                                                                        <option value="12am">12 am</option>
                                                                        <option value="12pm">12 pm</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="timeBlk">
                                                                    <small>End Time</small>
                                                                    <img src="images/icon-clock.svg" alt="">
                                                                    <select name="" id="">
                                                                        <option value="12am">12 am</option>
                                                                        <option value="12pm">12 pm</option>
                                                                    </select>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                </div>
                                <div class="bTn bigBtn">
                                   <a href="?" class="webBtn yellowBtn">Track this Order</a>
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