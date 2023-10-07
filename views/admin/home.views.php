 <?php
    include_once 'views/header.php';


    ?>



 <main class="dash-container">
     <section class="dashboard_container">
         <?php include_once 'asidemenu.php'; ?>


        <div class="in ">
            <div class="">
                <div class="bank-card-list">
                    <div class="bank-card">
                        <!-- <i class="fa-solid fa-users-line"></i> -->
                        <i class="fa-solid fa-user"></i>
                        <div class="card-data">
                            <a href="#">Users</a>
                            <p><?= $totalusers ?></p>
                        </div>
                         
                    </div>
                    <div class="bank-card">
                        <i class="fa-solid fa-house-medical"></i>
                        <div class="card-data">
                            <a href="#">Blood Banks</a>
                            <p><?= $totalbloodbanks ?></p>
                        </div>
                    </div>
                    <div class="bank-card">
                        <i class="fa-solid fa-calendar-check"></i>
                        <div class="card-data">
                            <a href="#">Events</a>
                            <p><?= $totalbloodbanks ?></p>
                        </div>
                    </div>
                    <div class="bank-card">
                        <i class="fa-solid fa-cubes-stacked"></i>
                        <div class="card-data">
                            <a href="#">Blood Stocks</a>
                            <p><?= $totalbloodbanks ?></p>
                        </div>
                    </div>
                    <div class="bank-card">
                        <i class="fa-solid fa-users-line"></i>
                        <div class="card-data">
                            <a href="#">Event Participates</a>
                            <p><?= $totalbloodbanks ?></p>
                        </div>
                    </div>
                </div>
            </div>



         </div>
     </section>

 </main>


 <?php include_once 'views/footer.php' ?>