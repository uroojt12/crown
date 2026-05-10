<header class="ease">
    <div class="contain">
        <div class="logo ease">
            <a href="index.php"><img src="images/logo.png" alt=""></a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease">
            <ul id="nav">
                <li class="<?php if ($page == "index") {
                                echo 'active';
                            } ?>">
                    <a href="index.php">Home</a>
                </li>
                <li class="<?php if ($page == "locations") {
                                echo 'active';
                            } ?>">
                    <a href="locations.php">Locations</a>
                </li>
                <li class="<?php if ($page == "gallery") {
                                echo 'active';
                            } ?>">
                    <a href="gallery.php">Gallery</a>
                </li>
                <li class="<?php if ($page == "blog") {
                                echo 'active';
                            } ?>">
                    <a href="blog.php">Blog</a>
                </li>
                <li class="<?php if ($page == "contact") {
                                echo 'active';
                            } ?>">
                    <a href="contact.php">Contact us</a>
                </li>
                <li class="<?php if ($page == "login") {
                                echo 'active';
                            } ?> btnLi">
                    <a href="login.php">Login</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->


<!-- <div class="upperlay"></div> -->