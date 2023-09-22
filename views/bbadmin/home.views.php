<?php
include_once 'views/header.php';


?>



<main class="dash-container">
    <section class="dashboard_container">
        <?php include_once 'asidemenu.php'; ?>


        <div class="info ">
            <div class="container">
                <div class="heading">
                    Blood Bank Home admin
                </div>
                <?php foreach ($loggedinuser as $user) { ?>

                    <div class="userdetails">
                        <div class="detail-item">
                            <span class="text-primary">Name :</span> <?= $user->bb_name ?>
                        </div>
                        <div class="detail-item">
                            <span class="text-primary">Email :</span> <?= $user->bb_email ?>
                        </div>
                        <div class="detail-item">
                            <span class="text-primary">Username :</span> <?= $user->bb_username ?>
                        </div>
                        <div class="detail-item">
                            <span class="text-primary">Address :</span> <?= $user->bb_address ?>
                        </div>
                        <div class="detail-item">
                            <span class="text-primary">Phone No :</span> <?= $user->bb_phoneno ?>
                        </div>

                        <div class="detail-item">
                            <span class="text-primary">Description :</span> <?= $user->bb_description ?>
                        </div>

                    </div>
                <?php } ?>
            </div>

            <div class="container">
                <div class="heading">
                    User Requests For Blood
                </div>
                <!-- <div class="bank-card-list">
                    <div class="bank-card">
                        <a>Events</a>
                        <p><?php //$totalevents 
                            ?></p>
                    </div>
                </div> -->
                <div class="table-section">
                    <h3>Your Request List</h3>
                    <div style="overflow-x:auto;">


                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing=" 0" width="100%">
                            <thead>
                                <tr>


                                    <th>Request Description</th>

                                    <th>Status</th>

                                </tr>
                            </thead>
                            <?php if (empty($requests)) {
                                echo "No event available";
                            } else {
                                foreach ($requests as $request) { ?>
                                    <tr>

                                        <td><?= $request->req_description  ?></td>


                                        <td>
                                            <?php if ($request->transaction_status != "completed") { ?>
                                                <span class="badge rounded-pill text-bg-warning">Not Completed Contact Now</span>

                                            <?php
                                            } else { ?>



                                                <span class="badge rounded-pill text-bg-success"> This Transaction is completed</span>

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
        </div>

    </section>
</main>
<?php include 'views/footer.php' ?>