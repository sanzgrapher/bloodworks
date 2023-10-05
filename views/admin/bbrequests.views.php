<?php
include_once 'views/header.php';

?>

<main class="dash-container">
    <section class="dashboard_container">
        <?php include_once 'asidemenu.php'; ?>
        <div class="info ">
            <div class="container">
                <div class="heading">
                    Avaiable Blood bank requests
                </div>

                <div class="table-section">
                    <div style="overflow-x:auto;">
                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">Name
                                    </th>
                                    <th class="th-sm">Description
                                    </th>
                                    <th class="th-sm">View
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($bloodbanks)) {
                                    echo "No Requests available";
                                } else {
                                    foreach ($bloodbanks as $bloodbank) { ?>
                                        <tr>
                                            <td><?= $bloodbank->bb_name; ?></td>
                                            <td style="text-align:left;">
                                                Email = <?= $bloodbank->bb_email ?> <br>
                                                Phone no :<?= $bloodbank->bb_phoneno; ?> <br>
                                                Address :<?= $bloodbank->bb_address; ?> <br>
                                                Description :<?= $bloodbank->bb_description; ?> <br>
                                            </td>
                                            <td>
                                                <form action="bbrequests" method="post">
                                                    <input type="hidden" name="bb_id" value="<?= $bloodbank->bb_id ?>">
                                                    <button type="submit" class="btn btn-success" name="approve">Approve</button>
                                                </form>
                                                <br>

                                                <form action="bbrequests" method="post">
                                                    <input type="hidden" name="bb_id" value="<?= $bloodbank->bb_id ?>">
                                                    <button type="submit" class="btn btn-danger" name="reject">Decline</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                            </tbody>

                        </table>

                    </div>
                </div>



            </div>



        </div>
    </section>
</main>




<?php include_once 'views/footer.php' ?>