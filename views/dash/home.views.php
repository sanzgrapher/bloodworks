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
                <div class="table-section">
                    <h3>Your Request List</h3>
                    <div style="overflow-x:auto;">


                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing=" 0" width="100%">
                            <thead>
                                <tr>


                                    <th>req_description</th>
                                    <th>transaction_status</th>
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

                                        <td>btn</td>


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