<?php
include_once 'views/header.php';
?>

<main class="dash-container">
    <section class="dashboard_container">
        <div class="dashboard ">
            <?php foreach ($loggedinuser as $user) { ?>
                <div class="profile-container">
                    <img src="img.jpg" alt="" class="profile-img">
                    <a href="#" class="upload-img">Upload Image</a>
                    <h3><?= $user->username; ?></h3>
                </div>
                <div class="side-list">
                    <a href="<?= HOSTNAME ?>dash">
                        <i class="fa-solid fa-chart-simple active"></i>Dashboard</a>
                    <a href="<?= HOSTNAME ?>dash/edit">
                        <i class="fa-regular fa-user"></i>Settings</a>
                    <a href="<?= HOSTNAME ?>">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a>

                </div>
                <div class="hamburger1">
                    <div class="bar1"></div>
                    <div class="bar1"></div>
                    <div class="bar1"></div>
                </div>
            <?php } ?>
        </div>
        <div class="info ">
            <div class="container">
                <div class="heading">
                    Avaiable Notifications
                </div>
                <p> There are no notifications for you !</p>
            </div>



        </div>
    </section>
</main>




<?php include_once 'views/footer.php' ?>