<?php if (false) { ?>
    <div class="dashboard ">
        <?php foreach ($loggedinuser as $user) { ?>
            <div class="profile-container">
                <img src="img.jpg" alt="" class="profile-img">
                <a href="#" class="upload-img">Upload Image</a>
                <h3><?= $user->username; ?></h3>
            </div>
            <div class="side-list">
                <a href="#">
                    <i class="fa-solid fa-chart-simple active"></i>Dashboard</a>
                <a href="#">
                    <i class="fa-regular fa-user"></i>My Profile</a>
                <a href="#">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a>
                <a href="#">
                    <i class="fa-regular fa-trash-can"></i>Delete Profile</a>
            </div>
            <div class="hamburger1">
                <div class="bar1"></div>
                <div class="bar1"></div>
                <div class="bar1"></div>
            </div>
        <?php } ?>
    </div>

<?php
} else {


?>
    <div class="dashboard ">
        <!-- <?php // foreach ($loggedinuser as $user) { 
                ?> -->
        <div class="profile-container">
            <img src="img.jpg" alt="" class="profile-img">
            <a href="#" class="upload-img">Upload Image</a>
            <h3>BloodWorks Admin</h3>
        </div>
        <div class="side-list">
            <a href="<?= HOSTNAME ?>dash/">
                <i class="fa-solid fa-chart-simple active"></i>Home</a>
            <a href="<?= HOSTNAME ?>dash/bbrequests">
                <i class="fa-regular fa-user"></i>Blood Bank Requests</a>
            <a href="#">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a>

        </div>
        <div class="hamburger1">
            <div class="bar1"></div>
            <div class="bar1"></div>
            <div class="bar1"></div>
        </div>
        <!-- <?php // } 
                ?> -->
    </div>

<?php } ?>