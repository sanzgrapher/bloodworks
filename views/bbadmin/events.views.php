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
                                     <th class="th-sm">Name
                                     </th>
                                     <th class="th-sm">Description
                                     </th>
                                     <th class="th-sm">View
                                     </th>

                                 </tr>
                             </thead>
                             <tbody>
                                  <?php 
                                 if (empty($events)) {
                                        echo "No events available";
                                    } else {
                                        foreach ($events as $event) {   
                                            
                                            ?>
                                         <tr>
                                              <td><?= $event->event_name; ?></td>
                                              
                                             <td style="text-align:left;">
                                               
                                             Organizer :<?= $event->organizer; ?> <br>
                                             Location :<?= $event->event_location; ?> <br>
                                             Contact :<?= $event->contact_info; ?> <br>
                                                Description :<?= $event->event_desc; ?> <br>
                                             </td>  
 

                                             <td>
                                            <a href="<?= HOSTNAME?>/bbadmin/editevent/<?= $event->event_id ; ?>">Edit</a>     

                                                 
                                             </td>
                                         </tr>
                                 <?php
                                        }
                                    }
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