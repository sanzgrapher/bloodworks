<?php
$sn = 0;
// show($data); 
?>


<?php include "header.php"; ?>




<main class="container-xxl">

    <div class="table-section">
        <h1 class="table-sec-title fw-bold display-5">Available donors</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti excepturi harum accusantium ducimus vero ipsa dolore sint praesentium veritatis hic sapiente, nemo vitae perferendis quis inventore numquam quo totam reiciendis?</p>
        <div style="overflow-x:auto;">


            <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing=" 0" width="100%">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>Bloodgroup</th>
                        <th>Address</th>
                        <!-- <th>Contact Number</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <?php if (empty($donors)) {
                    echo "No donor available";
                } else {
                    foreach ($donors as $donor) { ?>
                        <tr>

                            <td><?= $donor->fname . " " . $donor->mname . " " . $donor->lname; ?></td>
                            <td><?= $donor->bloodgroup; ?></td>
                            <td><?= $donor->address; ?></td>
                            <!-- <td><?= isset($donor->phone_no) ? $donor->phone_no : 'N/A'; ?></td> -->


                            <td>
                                <form action="donorlist" method="POST">
                                    <input class="submit button" type="submit" name="sendmail" value="Send For Approval">

                                    <!-- <input value="sendemail" type="submit" class="btn btn-primary"> -->
                                </form>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>

            </table>
        </div>
    </div>



</main>






<?php include "footer.php" ?>