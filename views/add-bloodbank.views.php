<?php
$sn = 0;
// show($data); 
?>


<?php include "header.php"; ?>




<main class="container-xxl">

    <div class="table-section">
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
                            <label>Mobile Number</label>
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


    </div>



</main>





<?php include "footer.php" ?>