<?php
include_once 'views/header.php';
?>

<main class="dash-container">
    <section class="dashboard_container">
        <?php include "asidemenu.php" ?>
        <div class="info ">
            <div class="container">
                <div class="heading">
                    User Dashboard
                </div>
                
                <div class="table-section">
                <h3>Avaiable Events</h3>   
                      <div style="overflow-x:auto;">


                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing=" 0" width="100%">
                            <thead>
                                <tr>
                                  
                                    <th>Name</th>
                                    <th>Event Location</th>
                                    <th>Organizers</th>
                                    <th>Contact</th>
                                
                                </tr>
                            </thead>
                            <?php if (empty($events)) {
                                echo "No event available";
                            } else {
                                foreach ($events as $event) { ?>
                                    <tr>
                               
                                        <td><?= $event->event_name ?></td>
                                        <td><?= $event->event_location; ?></td>
                                        <td><?= $event->organizer; ?></td>
                                        <td><?= $event->contact_info; ?></td>

 
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>




<?php include_once 'views/footer.php' ?>