<?php
$sn = 0;
?>
<?php include "header.php"; ?>
<main class="container-xl top-gap">

    <div class="table-section">
    <div class="list-head">
        <h1 class="table-sec-title fw-bold display-5">List of Available Events</h1>
        <p class="evnt-info">If you would like to get involved in our website's blood donation events organized by various blood banks, please review the list of upcoming events provided below. By clicking the <strong>"View Event"</strong> button, you can access more details about each specific event and participate accordingly.</p>
    </div>    
    <div style="overflow-x:auto;" class="tb-cont">


            <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing=" 0" width="100%">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Event Location</th>
                        <th>Organizers</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php if (empty($events)) {
                    echo "No event available";
                } else {
                    foreach ($events as $event) { ?>
                        <tr>
                            <td><?= ++$sn ?></td>
                            <td><?= $event->event_name ?></td>
                            <td><?= $event->event_location; ?></td>
                            <td><?= $event->organizer; ?></td>
                            <td><?= $event->contact_info; ?></td>


                            <td><a class="btn btn-danger" href="event/<?= $event->event_id ?>">View Event</a></td>
                        </tr>
                <?php
                    }
                }
                ?>

            </table>
        </div>
    </div>



</main>





<?php include "footer.php" ?>