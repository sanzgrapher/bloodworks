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
                <form action="edit" method="post">
                    <?php foreach ($loggedinuser as $user) { ?>
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Event Details</span>
                                <input type="hidden" name="event_id" value="<?= $user->event_id; ?>">
                                <div class="fields">
                                    <div class="input_field">
                                        <input type="hidden" name="event_id" value="<?= $event->event_id; ?>">
                                        <label>Event Title</label>
                                        <input type="text" name="event_name" value="<?= $user->event_name; ?> " placeholder="Enter the event title" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Location</label>
                                        <input type="text"  name="event_location" value="<?= $user->event_location; ?>"placeholder="Enter the event location" required>
                                    </div>

                                    <div class="input_field">
                                        <label>Event Description</label>
                                        <input type="text" name="event_desc" value="<?= $user->event_desc; ?>" placeholder="Enter the event description" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Event Time</label>
                                        <input type="date" name="event_time" value="<?= $user->event_time; ?>" placeholder="Enter the event time" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Contact Info</label>
                                        <textarea type="text" maxlength="10" name="contact_info"   placeholder="Enter the contact number" required><?= $event->contact_info; ?></textarea>
                                    </div>
                                    <div class="input_field">
                                        <label>Contact Number</label>
                                        <input type="text" maxlength="10" name="contact_info" value="<?= $user->contact_info; ?>" placeholder="Enter the contact number" required>
                                    </div>
                                </div>
                                <input class="submit button" type="submit" name="update-event" value="Update Event Details">
                            </div>
                        </div> <?php } ?>
                </form>
            </div>




         </div>
     </section>
 </main>
 <?php include 'views/footer.php' ?>