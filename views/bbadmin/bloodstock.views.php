<?php
include_once 'views/header.php';


?>

<main class="dash-container">
    <section class="dashboard_container">
        <?php include_once 'asidemenu.php'; ?>
        <div class="info ">
            <div class="container">
                <div class="heading">
                    Blood Bank's Blood Stocks
                </div>

                <div class="table-section">
                    <div style="overflow-x:auto;">
                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">A +
                                    </th>
                                    <th class="th-sm">A -
                                    </th>
                                    <th class="th-sm">B +
                                    </th>
                                    <th class="th-sm">B -
                                    </th>
                                    <th class="th-sm">AB +
                                    </th>
                                    <th class="th-sm">AB -
                                    </th>
                                    <th class="th-sm">0 +
                                    </th>
                                    <th class="th-sm">0 -
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                
                                 
                                    <td><?= $bloodstock->a_pos; ?></td>
                                    <td><?= $bloodstock->a_neg; ?></td>
                                    <td><?= $bloodstock->b_pos; ?></td>
                                    <td><?= $bloodstock->b_neg; ?></td>
                                    <td><?= $bloodstock->ab_pos; ?></td>
                                    <td><?= $bloodstock->ab_neg; ?></td>
                                    <td><?= $bloodstock->o_pos; ?></td>
                                    <td><?= $bloodstock->o_neg; ?></td>
                                   

                                  
                                </tr>
                                <?php
                                //     }
                                // }
                                ?>

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
                            <input class="submit button" type="submit" name="updatebloodstock" value="Update Details">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'views/footer.php' ?>