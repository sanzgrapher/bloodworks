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
                    <?php foreach ($bloodstock as $bloodstock) { ?>
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Blood Stock Details</span>
                                <input type="text" name="bb_id" value="<?= $bloodstock->bb_id; ?>">
                                <div class="fields">
                                    <div class="input_field">
                                        <label>A Positive</label>
                                        <input type="text" name="a_pos" value="<?= $bloodstock->a_pos; ?> " placeholder="Enter the quantity of A positive bloodstocks" required>
                                    </div>
                                    <div class="input_field">
                                        <label>A Negative</label>
                                        <input type="text" name="a_neg" value="<?= $bloodstock->a_neg; ?> " placeholder="Enter the quantity of A negative bloodstocks" required>
                                    </div>

                                    <div class="input_field">
                                        <label>B Positive</label>
                                        <input type="text" name="b_pos" value="<?= $bloodstock->b_pos ?> " placeholder="Enter the quantity of B positive bloodstocks" required>
                                    </div>
                                    <div class="input_field">
                                        <label>B Negative</label>
                                        <input type="text" name="b_neg" value="<?= $bloodstock->b_neg ?> " placeholder="Enter the quantity of B negative bloodstocks" required>
                                    </div>

                                    <div class="input_field">
                                        <label>AB Positive</label>
                                        <input type="text" name="ab_pos" value="<?= $bloodstock->ab_pos ?> " placeholder="Enter the quantity of AB positive bloodstocks" required>
                                    </div>
                                    <div class="input_field">
                                        <label>AB Negative</label>
                                        <input type="text" name="ab_neg" value="<?= $bloodstock->ab_neg ?> " placeholder="Enter the quantity of AB negative bloodstocks" required>
                                    </div>

                                    <div class="input_field">
                                        <label>O Positive</label>
                                        <input type="text" name="o_pos" value="<?= $bloodstock->o_pos ?> " placeholder="Enter the quantity of O positive bloodstocks" required>
                                    </div>
                                    <div class="input_field">
                                        <label>O Negative</label>
                                        <input type="text" name="o_neg" value="<?= $bloodstock->o_neg ?> " placeholder="Enter the quantity of O negative bloodstocks" required>
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