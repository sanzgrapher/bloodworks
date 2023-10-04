<?php
$sn = 0;
// show($data); 
?>


<?php include "header.php"; ?>




<main class="container-xxl">

    <div class="table-section">
        <h1 class="table-sec-title fw-bold display-5">Available donors</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti excepturi harum accusantium ducimus vero ipsa dolore sint praesentium veritatis hic sapiente, nemo vitae perferendis quis inventore numquam quo totam reiciendis?</p>
        <div style="overflow-x:auto;">


            <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing=" 0" width="100%">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>Bloodgroup</th>
                        <th>Address</th>
                        <!-- <th>Contact Number</th> -->
                        <th>Action</th>
                    </tr>
                </thead>

              



                <?php if (empty($donors)) {
                    echo "No donor available";
                } else {
                    foreach ($donors as $donor) { ?>
                        <tr>

                            <td><?= $donor->fname . " " . $donor->mname . " " . $donor->lname; ?></td>
                            <td><?= $donor->bloodgroup; ?></td>
                            <td><?= $donor->address; ?></td>
                            <!-- <td><?= isset($donor->phone_no) ? $donor->phone_no : 'N/A'; ?></td> -->


                            <td>
                                <!-- <form action="donorlist" method="POST"> -->
                                    <!-- <input class="submit button" type="submit" name="sendmail" value="Send For Approval"> -->
                                    <!-- <input value="sendemail" type="submit" class="btn btn-primary"> -->
                                    <button id="myBtn" class="btn btn-danger">Open Modal</button>
                                <!-- </form> -->
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>



            </table>
        </div>
    </div>



</main>


<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="info bb-form">
            <div class="container">
                <span class="close">&times;</span>
                <div class="heading">
                    Request Blood
                </div>
                <form action="bloodrequest" method="post">

                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Donor's Information</span>
                            <input type="hidden" name="id" value="<?= $user; ?>">
                            <div class="fields">
                                <div class="input_field">
                                    <label>Donor's First Name</label>
                                    <input type="text" name="fname" placeholder="Enter your First name" required>
                                </div>

                                <div class="input_field">
                                    <label>Donor's Last Name</label>
                                    <input type="text" name="lname" placeholder="Enter your Last name" required>
                                </div>
                                <div class="input_field">
                                    <label>Contact Number</label>
                                    <input type="text" maxlength="10" name="phone_no" placeholder="Enter your mobile number" required>
                                </div>
                                <div class="input_field">
                                    <label>Address</label>
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
                            <input class="submit button" type="submit" name="request-blood" value="SUBMIT">

                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

</div>









<?php include "footer.php" ?>