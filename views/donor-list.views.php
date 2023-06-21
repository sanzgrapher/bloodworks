<?php
 
include "header.php" ?>
<?php

// $donorlist = new Model;
// $donorlist->table = "user";
// $data = [
//     "donor_availability" => "Available"
// ];
// $donor_list = $donorlist->where($data);


// show($donor_list);
 
?>
<?php
// count no of rows 
// $count = count($donor_list);
// echo $count;

?>
<h1>donor list</h1>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
 
<table>
    <tr>
        <th>Name</th>
        <th>Bloodgroup</th>
        <th>Contact</th>
    </tr>
    <?php if (empty($donor_list)) {
        echo "No donor available";
    } else {
        foreach ($donor_list as $donor) { ?>
            <tr>
                <td><?= $donor->fname . " " . $donor->mname . " " . $donor->lname; ?></td>
                <td><?= $donor->bloodgroup; ?></td>
                <td>Contach Btn</td>
            </tr>
    <?php
        }
    }
    ?>

</table>





<?php include "footer.php" ?>