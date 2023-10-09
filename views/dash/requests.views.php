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
                    <h3>Your Request List</h3>
                    <div style="overflow-x:auto;">


                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing=" 0" width="100%">
                            <thead>
                                <tr>


                                    <th>Request Description</th>
                                    <th>Transaction Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <?php if (empty($requests)) {
                                echo "No event available";
                            } else {
                                foreach ($requests as $request) { ?>
                                    <tr>

                                        <td><?= $request->req_description  ?></td>
                                        <td><?= $request->transaction_status; ?></td>

                                        <td>
                                            <?php if ($request->transaction_status == "pending") { ?>
                                                <form action="<?= HOSTNAME . "dash/requests" ?>" method="post">
                                                    <input type="hidden" name="req_id" value="<?= $request->req_id ?>">
                                                    <button type="submit" class="btn btn-success p-2" name="complete">Completed</button>
                                                </form>
                                                <br>
                                                <form action="<?= HOSTNAME . "dash/requests" ?>" method="post">
                                                    <input type="hidden" name="req_id" value="<?= $request->req_id ?>">
                                                    <button type="submit" class="btn btn-danger p-2" name="cancelled">Cancelled</button>
                                                </form>
                                            <?php
                                            } elseif ($request->transaction_status == "cancelled") { ?>
                                                This Transaction is cancelled
                                            <?php } else { ?>
                                                This Transaction is completed
                                            <?php } ?>

                                        </td>


                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </table>
                    </div>
                </div>



            </div>



        </div>
    </section>
</main>




<?php include_once 'views/footer.php' ?>