<!-- // Purpose: Sidebar menu for bbadmin -->
<div class="dashboard ">

    <div class="profile-container">
        <!-- <img src="img.jpg" alt="" class="profile-img"> -->
        <!-- <a href="#" class="upload-img">Upload Image</a> -->
        <h3>BB Admin page</h3>
    </div>
    <div class="side-list">
        <a href="<?= HOSTNAME ?>bbadmin">
            <i class="fa-solid fa-chart-simple active"></i>Dashboard</a>
        <a href="<?= HOSTNAME ?>bbadmin/bloodstock">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>Blood Stocks</a>
        <a href="<?= HOSTNAME ?>bbadmin/edit">
            <i class="fa-regular fa-user"></i>BB Settings</a>
        <a href="<?= HOSTNAME ?>bbadmin/events">
            <i class="fa-regular fa-user"></i>BB Events</a>
        <a href="<?= HOSTNAME ?>bbadmin/editevent">
            <i class="fa-regular fa-trash-can"></i>Edit Event</a>
        <a href="#">
            <i class="fa-regular fa-trash-can"></i>Delete Profile</a>
    </div>
    <div class="hamburger1">
        <div class="bar1"></div>
        <div class="bar1"></div>
        <div class="bar1"></div>
    </div>

</div>