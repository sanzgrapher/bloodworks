<?php
include_once 'views/header.php';

?>

<main class="dash-container">
    <section class="dashboard_container">
        <?php include_once 'asidemenu.php'; ?>
        <div class="info ">
            <div class="container">
                <div class="heading">
                    List of Blood Requests
                </div>

                <div class="table-section">
                    <div style="overflow-x:auto;">
                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">Name
                                    </th>
                                    <th class="th-sm">Blood Group
                                    </th>
                                    <th class="th-sm">Blood Units
                                    </th>
                                    <th class="th-sm">Contact
                                    </th>
                                    <th class="th-sm">Address
                                    </th>
                                    <th class="th-sm">Urgency
                                    </th>
                                    <th class="th-sm">Required Before
                                    </th>
                                    <th class="th-sm">Receive
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($bloodrequests)) {
                                    echo "No Requests available";
                                } else {
                                    foreach ($bloodrequests as $bloodrequest) { ?>
                                        <tr>
                                            <td><?= $bloodrequest->fname; ?><?= $bloodrequest->mname; ?><?= $bloodrequest->lname; ?></td>
                                            <td>
                                                <?= $bloodrequest->bloodgroup ?>
                                            </td>
                                            <td>
                                                <?= $bloodrequest->bloodunits ?>
                                            </td>
                                            <td>
                                                <?= $bloodrequest->phone_no ?>
                                            </td>
                                            <td>
                                                <?= $bloodrequest->address ?>
                                            </td>
                                            <td>
                                                <?= $$bloodrequest->urgency ?>
                                            </td>
                                            <td>
                                                <?= $bloodrequest->required_date ?>
                                            </td>
                                            <td>
                                                <?= $$bloodrequest->reason ?>
                                            </td>
                                            <td>
                                                <form  method="post">
                                                    <input type="hidden" name="bb_id" value="<?= $bloodrequest->bb_id ?>">
                                                    <button type="submit" class="btn btn-success" name="approve">Approve</button>
                                                </form>

                                                <form  method="post">
                                                    <input type="hidden" name="bb_id" value="<?= $bloodrequest->bb_id ?>">
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