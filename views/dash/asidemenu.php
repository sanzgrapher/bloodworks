 <div class="dashboard ">
     <?php foreach ($loggedinuser as $user) {
        ?>
         <div class="profile-container">
             <!-- <img src="img.jpg" alt="" class="profile-img"> -->
             <!-- <a href="#" class="upload-img">Upload Image</a> -->
             <h3><?= $user->username ?></h3>
         </div>
         <div class="side-list">
             <a href="<?= HOSTNAME ?>dash/">
                 <i class="fa-solid fa-chart-simple active"></i>Home</a>
             <!-- <a href="<?= HOSTNAME ?>dash/requestlist.views.php">
                 <i class="fa-solid fa-list"></i>Request List</a> -->
             <a href="<?= HOSTNAME ?>dash/edit">
                <i class="fa-solid fa-gear"></i>Settings</a>
             <a href="<?= HOSTNAME ?>dash/requests">
                <i class="fa-solid fa-envelope"></i>Your Requests</a>
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