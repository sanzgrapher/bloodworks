<?php // include "header.php"; 
?>

<main style="margin-top: 5%;" class="container-xxl">
    <h1>Single Blood Bank Page</h1>
    <?php if (empty($bbData)) {
        echo "No donor available";
    } else {
        $bbData = $bbData[0];

    ?>
    <div class="main-test-box">
        <div class="testbox">
            <h2>BB Basic Details</h2>
            <ul>
                <li><strong>BB Image :</strong> n/a</li>
                <li><strong>BB Name :</strong> <?= $bbData->bb_name ?></li>
                <li><strong>BB Description : </strong><?= $bbData->bb_description ?></li>
                <li><strong>BB Address :</strong> <?= $bbData->bb_address ?></li>
                <li><strong>BB Email : </strong><?= $bbData->bb_email ?></li>
                <li><strong>BB Contact : </strong><?= $bbData->bb_phoneno ?></li>
            </ul>
        </div>
        <div class="testbox">
            <h2>BB Events</h2>
            <ul>
                <li>Event Table</li>
                <li>Event 1</li>
                <li>Event 2</li>
                <li>Event 3</li>
                <li>Event 4</li>
                <li>Event 5</li>
        
            </ul>
        </div>
        <div class="testbox">
            <h2>BB Blood Stocks</h2>
            <ul>
                <li>Blood stok  Table</li>
                <li>Blood group = in stock quantity</li>
        
            </ul>
        </div>
        </div>
    <?php

    }
    ?>

</main>
<?php // include "footer.php"; 
?>