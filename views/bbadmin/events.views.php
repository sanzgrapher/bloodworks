 <?php
    include_once 'views/header.php';


    ?>



 <main class="dash-container">
     <section class="dashboard_container">
         <?php include_once 'asidemenu.php'; ?>


         <div class="info ">
            <div class="container">
                <div class="heading">
                    Events
                </div>
                <div class="event_list" style="overflow-x: auto;">
                      <table>
                          <tr>
                              <th>No.</th>
                              <th>Name</th>
                              <th>Location</th>
                              <th>Event Details</th>
                              <th>Event Organizers</th>
                              <th>Event Time</th>
                              <th>Contacts</th>
                              <th>Edit Events</th>
                          </tr>
                          <tr>
                              <td><?php echo $rows['event_id'];?></td>
                              <td><?php echo $rows['event_name'];?></td>
                              <td><?php echo $rows['event_loaction'];?></td>
                              <td><?php echo $rows['event_desc'];?></td>
                              <td><?php echo $rows['organizer'];?></td>
                              <td><?php echo $rows['event_time'];?></td>
                              <td><?php echo $rows['contact_info'];?></td>
                              <td><a href="editevent.html">Edit Event</a></td>
                          </tr>
                      </table>
                </div>
            </div>
        </div>
             <div class="container">
                 <div class="heading">
                     Crediantals
                 </div>
                 <form action="#">
                     <div class="form first">
                         <div class="details personal">
                             <span class="title">Personal Details</span>

                             <div class="fields">




                                 <div class="input_field">
                                     <label>E-mail</label>
                                     <input type="text" placeholder="Enter your e-mail" required>
                                 </div>

                                 <div class="input_field">
                                     <label>Password</label>
                                     <input type="password" placeholder="Enter your password" required>
                                 </div>
                                 <div class="input_field">
                                     <label>Password</label>
                                     <input type="password" placeholder="ReEnter your password" required>
                                 </div>










                             </div>

                             <input class="submit button" type="submit" name="edit-login" value="Update Login">
                         </div>
                     </div>
                 </form>
             </div>


         </div>
     </section>
 </main>
 <?php include 'views/footer.php' ?>