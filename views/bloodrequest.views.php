 
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
        <div class="info ">


            <div class="container">
                <div class="heading">
                    Request Blood
                </div>
                <form action="edit" method="post">
                    <?php foreach ($loggedinuser as $user) { ?>
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Fill the details of the form to request  for blood</span>
                                <input type="hidden" name="id" value="<?= $user->id; ?>">
                                <div class="fields">
                                    <div class="input_field">
                                        <label>Patient's First Name</label>
                                        <input type="text" name="fname"  placeholder="Enter your First name" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Patient's Middle Name</label>
                                        <input type="text" name="mname"  placeholder="Enter your Middle name">
                                    </div>
                                    <div class="input_field">
                                        <label>Patient's Last Name</label>
                                        <input type="text" name="lname"  placeholder="Enter your Last name" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Contact Number</label>
                                        <input type="text" maxlength="10" name="phone_no"  placeholder="Enter your mobile number" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Address</label>
                                        <input type="text" name="address"  placeholder=" City-ward no,tole eg,(Pokhara-17,Chhorepatan)" required>
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
                                        <label>Blood Group</label>
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
                                        <label>Blood Group</label>
                                        <select name="bloodunits">
                                            <option value="">Select Unit</option>
                                            <option value="1">1 Units</option>
                                            <option value="2">2 Units</option>
                                            <option value="3">3 Units</option>
                                            <option value="4">4 Units</option>
                                            <option value="5">5 Units</option>
                                            <option value="6">6 Units</option>
                                            <option value="7">7 Units</option>
                                            <option value="8">8 Units</option>
                                            <option value="9">9 Units</option>
                                            <option value="10">10 Units</option>
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
                                <input class="submit button" type="submit" name="edit-basic" value="Post Request Blood">
                                <!-- <input class="submit" type="submit" name="edit-basic" value="edit-basic">
                                Update Profile
                                </input> -->
                            </div>
                        </div> <?php } ?>
                </form>
            </div>
        </div>
    </section>
</main>
<?php include 'views/footer.php' ?>