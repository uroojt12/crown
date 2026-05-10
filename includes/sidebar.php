<div class="sidebar fixside">
    <ul class="dash-List">
       <li class="sideItem topLbl mobileDashToggle">
            <h6>MENU</h6>
        </li>
    </ul>
                <ul class="dash-List mobileMenuLsting">
                    <li class="<?php if ($page == "dashboard") {
                            echo 'active';
                        } ?> sideItem">
                        <a class="nav-link" href="dashboard.php">
                            <div class="dashImg">
                                <img src="images/blog/calendar.svg">
                            </div>
                            <span>Booking Calendar</span>
                        </a>
                    </li> 
                    <li class="<?php if ($page == "locationTracker") {
                            echo 'active';
                        } ?> sideItem">
                        <a class="nav-link" href="locationTracker.php">
                            <div class="dashImg">
                                <img src="images/blog/map.svg">
                            </div>
                            <span>Location Tracker</span>
                        </a>
                    </li> 
                    <li class="<?php if ($page == "designManagement") {
                            echo 'active';
                        } ?> sideItem">
                        <a class="nav-link" href="designManagement.php">
                            <div class="dashImg">
                                <img src="images/blog/grid.svg">
                            </div>
                            <span>Design Management </span>
                        </a>
                    </li> 
                    <li class="<?php if ($page == "myOrder") {
                            echo 'active';
                        } ?> sideItem">
                        <a class="nav-link" href="myOrder.php">
                            <div class="dashImg">
                                <img src="images/blog/file.svg">
                            </div>
                            <span>My Orders</span>
                        </a>
                    </li> 
                </ul>
            </div>