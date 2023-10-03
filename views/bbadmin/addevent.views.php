<?php
    include_once 'views/header.php';


    ?>



 <main class="dash-container">
     <section class="dashboard_container">
         <?php include_once 'asidemenu.php'; ?>
         <div class="info ">
         <div class="container">
                <div class="heading">
                    Event
                </div>
                <form action="edit" method="post">
                   
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Event Details</span>
                                <input type="hidden" name="event_id" >
                                <div class="fields">
                                    <div class="input_field">
                                        <label>Event Title</label>
                                        <input type="text" name="event_name"  placeholder="Enter the event title" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Location</label>
                                        <input type="text"  name="event_location" placeholder="Enter the event location" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Event Description</label>
                                        <input type="text" name="event_desc"  placeholder="Enter the event description" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Event Time</label>
                                        <input type="date" name="event_time"  placeholder="Enter the event time" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Organizers</label>
                                        <input type="text" name="organizer"  placeholder="Enter the organizer name" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Contact Number</label>
                                        <input type="text" maxlength="10" name="contact_info"  placeholder="Enter the contact number" required>
                                    </div>
                                </div>
                                <input class="submit button" type="submit" name="edit-basic" value="Update Details">
                            </div>
                        
                </form>
            </div>




         </div>
     </section>
 </main>
 <?php include 'views/footer.php' ?>