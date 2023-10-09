<?php require "header.php";
// show($data);
?>
<main class="container-xxl top-gap">
    <div class="table-section">
    <div class="list-head">
        <h2 class="table-sec-title fw-bold display-5">List of Bloodbanks</h2>
        <p class="evnt-info">Browse through our listings, find the nearest blood bank, and connect with them for all your blood-related needs. Your journey to making a life-saving difference starts right here with our Blood Bank Directory.</p>    
    </div>    
        <a class="btn btn-danger rounded float-right d-inline-block" href="<?= HOSTNAME ?>addbloodbank">Add Blood Bank</a>
        <div style="overflow-x:auto;" class="tb-cont">
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


                                <td><a href="<?= ROOT ?>/bloodbank/<?= $bloodbank->bb_id; ?>"><?= $bloodbank->bb_name; ?></a></td>

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