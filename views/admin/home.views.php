 <?php
    include_once 'views/header.php';


    ?>



 <main class="dash-container">
     <section class="dashboard_container">
         <?php include_once 'asidemenu.php'; ?>


         <div class="info ">
             <div class="container">
                 <div class="heading">
                     Blood Bank Home admin
                 </div>
                 <!-- Total users : <?= $totalusers ?><br>
                 Total blood banks : <?= $totalbloodbanks ?> -->

             </div>
                <div class="container">
                <div class="heading">
                     Statistics
                 </div>
                    <div class="bank-card-list">
                        <div class="bank-card">
                            <a>Users</a>
                            <p><?= $totalusers ?></p>
                        </div>
                        <div class="bank-card">
                            <a href="#">Blood Banks</a>
                            <p><?= $totalbloodbanks ?></p>
                        </div>
                    </div>
                </div>


            
             </div>
     </section>

 </main>