<aside id="sidebar" class="ease">
    <div class="inside">
        <ul>
            <li class="<?php if ($page == "dashboard") {
                            echo 'active';
                        } ?>">
                <a href="dashboard.php">
                    <img src="images/icon-bell.svg" alt="">
                    <em>Dashboard</em>
                </a>
            </li>
            <li class="<?php if ($page == "booking-calendar") {
                            echo 'active';
                        } ?>">
                <a href="booking-calendar.php">
                    <img src="images/icon-bell.svg" alt="">
                    <em>Booking Calendar</em>
                </a>
            </li>
            <li class="<?php if ($page == "location-tracker") {
                            echo 'active';
                        } ?>">
                <a href="location-tracker.php">
                    <img src="images/icon-bell.svg" alt="">
                    <em>Location Tracker</em>
                </a>
            </li>
            <li class="<?php if ($page == "design-management") {
                            echo 'active';
                        } ?>">
                <a href="design-management.php">
                    <img src="images/icon-bell.svg" alt="">
                    <em>Design Management</em>
                </a>
            </li>
            <li class="<?php if ($page == "orders") {
                            echo 'active';
                        } ?>">
                <a href="orders.php">
                    <img src="images/icon-bell.svg" alt="">
                    <em>My Orders</em>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- sidebar -->