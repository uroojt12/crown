<!doctype html>
<html>

<head>
    <title>Have a design already? — Crown Vision Media</title>
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
                            <h2>Have a design already?</h2>
                            <p>Then advertise to the world with 3 easy steps</p>
                        </div>
                        <div class="bTn"><a href="let-us-design-for-you.php" class="webBtn simpleBtn">Or Let us design for you</a></div>
                    </div>
                    <div class="inside">
                        <form action="request-to-book.php" method="post" class="uiForm">
                            <ul class="nav nav-tabs relative">
                                <li class="active">
                                    <a data-toggle="tab" href="#Choose-Location">
                                        <span class="ico"><img src="images/icon-map.svg" alt=""></span>
                                        <strong>Choose Location <small>Select City</small></strong>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Date-Time">
                                        <span class="ico"><img src="images/icon-calendar-clock.svg" alt=""></span>
                                        <strong>Select Date & Time <small>Show in right time</small></strong>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Attach-Design">
                                        <span class="ico"><img src="images/icon-image.svg" alt=""></span>
                                        <strong>Attach your Design <small>Great design</small></strong>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="Choose-Location" class="tab-pane fade active in">
                                    <div class="step small">Step 1/3</div>
                                    <h3>Where You Want To Advertise</h3>
                                    <p>Find the best place to show your vision.</p>
                                    <hr>
                                    <div class="formRow row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="">Choose Location</label>
                                                <input type="text" name="" id="" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-12">
                                            <div id="googleMap">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24566.43777825006!2d-104.98264853832765!3d39.67660708529689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c7e3e2c6216a7%3A0xa4b85252d6ea23a1!2sDenver%2C+CO+80210!5e0!3m2!1sen!2s!4v1507190199138" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bTn formBtn text-right"><button type="button" class="webBtn yellowBtn roundBtn">Next</button></div>
                                </div>
                                <div id="Date-Time" class="tab-pane fade">
                                    <div class="step small">Step 2/3</div>
                                    <h3>Select Date & Time</h3>
                                    <p>Let world see your ad in right time.</p>
                                    <hr>
                                    <div class="formRow row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="">Start & End Dates</label>
                                                <input type="text" name="" id="" class="txtBox datepicker">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="">Start & End Time</label>
                                                <input type="text" name="" id="" class="txtBox timepicker">
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
                                <div id="Attach-Design" class="tab-pane fade">
                                    <div class="step small">Step 3/3</div>
                                    <h3>Attach Your Design</h3>
                                    <p>We support JPEG and PNG files. Make sure that your files are no more than 10 MB.</p>
                                    <hr>
                                    <div class="formRow row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="" class="move">Attach design</label>
                                                <button type="button" class="txtBox uploadImg uploadBlk" data-upload="files" data-text="Or Browse Files" data-before="Drag & drop files here"><img src="images/upload.svg" alt=""></button>
                                                <input type="file" name="" id="" class="uploadFile" data-upload="files">
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