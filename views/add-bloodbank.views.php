<?php
$sn = 0;
// show($data); 
?>


<?php include "header.php"; ?>




<main class="container-xxl">

    <div class="table-section">
        <h1 class="table-sec-title fw-bold display-5">Add Blood Bank</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti excepturi harum accusantium ducimus vero ipsa dolore sint praesentium veritatis hic sapiente, nemo vitae perferendis quis inventore numquam quo totam reiciendis?</p>

        <form class="mx-auto "   action="#">
            <div class="form first">
                <div class="details personal">


                    <div class="fields">




                        <div class="input_field">
                            <label>Blood Bank Name</label>
                            <input type="text" placeholder="Enter your Blood Bank Name" required>
                        </div>
                        <div class="input_field">
                            <label>E-mail</label>
                            <input type="text" placeholder="Enter  e-mail" required>
                        </div>
                        <div class="input_field">
                            <label>Mobile Number</label>
                            <input type="text" maxlength="10" name="phone_no" placeholder="Enter your mobile number" required>
                        </div>
                        <div class="input_field">
                            <label>Description</label>
                            <textarea name="" id="" cols="10" rows="5"></textarea>
                        </div>












                    </div>

                    <input class="submit button" type="submit" name="edit-login" value="Send For Approval">
                </div>
            </div>
        </form>


    </div>



</main>





<?php include "footer.php" ?>