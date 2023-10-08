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


                                            <td>
                                                <a href="<?= HOSTNAME ?>/bbadmin/editevent/<?= $event->event_id; ?>">Edit</a>


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
                <div class="heading">
                    Add Events
                </div>
                <form action="events" method="post">

                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Event Details</span>

                            <div class="fields">
                                <div class="input_field">
                                    <label>Event Title</label>
                                    <input type="text" name="event_name" placeholder="Enter the event title" required>
                                </div>
                                <div class="input_field">
                                    <label>Location</label>
                                    <input type="text" name="event_location" placeholder="Enter the event location" required>
                                </div>
                                <div class="input_field">
                                    <label>Organizer</label>
                                    <input type="text" name="organizer" placeholder="Enter the event location" required>
                                </div>


                                <div class="input_field">
                                    <label>Date</label>
                                    <input type="date" id="inputdate" name="event_date" placeholder="Enter the event date" required>
                                </div>
                                <div class="input_field">
                                    <label>Contact Info</label>
                                    <textarea type="text" maxlength="10" name="contact_info" placeholder="Enter the contact number" required></textarea>
                                </div>
                                <div class="input_field">
                                    <label>Event Description</label>


                                    <textarea name="event_desc" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <input class="submit button" type="submit" name="add-event" value="Add Event">
                        </div>
                    </div>
                </form>



            </div>
    </section>
</main>



<?php include 'views/footer.php' ?>