<?php
$sn = 0;
?>
<?php include "header.php"; ?>
<main class="container-xxl top-gap">

    <div class="table-section">
        <h1 class="table-sec-title fw-bold display-5">Available events</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti excepturi harum accusantium ducimus vero ipsa dolore sint praesentium veritatis hic sapiente, nemo vitae perferendis quis inventore numquam quo totam reiciendis?</p>
        <div style="overflow-x:auto;">


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