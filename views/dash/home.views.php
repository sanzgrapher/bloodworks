<?php
include_once 'views/header.php';
?>

<main class="dash-container">
    <section class="dashboard_container">
        <?php include "asidemenu.php" ?>




        <div class="info ">
            <div class="bank-card-list">
                <div class="bank-card">
                    <!-- <i class="fa-solid fa-users-line"></i> -->
                    <i class="fa-solid fa-user"></i>
                    <div class="card-data">
                        <a href="#">Total Blood Donated</a>
                        <p><?= $stats['totalDonated'] . " Units"  ?></p>
                    </div>

                </div>
                <div class="bank-card">
                    <!-- <i class="fa-solid fa-users-line"></i> -->
                    <i class="fa-solid fa-user"></i>
                    <div class="card-data">
                        <a href="#">Total Events Checkin</a>
                        <p><?= $stats['totalEvents'] . " Events" ?></p>
                    </div>

                </div>
                <div class="bank-card">
                    <i class="fa-solid fa-house-medical"></i>
                    <div class="card-data">
                        <a href="#">Total P2P Donations</a>
                        <p><?= $stats['totalp2p'] . " Events" ?></p>
                    </div>
                </div>
               

            </div>
            <div class="container">
                <div class="heading">
                    User Dashboard
                </div>
                <?php foreach ($loggedinuser as $user) { ?>

                    <div class="userdetails">
                        <div class="detail-item">
                            <span class="text-primary">Name :</span> <?= $user->fname . " " . $user->mname . " " . $user->lname ?>
                        </div>
                        <div class="detail-item">
                            <span class="text-primary">Username :</span> <?= $user->username ?>
                        </div>
                        <div class="detail-item">
                            <span class="text-primary">Email :</span> <?= $user->email ?>
                        </div>
                        <div class="detail-item">
                            <span class="text-primary">Address :</span> <?= $user->address ?>
                        </div>
                        <div class="detail-item">
                            <span class="text-primary">Age :</span> <?= $user->age ?>
                        </div>

                    </div>
                <?php } ?>



            </div>
            <div class="container">
                <div class="heading">
                    Blood Requests To You
                </div>


                <div class="table-section">
                    <h3>Blood Requested To You </h3>
                    <div style="overflow-x:auto;">

                        <?php if (empty($requestedTo)) {
                            echo "You dont have any active p2p donation requests";
                        } else { ?>
                            <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing=" 0" width="100%">
                                <thead>
                                    <tr>


                                        <th>Request Description</th>
                                        <th>Transaction Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <?php


                                foreach ($requestedTo as $request) { ?>
                                    <tr>

                                        <td><?= $request->req_description  ?></td>
                                        <td><?= $request->transaction_status; ?></td>

                                        <td>
                                            <?php if ($request->transaction_status != "completed") { ?>
                                                Contact to Patient
                                            <?php
                                            } else { ?>
                                                This Transaction is completed
                                            <?php } ?>
                                        </td>


                                    </tr>
                                <?php
                                }
                                ?>

                            </table>
                        <?php
                        }
                        ?>
                    </div>
                </div>




            </div>


        </div>



    </section>
</main>




<?php include_once 'views/footer.php' ?>