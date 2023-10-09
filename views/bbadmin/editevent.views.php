<?php
include_once 'views/header.php';


?>



<main class="dash-container">
    <section class="dashboard_container">
        <?php include_once 'asidemenu.php'; ?>
        <div class="info ">
            <div class="container">
                <div class="heading">
                    Event Edit
                </div>
                <?php foreach ($events as $event) { ?>
                <form action="<?= $event->event_id; ?>" method="post">
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Event Details</span>
                                <input type="hidden" name="event_id" value="<?= $event->event_id; ?>">
                                <div class="fields">
                                    <div class="input_field">
                                        <input type="hidden" name="event_id" value="<?= $event->event_id; ?>">
                                        <label>Event Title</label>
                                        <input type="text" name="event_name" value="<?= $event->event_name; ?> " placeholder="Enter the event title" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Location</label>
                                        <input type="text" name="event_location" value="<?= $event->event_location; ?>" placeholder="Enter the event location" required>
                                    </div>

                                    <div class="input_field">
                                        <label>Event Description</label>
                                        <input type="text" name="event_desc" value="<?= $event->event_desc; ?>" placeholder="Enter the event description" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Event Time</label>
                                        <input type="date" name="event_date" value="<?= $event->event_date; ?>" placeholder="Enter the event time" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Organizer</label>
                                        <input type="text" name="organizer" value="<?= $event->organizer; ?>" placeholder="Enter the event organizer" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Contact Info</label>
                                        <textarea type="text" maxlength="10" name="contact_info" placeholder="Enter the contact number" required><?= $event->contact_info; ?></textarea>
                                    </div>
                                    <div class="input_field">
                                        <label>Event Description</label>


                                        <textarea name="event_desc" id="" cols="30" rows="5"><?= $event->event_desc; ?></textarea>
                                    </div>
                                </div>
                                <input class="submit button" type="submit" name="update-event" value="Update Event Details">
                            </div>
                        </div> <?php } ?>
                </form>
            </div>
            <div class="container">
                <div class="heading">
                    Event Participation
                </div>
                <p>Update The Blood Unit of respective Donor</p>
                <div class="table-section" id="update-donation">
                    <div style="overflow-x:auto;">
                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">Name
                                    </th>

                                    <th class="th-sm">Blood Unit
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (empty($eventdonors)) {
                                    echo "No events available";
                                } else {
                                    foreach ($eventdonors as $eventdonor) {

                                ?>
                                        <tr>
                                            <td><?= $eventdonor->username; ?></td>




                                            <td>
                                                <form action="<?= HOSTNAME."bbadmin/editevent/". $event->event_id ?>" method="post">
                                                    <input type="hidden" name="user_id" value="<?= $eventdonor->id ?>">
                                                    <input type="hidden" name="participation_id" value="<?= $eventdonor->participation_id ?>">
                                                    <input type="text" name="blood_unit" value="<?php if ($eventdonor->blood_unit != 0) echo $eventdonor->blood_unit;  ?>">
                                                    <input type="submit" name="update_blood_unit" value="Submit">
                                                </form>

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
                <hr>
                <div class="heading">
                    Add Unregistered Donor
                </div>
                <p>Fill the details of the donor to add them to the event</p>
                <form action="editevent" method="post">

                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Event Details</span>
                            <input type="hidden" name="event_id" value="<?= $event->event_id; ?>">
                            <div class="fields">

                                <div class="input_field">
                                    <label>Email</label>
                                    <input type="email" name="email" required>
                                </div>
                                <div class="input_field">
                                    <label>Blood Group</label>
                                    <input type="text" name="blood_unit" required>
                                </div>
                                <div class="input_field">
                                    <label>Age</label>
                                    <input type="text" name="blood_unit" required>
                                </div>
                                <div class="input_field">
                                    <label>Blood Unit Donated</label>
                                    <input type="text" name="blood_unit" required>
                                </div>

                            </div>
                            <input class="submit button" type="submit" name="add-donor" value="Add Donor">
                        </div>
                    </div>
                </form>


            </div>




        </div>
    </section>
</main>
<?php include 'views/footer.php' ?>