<?php
include_once 'views/header.php';
?>

<main class="dash-container">
    <section class="dashboard_container">
        <?php include "asidemenu.php" ?>
        <div class="info ">
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
                    User Dashboard
                </div>
                <!-- <div class="table-section">
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
                                            <?php if($request->transaction_status != "completed" ){ ?>
                                            <form action="<?=HOSTNAME."dash" ?>" method="post">
                                                <input type="hidden" name="req_id" value="<?= $request->req_id ?>">
                                                <button type="submit" class="btn btn-success" name="complete">Completed</button>
                                            </form>
                                            <?php
                                            }else{ ?>
                                               This Transaction is completed
                                            <?php }?>
                                        </td>


                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </table>
                    </div>
                </div> -->




            </div>


        </div>



    </section>
</main>




<?php include_once 'views/footer.php' ?>