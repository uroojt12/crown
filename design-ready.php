<!doctype html>
<html>

<head>
    <title>Have a design ready? — Crown Vision Media</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header.php'); ?>
    <main common strip for_you>


        <section id="for_you">
            <div class="contain">
                <div class="blk">
                    <div id="strip" style="background-image: url('images/Rectangle-354.jpg')">
                        <div class="txt">
                            <h2>Have a design ready?</h2>
                            <p>Then advertise to the world with 3 easy steps</p>
                        </div>
                        <div class="bTn"><a href="let-us-design-for-you-info.php" class="webBtn simpleBtn">Or Let Us design for you</a></div>
                    </div>
                    <div class="inside">
                        <form action="request-to-book.php" method="post" class="uiForm">
                            <ul class="nav nav-tabs relative">
                                <li class="active">
                                    <a data-toggle="tab" href="#selectCity">
                                        <span class="ico"><img src="images/ico-map.svg" alt=""></span>
                                        <strong>Choose Location <small>Select City</small></strong>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#selectDateTime">
                                        <span class="ico"><img src="images/ico-calendar.svg" alt=""></span>
                                        <strong>Select date & Time <small>show in right time</small></strong>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Design-Reference">
                                        <span class="ico"><img src="images/icon-image.svg" alt=""></span>
                                        <strong>Attach your design <small>Great design</small></strong>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="selectCity" class="tab-pane fade active in">
                                    <div class="step small">Step 1/3</div>
                                    <h3>Where You Want To Advertise?</h3>
                                    <p>Find the best place to show your vision</p>
                                    <hr>
                                    <label class="small dimSmall">Choose Location</label>
                                    <div class="formRow row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp dropDown selectCityDrop">
                                                <a href="javascript:void(0)" class="txtBox customCity dropBtn">
                                                </a>
                                                <ul class="dropCnt dropLst scrollbar">
                                                    <li>
                                                        <div class="cityIco">
                                                            <img src="images/city1.svg">
                                                        </div>
                                                        <div class="cityCntnt">
                                                            <h4>Los Angeles</h4>
                                                            <p>Average Price start’s from $490</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cityIco">
                                                            <img src="images/city2.svg">
                                                        </div>
                                                        <div class="cityCntnt">
                                                            <h4>Kansas city</h4>
                                                            <p>Average Price start’s from $490</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cityIco">
                                                            <img src="images/city3.svg">
                                                        </div>
                                                        <div class="cityCntnt">
                                                            <h4>Atlanta</h4>
                                                            <p>Average Price start’s from $490</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cityIco">
                                                            <img src="images/city4.svg">
                                                        </div>
                                                        <div class="cityCntnt">
                                                            <h4>Coloumbus</h4>
                                                            <p>Average Price start’s from $490</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                                <div id="map">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.46795716484!2d72.68540231452256!3d32.08363608118693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392177c8976de103%3A0xfd13b9e98e36a9fe!2sHero+Solutions!5e0!3m2!1sen!2s!4v1565165927597!5m2!1sen!2s" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bTn formBtn text-right"><button type="button" class="webBtn yellowBtn roundBtn">Next</button></div>
                                </div>
                                <div id="selectDateTime" class="tab-pane fade">
                                    <div class="step small">Step 2/3</div>
                                    <h3>Select Date & Time</h3>
                                    <p>Let world see your ad in right time</p>
                                    <hr>
                                    <div class="formRow row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-12">
                                            <div class="txtGrp oldLable">
                                                <p>Start & End Dates</p>
                                                <div class="relative">
                                                   <input type="text" name="" id="" class="txtBox date_picker">
                                                   <i class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-12">
                                           <div class="txtGrp oldLable">
                                                <p>Start & End Time</p>
                                                <div class="relative dropDown">
                                                   <!-- <input type="text" name="" id="" class="txtBox time_picker"> -->
                                                   <a href="javascript:void(0)" class="txtBox dropBtn"></a>
                                                   <i class="fa fa-clock-o"></i>
                                                   <div class="dropCnt dropLst scrollbar timePickerBox">
                                                        <h4>Suggested</h4>
                                                        <div class="flex">
                                                            <div class="arrowIcon">
                                                                <i class="fi-arrow-up"></i>
                                                            </div>
                                                            <div class="timeCntnt">
                                                                <h3>Daily 6pm-9pm</h3>
                                                                <p>Peek hours more visibility for your ad</p>
                                                            </div>
                                                        </div>
                                                        <ul class="timeSugestions">
                                                            <li>
                                                                <span>
                                                                    <h4>Start time</h4>
                                                                </span>
                                                                <span>
                                                                    <h4>End time</h4>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <h3>8:00am</h3>
                                                                </span>
                                                                <span>
                                                                    <h3>6:00pm</h3>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <h3>9:00am</h3>
                                                                </span>
                                                                <span>
                                                                    <h3>7:00pm</h3>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <h3>10:00am</h3>
                                                                </span>
                                                                <span>
                                                                    <h3>10:00pm</h3>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <h3>11:00am</h3>
                                                                </span>
                                                                <span>
                                                                    <h3>11:00pm</h3>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
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
                                    </div>
                                    <div class="bTn formBtn text-right"><button type="button" class="webBtn yellowBtn roundBtn">Next</button></div>
                                </div>
                                <div id="Design-Reference" class="tab-pane fade">
                                    <div class="step small">Step 3/3</div>
                                    <h3>Attach Your Design</h3>
                                    <p>We support JPEG and PNG files. Make sure that your files are no more than 10 MB.</p>
                                    <hr>
                                    <div class="formRow row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp oldLable">
                                                <p>Attach design*</p>
                                                <button type="button" class="txtBox uploadImg fileUpload" data-upload="design">
                                                    <img src="images/big-file.svg" alt="">
                                                    <p><span>Drag and drop files here</span><span class="color">Or Browse Files</span></p>
                                                    <p class="fileOption">Your can attach 3 options</p>
                                                </button>
                                                <input type="file" name="" id="" class="uploadFile" data-upload="design">
                                            </div>
                                            <ul class="attachLst flex">
                                                <li><span class="ico txtBox fi-plus"></span></li>
                                                <li><span class="ico txtBox fi-plus"></span></li>
                                                <li><span class="ico txtBox fi-plus"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bTn formBtn text-right"><button type="submit" class="webBtn yellowBtn roundBtn">Book Slot</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- for_you -->


    </main>
    <?php require_once('includes/footer.php'); ?>
</body>

</html>