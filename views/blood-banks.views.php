<?php require "header.php";
// show($data);
?>
<main class="container-xxl">
    <div class="table-section">
        <h2 class="table-sec-title fw-bold display-5">Available Bloodbanks</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti excepturi harum accusantium ducimus vero ipsa dolore sint praesentium veritatis hic sapiente, nemo vitae perferendis quis inventore numquam quo totam reiciendis?</p>

        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">Name
                    </th>
                    <th class="th-sm">Position
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                <?php if (empty($bloodbanklist)) {
                    echo "No donor available";
                } else {
                    foreach ($bloodbanklist as $bloodbank) { ?>
                        <tr>
                            <td><?= $bloodbank->bb_id . " " . $bloodbank->bb_name; ?></td>
                            <td><?= $bloodbank->bb_email; ?></td>
                            <!-- <td>Contach Btn</td> -->
                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>

        </table>

    </div>

</main>
<?php require "footer.php"; ?>