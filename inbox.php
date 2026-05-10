<!doctype html>
<html>

<head>
    <title>Inbox — Crown Vision Media</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body id="home-page">
    <?php require_once('includes/header-logged.php'); ?>
    <main common dash>


        <section id="dash" class="flex relative">
            <?php require_once('includes/sidebar.php'); ?>
            <div id="content-wrapper">
                <div class="contain">
                   <div class="cmnShadow chatRoom">
                       <div class="backBtn">
                           <a href="designManagement.php">
                               <i class="fa fa-angle-left"></i>
                           </a>
                       </div>

                       <div class="chatBlk cmnShadow">
                           <div class="chatHeader flex">
                               <div class="colL flex">
                                   <div class="brandImage">
                                       <img src="images/blog/logo1.png">
                                   </div>
                                   <h4>Campaign on Burger King</h4>
                               </div>
                           </div>
                           <div class="chatBdy scrollbar">
                               <div class="messageBox">
                                   <!-- ===========receiver=============== -->
                                   <div class="you cmnMsgWid">
                                       <div class="personInfo flex">
                                           <div class="personIco flex">
                                                <div class="icon">
                                                    <img src="images/users/1.jpg">
                                                </div>
                                                <h5>Weldon Farrell</h5>
                                            </div>
                                            <div class="time">05:52 AM</div>
                                       </div>
                                       <div class="msgBox">
                                           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.😁</p>
                                       </div>
                                   </div>
                                   <!-- ==================end========= -->
                                    <!-- =======sender============= -->
                                   <div class="me cmnMsgWid">
                                       <div class="personInfo flex">
                                           <div class="personIco flex">
                                                <div class="icon">
                                                    <img src="images/users/2.jpg">
                                                </div>
                                                <h5>Richard Brant</h5>
                                            </div>
                                            <div class="time">03:52 AM</div>
                                       </div>
                                       <div class="msgBox">
                                           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
                                       </div>
                                   </div>
                                    <!-- ============end============ -->
                               </div>
                           </div>

                           <form class="chatForm" action="" method="">
                               <div class="flex">
                                   <div class="relative leftText">
                                       <input type="text" placeholder="Type a message..." class="chatField" value="">
                                       <div class="filesIcon flex">
                                            <button type="button" class="txtBox uploadImg clipIcon" data-upload="loop"><img src="images/blog/clip.svg" alt=""></button>
                                            <input type="file" name="" id="" class="uploadFile" data-upload="loop">
                                            <button type="button" class="txtBox uploadImg cameraIcon" data-upload="loop"><img src="images/blog/camera.svg" alt=""></button>
                                       </div>
                                   </div>
                                   <div class="rightText">
                                        <button type="submit" class="webBtn" value="">
                                            <img src="images/blog/send.svg"> Send
                                        </button>
                                   </div>
                               </div>
                           </form>
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