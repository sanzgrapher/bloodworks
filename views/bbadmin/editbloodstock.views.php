<?php
    include_once 'views/header.php';


    ?>



 <main class="dash-container">
     <section class="dashboard_container">
         <?php include_once 'asidemenu.php'; ?>
         <div class="info ">
         <div class="container">
                <div class="heading">
                    Blood Stocks
                </div>
                <form action="edit" method="post">
                    <?php foreach ($loggedinuser as $user) { ?>
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Blood Stock Details</span>
                                <input type="hidden" name="bb_id" value="<?= $user->bb_id; ?>">
                                <div class="fields">
                                    <div class="input_field">
                                        <label>A Positive</label>
                                        <input type="text" name="bb_name" value="<?= $user->bb_name; ?> " placeholder="Enter the quantity of A positive bloodstocks" required>
                                    </div>
                                    <div class="input_field">
                                        <label>A Negative</label>
                                        <input type="text" name="bb_name" value="<?= $user->bb_name; ?> " placeholder="Enter the quantity of A negative bloodstocks" required>
                                    </div>

                                    <div class="input_field">
                                        <label>B Positive</label>
                                        <input type="text" name="bb_name" value="<?= $user->bb_name; ?> " placeholder="Enter the quantity of B positive bloodstocks" required>
                                    </div>
                                    <div class="input_field">
                                        <label>B Negative</label>
                                        <input type="text" name="bb_name" value="<?= $user->bb_name; ?> " placeholder="Enter the quantity of B negative bloodstocks" required>
                                    </div>

                                    <div class="input_field">
                                        <label>AB Positive</label>
                                        <input type="text" name="bb_name" value="<?= $user->bb_name; ?> " placeholder="Enter the quantity of AB positive bloodstocks" required>
                                    </div>
                                    <div class="input_field">
                                        <label>AB Negative</label>
                                        <input type="text" name="bb_name" value="<?= $user->bb_name; ?> " placeholder="Enter the quantity of AB negative bloodstocks" required>
                                    </div>

                                    <div class="input_field">
                                        <label>O Positive</label>
                                        <input type="text" name="bb_name" value="<?= $user->bb_name; ?> " placeholder="Enter the quantity of O positive bloodstocks" required>
                                    </div>
                                    <div class="input_field">
                                        <label>O Negative</label>
                                        <input type="text" name="bb_name" value="<?= $user->bb_name; ?> " placeholder="Enter the quantity of O negative bloodstocks" required>
                                    </div>
                                </div>
                                <input class="submit button" type="submit" name="edit-basic" value="Update Details">
                            </div>
                        </div> <?php } ?>
                </form>
            </div>
         </div>
     </section>
 </main>
 <?php include 'views/footer.php' ?>