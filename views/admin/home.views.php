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
                 Total users : <?= $totalusers ?><br>
                 Total blood banks : <?= $totalbloodbanks ?>

                </div>


            
         </div>
     </section>
 </main>