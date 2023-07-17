<?php
    include_once 'views/header.php';


    ?>

 <main class="dash-container">
     <section class="dashboard_container">
         <?php include_once 'asidemenu.php'; ?>
         <div class="info ">
             <div class="container">
                 <div class="heading">
                     Avaiable Blood bank requests
                 </div>

                 <div class="table-section">
                     <div style="overflow-x:auto;">
                         <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                             <thead>
                                 <tr>
                                     <th class="th-sm">No.
                                     </th>
                                     <th class="th-sm">Event Name
                                     </th>
                                     <th class="th-sm">Location
                                     </th>
                                     <th class="th-sm">Event Description
                                     </th>
                                     <th class="th-sm">Event Organizers
                                     </th>
                                     <th class="th-sm">Event Time
                                     </th>
                                     <th class="th-sm">Contacts
                                     </th>
                                     <th class="th-sm">Edit Event
                                     </th>

                                 </tr>
                             </thead>
                             <tbody>
                                  <?php 
                                //  if (empty($bloodbanks)) {
                                //         echo "No Requests available";
                                //     } else {
                                //         foreach ($bloodbanks as $bloodbank) {   
                                            
                                            ?>
                                         <tr>
                                             <!-- <td><?= $bloodbank->bb_name; ?></td>
                                             <td style="text-align:left;">
                                                 Email = <?= $bloodbank->bb_email ?> <br>
                                                 Phone no :<?= $bloodbank->bb_phoneno; ?> <br>
                                                 Address :<?= $bloodbank->bb_address; ?> <br>
                                                 Description :<?= $bloodbank->bb_description; ?> <br>
                                             </td> -->

                                                <td>1</td>
                                                <td>AAAAAAAA</td>
                                                <td>Pokhara</td>
                                                <td>aksbdaobdoabsdoasdaosdaodbaosbdovbdvbdv asa csasjapsdjapsdad</td>
                                                <td>John doe, Mikal Angeko</td>
                                                <td>20-07-2023</td>
                                                <td>061-572342</td>
                                                <td>
                                                     <button class="btn btn-success">edit</button>
                                                </td>
                                         </tr>
                                 <?php
                                    //     }
                                    // }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                 </div>
             </div>
         </div>
     </section>
     <section>
        <a href="" class="button">Add Event</a>
     </section>
 </main>

 <?php include 'views/footer.php' ?>