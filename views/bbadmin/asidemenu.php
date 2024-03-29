<!-- // Purpose: Sidebar menu for bbadmin -->
<div class="dashboard ">
    <?php foreach ($loggedinuser as $user) {
    ?>
        <div class="profile-container">
            <!-- <img src="img.jpg" alt="" class="profile-img"> -->
            <!-- <a href="#" class="upload-img">Upload Image</a> -->

            <h3><?= $user->bb_name ?></h3>
        </div>
        <div class="side-list">
            <a href="<?= HOSTNAME ?>bbadmin">
                <i class="fa-solid fa-chart-simple active"></i>Dashboard</a>
            <a href="<?= HOSTNAME ?>bbadmin/bloodstock">
                <i class="fa-solid fa-cubes-stacked"></i>Blood Stocks</a>
            <a href="<?= HOSTNAME ?>bbadmin/edit">
                <i class="fa-solid fa-gear"></i>BB Settings</a>
            <a href="<?= HOSTNAME ?>bbadmin/events">
                <i class="fa-solid fa-calendar-check"></i>BB Events</a>
            <a href="<?= HOSTNAME ?>logout">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a>
        </div>
        <div class="hamburger1">
            <div class="bar1"></div>
            <div class="bar1"></div>
            <div class="bar1"></div>
        </div>
    <?php  }
    ?>
</div>