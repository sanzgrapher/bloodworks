<?php
include_once 'views/header.php';


?>

 <main class="dash-container">
     <section class="dashboard_container">
         <?php include_once 'asidemenu.php'; ?>
         <div class="info ">
             <div class="container">
                 <div class="heading">
                     List of Events
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


                                                <td>1</td>
                                                <td>AAAAAAAA</td>
                                                <td>Pokhara</td>
                                                <td>aksbdaobdoabsdoasdaosdaodbaosbdovbdvbdv asa csasjapsdjapsdad</td>
                                                <td>John doe, Mikal Angeko</td>
                                                <td>20-07-2023</td>
                                                <td>061-572342</td>
                                                <td>
                                                <a href="<?= HOSTNAME ?>bbadmin/editevent" class="btn btn-danger">Edit</a>
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
             <div class="container">
             <div class="event_btn_container">
                 <a href="<?= HOSTNAME ?>bbadmin/addevent.views.php" class="btn btn-success">Add Event</a>
                 </div>
             </div>
         </div>
     </section>
 </main>

<?php include 'views/footer.php' ?>