<?php require "header.php";
// show($data);
?>


<h1>bLOODBANKS</h1>
Here will be list of bloodbanks
and a btn to add bloodbank

<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<table >
  
    <tr>
        <th>Name</th>
        <!-- <th>Bloodgroup</th>-->
        <th>Contact</th>
    </tr>
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

</table>



<?php require "footer.php"; ?>