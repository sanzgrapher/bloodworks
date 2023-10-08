<?php
$sn = 0;
// show($data); 
?>


<?php include "header.php"; ?>





<!-- <div class="table-section">
        <h1 class="table-sec-title fw-bold display-5">Add Blood Bank</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti excepturi harum accusantium ducimus vero ipsa dolore sint praesentium veritatis hic sapiente, nemo vitae perferendis quis inventore numquam quo totam reiciendis?</p>

        <form class="mx-auto " method="POST" action="addbloodbank">
            <div class="form first">
                <div class="details personal">


                    <div class="fields">




                        <div class="input_field">
                            <label>Blood Bank Name</label>
                            <input type="text" name="bb_name" placeholder="Enter your Blood Bank Name" required>
                        </div>
                        <div class="input_field">
                            <label>E-mail</label>
                            <input type="text" name="bb_email" placeholder="Enter  e-mail" required>
                        </div>
                        <div class="input_field">
                            <label>Contact Number</label>
                            <input type="text" maxlength="10" name="bb_phoneno" placeholder="Enter your mobile number" required>
                        </div>
                        <div class="input_field">
                            <label>Address</label>
                            <input type="text" name="bb_address" placeholder=" City-ward no,tole eg,(Pokhara-17,Chhorepatan)" required>
                        </div>
                        <div class="input_field">
                            <label>Description</label>
                            <textarea name="bb_description" id="" placeholder="Enter Description For your Bloodbank" cols="10" rows="5"></textarea>
                        </div>
                        <div class="input_field">
                            <label>Username</label>
                            <input type="text" name="bb_username" placeholder="Enter your username" required>
                        </div>
                        <div class="input_field">
                            <label>Password</label>
                            <input type="password" name="bb_password" placeholder="Enter your password" required>
                        </div>

                    </div>

                    <input class="submit button" type="submit" name="add-bloodbank" value="Send For Approval">
                </div>
            </div>
        </form>


    </div> -->

<div class="inf bb-reg">
    <div class="form-container">
        <div class="container">
            <div class="heading">
                Registration For Blood Bank
            </div>
            <p>Fill the following fields to create an account </p>

            <form action="addbloodbank" method="post">
                <div class="form log-reg-field">
                    <div class="details personal">
                        <!-- <span class="title">Enter your personal information below : </span> -->
                        <div class="fields ">
                            <div class="input_field">
                                <label for="bb_name">Name of BloodBank :</label>
                                <input type="text" name="bb_name" id="fname" class="inputbox" placeholder="Enter Name" required>
                            </div>

                            <div class="input_field">
                                <label for="bb_email">Email Address: </label>
                                <input type="email" name="bb_email" id="email" class="inputbox" placeholder="Email Address" required>
                            </div>

                            <div class="input_field">
                                <label for="bb_phone_no">Contact :</label>
                                <input type="text" maxlength="10" name="bb_phoneno" id="phone_no" class="inputbox" placeholder="Enter your contact number" required>
                            </div>

                            <div class="input_field">
                                <label for="bb_address">Address :</label>
                                <input type="text" name="bb_address" id="address" class="inputbox" placeholder=" City-ward no,tole eg,(Pokhara-17,Chhorepatan)" required>
                            </div>

                            <div class="input_field">
                                <label for="bb_description">Description</label>
                                <textarea name="bb_description" id="" class="inputbox" placeholder="Enter Description For your Bloodbank" cols="10" rows="5"></textarea>
                            </div>

                            <div class="input_field">
                                <label for="bb_username">Username :</label>
                                <input type="text" name="bb_username" id="uname" class="inputbox" placeholder="Username" required>
                            </div>

                            <div class="input_field">
                                <label for="bb_password">Password :</label>
                                <input type="password" name="bb_password" id="pass" class="inputbox" placeholder="Password" required>
                            </div>
                            <input class="submit button" type="submit" value="Send For Approval" name="add-bloodbank">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>








<?php include "footer.php" ?>