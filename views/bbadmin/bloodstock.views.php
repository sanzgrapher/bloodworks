<?php
include_once 'views/header.php';


?>

<main class="dash-container">
    <section class="dashboard_container">
        <?php include_once 'asidemenu.php'; ?>
        <div class="info">
            <div class="container">
                <div class="heading">
                    Blood Bank's Blood Stocks
                </div>

                <div class="table-section" style="margin: 0 auto;">
                    <div style="overflow-x:auto;">
                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Blood Type</th>
                                    <th>Blood Unit Avaiable</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A+</td>
                                    <td><?= $bloodstock->a_pos; ?></td>
                                </tr>
                                <tr>
                                    <td>A-</td>
                                    <td><?= $bloodstock->a_neg; ?></td>
                                </tr>
                                <tr>
                                    <td>B+</td>
                                    <td><?= $bloodstock->b_pos; ?></td>
                                </tr>
                                <tr>
                                    <td>B-</td>
                                    <td><?= $bloodstock->b_neg; ?></td>
                                </tr>
                                <tr>
                                    <td>AB+</td>
                                    <td><?= $bloodstock->ab_pos; ?></td>
                                </tr>
                                <tr>
                                    <td>AB-</td>
                                    <td><?= $bloodstock->ab_neg; ?></td>
                                </tr>
                                <tr>
                                    <td>O+</td>
                                    <td><?= $bloodstock->o_pos; ?></td>
                                </tr>
                                <tr>
                                    <td>O-</td>
                                    <td><?= $bloodstock->o_neg; ?></td>
                                </tr>
                            </tbody>





                        </table>
                    </div>
                </div>
            </div>


            <div class="container">





                <form action="bloodstock" method="post">

                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Blood Stock Details</span>
                            <input type="hidden" name="bb_id" value="<?= $bloodstock->bb_id; ?>">
                            <div class="fields">
                                <div class="input_field">
                                    <label>A Positive</label>
                                    <input type="number" name="a_pos" value="<?= $bloodstock->a_pos; ?>" placeholder="Enter the quantity of A positive bloodstocks" required>
                                </div>
                                <div class="input_field">
                                    <label>A Negative</label>
                                    <input type="number" name="a_neg" value="<?= $bloodstock->a_neg; ?>" placeholder="Enter the quantity of A negative bloodstocks" required>
                                </div>

                                <div class="input_field">
                                    <label>B Positive</label>
                                    <input type="number" name="b_pos" value="<?= $bloodstock->b_pos ?>" placeholder="Enter the quantity of B positive bloodstocks" required>
                                </div>
                                <div class="input_field">
                                    <label>B Negative</label>
                                    <input type="number" name="b_neg" value="<?= $bloodstock->b_neg ?>" placeholder="Enter the quantity of B negative bloodstocks" required>
                                </div>

                                <div class="input_field">
                                    <label>AB Positive</label>
                                    <input type="number" name="ab_pos" value="<?= $bloodstock->ab_pos ?>" placeholder="Enter the quantity of AB positive bloodstocks" required>
                                </div>
                                <div class="input_field">
                                    <label>AB Negative</label>
                                    <input type="number" name="ab_neg" value="<?= $bloodstock->ab_neg ?>" placeholder="Enter the quantity of AB negative bloodstocks" required>
                                </div>

                                <div class="input_field">
                                    <label>O Positive</label>
                                    <input type="number" name="o_pos" value="<?= $bloodstock->o_pos ?>" placeholder="Enter the quantity of O positive bloodstocks" required>
                                </div>
                                <div class="input_field">
                                    <label>O Negative</label>
                                    <input type="number" name="o_neg" value="<?= $bloodstock->o_neg ?>" placeholder="Enter the quantity of O negative bloodstocks" required>
                                </div>
                            </div>
                            <input class="submit button" type="submit" name="updatebloodstock" value="Update Details">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'views/footer.php' ?>