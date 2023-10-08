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
                    <p>Lorem ipsum Iusto numquam eum suscipit reiciendis sed ex ratione animi, et aperiam perspiciatis quaerat quibusdam! Minus, ab?</p>
                    <a href="<?= HOSTNAME ?>/events" class="btn btn-danger"> Donate</a>
                    <!-- <a href="#" class="btn btn-light btn-outline-danger"> Request</a> -->
                </div>
                <div class="col-sm-6 order-1 order-sm-2">
                    <img style="border-radius: 5%; object-fit: cover;  width : 100%;" src=" https://cdn.romania-insider.com/sites/default/files/styles/article_large_image/public/2022-03/blood_donation_help_-_photo_korn_vitthayanukarun_dreamstime.com_.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="card-cont">
        <div class="card1">
            <div class="card-details">
                <i class="fa-solid fa-user-plus"></i>
                <div class="card-heading">Become  Donor</div>
                <div class="na1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam vel obcaecati impedit magnam cupiditate ipsa cumque voluptates tempore suscipit molestiae?</div>
                <div class="c-btn">
                    <a href="<?= HOSTNAME ?>/events" class="card-btn">Donate</a>
                </div>
            </div>
        </div>

        <div class="card1">
            <div class="card-details">
                <i class="fa-solid fa-droplet"></i>
                <div class="card-heading">Request Blood</div>
                <div class="na1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam vel obcaecati impedit magnam cupiditate ipsa cumque voluptates tempore suscipit molestiae?</div>
                <div class="c-btn">
                   <a href="<?= HOSTNAME ?>/donorlist" class="card-btn">Request</a>
                </div>
            </div>
        </div>
        
        <div class="card1">
            <div class="card-details">
                <i class="fa-solid fa-house-medical"></i>
                <div class="card-heading">For Bloodbanks</div>
                <div class="na1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam vel obcaecati impedit magnam cupiditate ipsa cumque voluptates tempore suscipit molestiae?</div>
                <div class="c-btn">
                    <a href="<?= HOSTNAME ?>/addbloodbank" class="card-btn">Host</a>
                </div>
           </div>
        </div>
        </div>
    </div>

    <div class="stats-container">
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
        <div class="stats">
            <div class="stats-details">
                <i class="fa-solid fa-cubes-stacked"></i>
                <p>65</p>
                <div class="stats-heading">Total Blood Stocks</div>
            </div>
        </div>
        </div>
    </div>

</main>



<!-- body end -->

<!-- footer -->

<?php include "views/footer.php"; ?>

<!-- footer end -->