<!doctype html>
<html>

<head>
    <title>Let us design for you — Crown Vision Media</title>
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
                            <h2>Let us design for you</h2>
                            <p>We just need a few details about your campaign to get started on your design.</p>
                        </div>
                        <div class="bTn"><a href="have-a-design-already.php" class="webBtn simpleBtn">Or Have a design already?</a></div>
                    </div>
                    <div class="inside">
                        <form action="success-design-request.php" method="post" class="uiForm">
                            <ul class="nav nav-tabs relative">
                                <li class="active">
                                    <a data-toggle="tab" href="#Personal-Information">
                                        <span class="ico"><img src="images/icon-person.svg" alt=""></span>
                                        <strong>Personal Information <small>Contact details</small></strong>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Campaign-Details">
                                        <span class="ico"><img src="images/icon-bullhorn.svg" alt=""></span>
                                        <strong>Campaign Details <small>Ad information</small></strong>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Design-Reference">
                                        <span class="ico"><img src="images/icon-image.svg" alt=""></span>
                                        <strong>Design Reference <small>Design management</small></strong>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Your-Message">
                                        <span class="ico"><img src="images/icon-bulb.svg" alt=""></span>
                                        <strong>Your Message <small>Your idea or suggestions</small></strong>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="Personal-Information" class="tab-pane fade active in">
                                    <div class="step small">Step 1/4</div>
                                    <h3>Let's Start With Your Name</h3>
                                    <p>Please fill in the details below so that we can get in contact with you about the design, If needed.</p>
                                    <hr>
                                    <div class="formRow row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="">Your Name</label>
                                                <input type="text" name="" id="" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="">Email Address</label>
                                                <input type="text" name="" id="" class="txtBox">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bTn formBtn text-right"><button type="button" class="webBtn yellowBtn roundBtn">Next</button></div>
                                </div>
                                <div id="Campaign-Details" class="tab-pane fade">
                                    <div class="step small">Step 2/4</div>
                                    <h3>Few Details About Your Campaign</h3>
                                    <p>Let us know your company and Advertisement Heading.</p>
                                    <hr>
                                    <div class="formRow row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="">Company/Organization</label>
                                                <input type="text" name="" id="" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="" class="move">Loop(formate PNG)</label>
                                                <button type="button" class="txtBox uploadImg" data-upload="loop" data-text="Browse Files"><img src="images/icon-clip.svg" alt=""></button>
                                                <input type="file" name="" id="" class="uploadFile" data-upload="loop">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="">Advertisement Heading</label>
                                                <input type="text" name="" id="" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="">Subtitle/Sub Heading</label>
                                                <input type="text" name="" id="" class="txtBox">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bTn formBtn text-right"><button type="button" class="webBtn yellowBtn roundBtn">Next</button></div>
                                </div>
                                <div id="Design-Reference" class="tab-pane fade">
                                    <div class="step small">Step 3/4</div>
                                    <h3>Attach Design Reference</h3>
                                    <p>This will help us understand your exceptions.</p>
                                    <hr>
                                    <div class="formRow row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="" class="move">Attach design Reference(optional)</label>
                                                <button type="button" class="txtBox uploadImg" data-upload="design" data-text="Browse Files"><img src="images/icon-clip.svg" alt=""></button>
                                                <input type="file" name="" id="" class="uploadFile" data-upload="design">
                                            </div>
                                            <ul class="attachLst flex">
                                                <li><span class="ico txtBox fi-plus"></span></li>
                                                <li><span class="ico txtBox fi-plus"></span></li>
                                                <li><span class="ico txtBox fi-plus"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bTn formBtn text-right"><button type="button" class="webBtn yellowBtn roundBtn">Next</button></div>
                                </div>
                                <div id="Your-Message" class="tab-pane fade">
                                    <div class="step small">Step 4/4</div>
                                    <h3>Your Message</h3>
                                    <p>Let us know your ideas or suggestions so we won't miss out anything.</p>
                                    <hr>
                                    <div class="formRow row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="">Your Suggestions</label>
                                                <textarea name="" id="" class="txtBox"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bTn formBtn text-right"><button type="submit" class="webBtn yellowBtn roundBtn">Submit</button></div>
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