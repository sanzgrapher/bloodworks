 <?php
    include_once 'views/header.php';


    ?>



 <main class="dash-container">
     <section class="dashboard_container">
         <?php include_once 'asidemenu.php'; ?>
         <div class="info ">
         <div class="container">
                <div class="heading">
                    PROFILE
                </div>
                <form action="edit" method="post">
                    <?php foreach ($loggedinuser as $user) { ?>
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Personal Details</span>
                                <input type="hidden" name="bb_id" value="<?= $user->bb_id; ?>">
                                <div class="fields">
                                    <div class="input_field">
                                        <label>Blood Bank Name</label>
                                        <input type="text" name="bb_name" value="<?= $user->bb_name; ?> " placeholder="Enter your blood bank name" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Username</label>
                                        <input type="text"  name="bb_username" value="<?= $user->bb_username; ?>"placeholder="Enter your username" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Contact Number</label>
                                        <input type="text" maxlength="10" name="bb_phoneno" value="<?= $user->bb_phoneno; ?>" placeholder="Enter the blood bank contact number" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Address</label>
                                        <input type="text" name="bb_address" value=" <?= $user->bb_address; ?>" placeholder="Enter the blood bank address" required>
                                    </div>
                                     
                                    <div class="input_field">
                                        <label>Description</label>
                                        <input type="text" name="bb_description" value=" <?= $user->bb_description; ?>" placeholder="Enter the blood bank description" required>
                                    </div>
                                </div>
                                <input class="submit button" type="submit" name="edit-basic" value="Update Details">
                            </div>
                        </div>
                         <?php 
                         } ?>
                </form>
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
                                     <input type="text" name="bb_email" placeholder="Enter your e-mail" required>
                                 </div>

                                 <div class="input_field">
                                     <label>Password</label>
                                     <input type="password" name="bb_password" placeholder="Enter your password" required>
                                 </div>
                                 <div class="input_field">
                                     <label>Password</label>
                                     <input type="password" name="bb_password" placeholder="ReEnter your password" required>
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