<?php
 $sn = 0;
// show($data); ?>


<?php include "header.php"  ;?>
 
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
        <th>sn</th>
        <th>Name</th>
        <th>Bloodgroup</th>
        <th>Address</th>
        <th>Contact</th>
    </tr>
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






<?php include "footer.php" ?>