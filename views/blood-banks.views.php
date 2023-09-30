<?php require "header.php";
// show($data);
?>
<main class="container-xxl">
    <div class="table-section">
        <h2 class="table-sec-title fw-bold display-5">Available Bloodbanks</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti excepturi harum accusantium ducimus vero ipsa dolore sint praesentium veritatis hic sapiente, nemo vitae perferendis quis inventore numquam quo totam reiciendis?</p>
        <a class="btn btn-danger rounded float-right d-inline-block" href="<?= HOSTNAME ?>addbloodbank">Add Blood Bank</a>
        <div style="overflow-x:auto;">
            <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Name
                        </th>
                        <th class="th-sm">Email
                        </th>
                        <th class="th-sm">Address
                        </th>
                        <th class="th-sm">Contact
                        </th>
                        <!-- <th class="th-sm">View
                        </th> -->


                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($bloodbanklist)) {
                        echo "No donor available";
                    } else {
                        foreach ($bloodbanklist as $bloodbank) { ?>
                            <tr>

                                
                                <td><a  href="<?= ROOT ?>/bloodbank/<?= $bloodbank->bb_id;?>"><?= $bloodbank->bb_name; ?></a></td>

                                <td><?= $bloodbank->bb_email; ?></td>
                                <td><?= $bloodbank->bb_address; ?></td>
                                <td><?= $bloodbank->bb_phoneno; ?></td>
                                <!-- <td><a class="link-info" href="#">View</a></td> -->
                            </tr>
                    <?php
                        }
                    }
                    ?>

                </tbody>

            </table>

        </div>
    </div>

</main>
<?php require "footer.php"; ?>