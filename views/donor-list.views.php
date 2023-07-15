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
                        <th>sn</th>
                        <th>Name</th>
                        <th>Bloodgroup</th>
                        <th>Address</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <?php if (empty($donors)) {
                    echo "No donor available";
                } else {
                    foreach ($donors as $donor) { ?>
                        <tr>
                            <td><?= ++$sn ?></td>
                            <td><?= $donor->fname . " " . $donor->mname . " " . $donor->lname; ?></td>
                            <td><?= $donor->bloodgroup; ?></td>
                            <td><?= $donor->address; ?></td>
                            <td><a title="Here this button will open a form modal to send email with required data" href="#">Contach Now</a></td>
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