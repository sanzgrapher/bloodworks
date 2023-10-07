 <?php
    include_once 'views/header.php';


    ?>


 <?php
    // if (!isset($_COOKIE["STATUS"])) {
    //     // echo "Cookie named '" . $cookie_name . "' is not set!";
    //     echo "NOT SET";
    // } else {
    //     echo "Cookie 'STATUS' is set!<br>";
    //     echo "Value is: " . $_COOKIE["STATUS"];
    //     echo "SET";
    // }
    ?>
 <main class="dash-container">
     <section class="dashboard_container">
         <?php include 'asidemenu.php' ?>
         <div class="info ">

             <?php foreach ($loggedinuser as $user) { ?>
                 <div class="container">
                     <div class="switch-donor">
                         <a>Become Donors</a>
                         <!-- 
                     <form action="edit" id="availabilityForm" method="POST">
                         <label class="switch">
                             <input type="checkbox" name="availability" ' . ($columnValue === "available" ? "checked" : "") . ' onchange="submitForm()"> Available';
                             <span class="slider round"></span>
                         </label>
                     </form> -->

                         <?php
                            //  show($loggedinuser);


                            // Replace $dateString with the actual last donation date in your code format.
                            $dateString = $user->last_donation_date;
                            //    $dateString = "2023-6-09"; // donation date
                            // //    $dateString = "2023-7-01"; // 3months
                            // // $dateString = "2023-10-01"; // past
                            // // $dateString = "2023-10-05"; // yesterday
                            // // $dateString = "2023-10-06"; //today
                            // // $dateString = "2023-10-07"; // tommorroe
                            if($dateString != null){
                                $lastDonationDate = $dateString;
                                $donationPeriod = 90;
                                $endDate = date('Y-m-d', strtotime($lastDonationDate . " + $donationPeriod days"));
                                // sho in date like fridat oct 21 2023
                                $endDate = date('l M d Y', strtotime($lastDonationDate . " + $donationPeriod days"));
                                $currentDate = date('Y-m-d');

                                // Calculate the difference between the current date and the end date
                                $diff = strtotime($endDate) - strtotime($currentDate);

                                // Calculate the number of days remaining
                                $daysRemaining = floor($diff / (60 * 60 * 24));
                                if ($daysRemaining > 0) {
                                    $res = false;

                                    $daysLeft = $daysRemaining;
                                } else {
                                    $res = true;
                                    $output = "available";
                                    $daysLeft = 0;
                                }
                            }
                            else{
                                $res = true;
                                $output = "available";
                                $daysLeft = 0;
                            }

                            
                      





                            if ($res) { ?>
                             <form id="availabilityForm" method="POST" action="edit">




                                 <label class="switch">
                                     <input onchange="toggleValue()" type="checkbox" id="availability" name="availability" <?= ($user->donor_availability == "Available" ? "checked" : ""); ?>>
                                     <span class="slider round"></span>

                                 </label>
                                 <input class="btn btn-primary" type="submit" name="toogle" value="Submit">




                             </form>
                         <?php } else {



                            ?>
                             <br>
                             <br>
                             <div class="alert alert-danger" role="alert">
                                 You are not available for donation until <?= "<strong> " . $endDate . " => " . $daysLeft . " Days Left </strong>" ?> <br>
                             </div>

                         <?php
                            } ?>










                     </div>
                 </div>




                 <div class="container">
                     <div class="heading">
                         PROFILE
                     </div>
                     <form action="edit" method="post">

                         <div class="form first">
                             <div class="details personal">
                                 <span class="title">Personal Details</span>
                                 <input type="hidden" name="id" value="<?= $user->id; ?>">
                                 <div class="fields">
                                     <div class="input_field">
                                         <label>First Name</label>
                                         <input type="text" name="fname" value="<?= $user->fname; ?> " placeholder="Enter your First name" required>
                                     </div>
                                     <div class="input_field">
                                         <label>Middle Name</label>
                                         <input type="text" name="mname" value="<?= $user->mname; ?>" placeholder="Enter your Middle name">
                                     </div>
                                     <div class="input_field">
                                         <label>Last Name</label>
                                         <input type="text" name="lname" value="<?= $user->lname; ?>" placeholder="Enter your Last name" required>
                                     </div>
                                     <div class="input_field">
                                         <label>Date of Birth</label>
                                         <input type="date" placeholder="Select Date" value="<?= $user->dateofbirth ?>" name="dateofbirth" required>
                                     </div>
                                     <div class="input_field">
                                         <label>Username</label>
                                         <input type="text" placeholder="Enter your username" value="<?= $user->username ?>" required>
                                     </div>







                                     <div class="input_field">
                                         <label>Mobile Number</label>
                                         <input type="text" maxlength="10" name="phone_no" value="<?= $user->phone_no ?>" placeholder="Enter your mobile number" required>
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
                                         <label for="bloodgroup">Blood Group</label>
                                         <select name="bloodgroup" id="bloodgroup">
                                             <option value="A+" <?= ($user->bloodgroup == "A+" ? "selected" : ""); ?>>A+</option>
                                             <option value="A-" <?= ($user->bloodgroup == "A-" ? "selected" : ""); ?>>A-</option>
                                             <option value="B+" <?= ($user->bloodgroup == "B+" ? "selected" : ""); ?>>B+</option>
                                             <option value="B-" <?= ($user->bloodgroup == "B-" ? "selected" : ""); ?>>B-</option>
                                             <option value="AB+" <?= ($user->bloodgroup == "AB+" ? "selected" : ""); ?>>AB+</option>
                                             <option value="AB-" <?= ($user->bloodgroup == "AB-" ? "selected" : ""); ?>>AB-</option>
                                             <option value="O+" <?= ($user->bloodgroup == "O+" ? "selected" : ""); ?>>O+</option>
                                             <option value="O-" <?= ($user->bloodgroup == "O-" ? "selected" : ""); ?>>O-</option>
                                         </select>
                                     </div>

                                     <div class="input_field">
                                         <label>Address</label>
                                         <input type="text" name="address" value=" <?= $user->address; ?>" placeholder=" City-ward no,tole eg,(Pokhara-17,Chhorepatan)" required>
                                     </div>
                                 </div>
                                 <input class="submit button" type="submit" name="edit-basic" value="Update Details">
                                 <!-- <input class="submit" type="submit" name="edit-basic" value="edit-basic">
                                Update Profile
                                </input> -->
                             </div>
                         </div>
                     </form>
                 </div>
             <?php } ?>


             <!-- <div class="container">
                 <div class="heading">
                     Credentials
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
             </div> -->


         </div>
     </section>
 </main>
 <?php include 'views/footer.php' ?>