<!-- header -->

<?php
include "views/header.php";


?>


<main class="container-xxl">

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 order-2 order-sm-1">
                    <h2 class="fw-bold display-4">Donate Blood :<span class="text-primary"> Save Life </span></h2>
                    <p><strong>Welcome to Bloodworks</strong><br></p>
                    <!-- Together, we will bridge the gap between donors, recipients, and blood banks, making the process of obtaining and donating blood more efficient and effective. </p> -->
                    <a href="<?= HOSTNAME ?>events" class="btn btn-danger"> Donate</a>
                    <!-- <a href="#" class="btn btn-light btn-outline-danger"> Request</a> -->
                </div>
                <div class="col-sm-6 order-1 order-sm-2">
                    <img style="border-radius: 5%; object-fit: cover;  width : 100%;" src=" https://cdn.romania-insider.com/sites/default/files/styles/article_large_image/public/2022-03/blood_donation_help_-_photo_korn_vitthayanukarun_dreamstime.com_.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="stat-heading">
            <p>What can you do </p>
        </div>
        <div class="card-cont">
        <div class="card1">
            <div class="card-details">
                <i class="fa-solid fa-user-plus"></i>
                <div class="card-heading">Become  Donor</div>
                <div class="na1">Join us in the noble cause of providing life-saving support to those in need. Register as a donor now and be a part of the lifesaving journey. Your contribution matters.<br></div>
                <div class="c-btn">
                    <a href="<?= HOSTNAME ?>events" class="card-btn">Donate</a>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="card-details">
                <i class="fa-solid fa-droplet"></i>
                <div class="card-heading">Request Blood</div>
                <div class="na1">Need blood urgently? We're here to assist you. Simply request the blood type you require, and our site will swiftly connect you with a compatible donor</div>
                <div class="c-btn">
                   <a href="<?= HOSTNAME ?>donorlist" class="card-btn">Request</a>
                </div>
            </div>
        </div>
        
        <div class="card1">
            <div class="card-details">
                <i class="fa-solid fa-house-medical"></i>
                <div class="card-heading">For Bloodbanks</div>
                <div class="na1">Join our platform to efficiently manage blood donations,and connect with donors and recipients. Sign up now and contribute to our mission of ensuring a steady supply of blood for those in need.</div>
                <div class="c-btn">
                    <a href="<?= HOSTNAME ?>addbloodbank" class="card-btn">Host</a>
                </div>
           </div>
        </div>
        </div>
    </div>
<?php if(false): ?>
    <div class="stats-container">
        <div class="stat-heading">
            <p>Stats of Bloodworks</p>
        </div>
        <div class="stat-cont">
        <div class="stats">
            <div class="stats-details">
                <i class="fa-solid fa-users-line"></i>
                <p>136</p>
                <div class="stats-heading">Total User/Donors</div>
            </div>
        </div>
        <div class="stats">
            <div class="stats-details">
                <i class="fa-solid fa-house-medical"></i>
                <p>25</p>
                <div class="stats-heading">Total Bloodbanks</div>
            </div>
        </div>
        <div class="stats">
            <div class="stats-details">
                <i class="fa-solid fa-calendar-check"></i>
                <p>58</p>
                <div class="stats-heading">Total Events Created</div>
            </div>
        </div>

        </div>
    </div>
<?php endif;?>

</main>



<!-- body end -->

<!-- footer -->

<?php include "views/footer.php"; ?>

<!-- footer end -->