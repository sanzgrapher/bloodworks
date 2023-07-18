 <?php
    include_once 'views/header.php';



    ?>



 <main class="dash-container">
     <section class="dashboard_container">
         <div class="info ">


             <div class="container">
                 <div class="heading">
                     Request Blood
                 </div>
                 <?php
                    if (isset($_SESSION['u-type']) && $_SESSION['u-type'] == 'dash') {
                        foreach ($loggedinuser as $user) {
                            $user = $user->id;
                        }
                    ?>
                     <form action="bloodrequest" method="post">

                         <div class="form first">
                             <div class="details personal">
                                 <span class="title">Fill the details of the form to request for blood</span>
                                 <input type="hidden" name="id" value="<?= $user; ?>">
                                 <div class="fields">
                                     <div class="input_field">
                                         <label>Patient's First Name</label>
                                         <input type="text" name="fname" placeholder="Enter your First name" required>
                                     </div>
                                      
                                     <div class="input_field">
                                         <label>Patient's Last Name</label>
                                         <input type="text" name="lname" placeholder="Enter your Last name" required>
                                     </div>
                                     <div class="input_field">
                                         <label>Patient's Contact Number</label>
                                         <input type="text" maxlength="10" name="phone_no" placeholder="Enter your mobile number" required>
                                     </div>
                                     <div class="input_field">
                                         <label>Patient's Address</label>
                                         <input type="text" name="address" placeholder=" City-ward no,tole eg,(Pokhara-17,Chhorepatan)" required>
                                     </div>

                                     <!-- <div class="input_field">
                                        <label>Gender</label>
                                        <select name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div> -->

                                     <div class="input_field">
                                         <label>Patient's Blood Group</label>
                                         <select name="bloodgroup">
                                             <option value="">Select Your Blood Group</option>
                                             <option value="A+">A+</option>
                                             <option value="A-">A-</option>
                                             <option value="B+">B+</option>
                                             <option value="B-">B-</option>
                                             <option value="AB+">AB+</option>
                                             <option value="AB-">AB-</option>
                                             <option value="O+">O+</option>
                                             <option value="O-">O-</option>
                                         </select>
                                     </div>
                                     
                                     <div class="input_field">
                                         <label>Urgency</label>
                                         <select name="urgency">
                                             <option value="">Select Urgency</option>
                                             <option value="urgent">Urgent</option>
                                             <option value="moderate">Moderate</option>
                                             <option value="not urgent">Not Urgent</option>
                                         </select>
                                     </div>
                                     <div class="input_field">
                                         <label>Required Before</label>
                                         <input type="date" placeholder="Select Date" name="required_date" required>
                                     </div>
                                     <div class="input_field">
                                         <label>Reason for Requirment</label>
                                         <input type="text" placeholder="State your reason for requesting blood" name="reason" required>
                                     </div>


                                 </div>
                                 <input class="submit button" type="submit" name="request-blood" value="Post Request Blood">
                                 
                             </div>
                         </div>
                     </form>

                 <?php } else { ?>

                     <p>Need To Be Loggedin To Request Blood</p>
                 <?php } ?>

             </div>
         </div>
     </section>
 </main>
 <?php include 'views/footer.php' ?>