<?php include "header.php"; ?>

<main style="margin-top: 5%;" class="container-xxl">
    <h1>Single event detail</h1>
    <?php if (empty($eventData)) {
        echo "No Event available";
    } else {
        $eventData = $eventData[0];

    ?>
        <div class="main-test-box">
            <div class="testbox">
                <h2>Event Basic Details</h2>
                <ul>
                    <li><strong>Event Image :</strong> n/a</li>
                    <li><strong>Event Name :</strong> <?= $eventData->event_name ?></li>
                    <li><strong>Event event_locaaton : </strong><?= $eventData->event_location ?></li>
                    <li><strong>Event event_desc :</strong> <?= $eventData->event_desc ?></li>
                    <li><strong>Event Organizer : </strong><?= $eventData->organizer ?></li>
                    <li><strong>Event Contact : </strong><?= $eventData->contact_info ?></li>
                    <li><strong>Event Data : </strong><?= $eventData->event_date ?></li>
                </ul>
            </div>

        </div>
    <?php

    }
    ?>


    <form method="POST" action="edit">




        <label class="switch">
            <input onchange="toggleValue()" type="checkbox" name="eventCheckIn" <?= (false == "Available" ? "checked" : ""); ?>>
            <span class="slider round"></span>

        </label>
        <input class="btn btn-primary" type="submit" name="eventCheckIn-btn" value="Submit">




    </form>




</main>
<?php include "footer.php"; ?>