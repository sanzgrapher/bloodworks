<?php include "header.php"; ?>
<?php if (empty($eventData)) {
    echo "No Event available";
} else {
    $eventData = $eventData[0];

?>
    <div class="main-event-container info">
        <div class="main-sub-event-container">
            <div class="event-title-container">
                <h2 class="event-info"><?= $eventData->event_name ?></h2>
            </div>
            <div class="event-information">
                <div class="event-info-container">
                    <div class="event-img">
                        <h2 class="event-info"><?= $eventData->event_name ?></h2>
                    </div>
                    <div class="event-info">
                        <img src="https://dummyimage.com/640x4:3/" alt="img 600x400">
                    </div>

                    <div class="event-info">
                        <h3>Event's Description</h3>
                        <br>
                        <p><?= $eventData->event_desc ?></p>
                    </div>
                </div>
                <div class="event-detail-container">
                    <div class="en-info">
                        <h3>Organized By : </h3>
                        <p><i class="fa-solid fa-user"></i> <?= $eventData->organizer ?></p>
                    </div>
                    <div class="en-info">
                        <h3>Date & Time : </h3>
                        <p><i class="fa-regular fa-calendar-days"></i> Date : <?= $eventData->event_date ?></p>
                        <p><i class="fa-regular fa-clock"></i> Time : </p>
                    </div>
                    <div class="en-info">
                        <h3>Location : </h3>
                        <p><i class="fa-solid fa-location-dot"></i> Address : <?= $eventData->event_location ?></p>
                    </div>
                    <div class="en-info">
                        <h3>Contact Number : </h3>
                        <p><i class="fa-solid fa-phone"></i> <?= $eventData->contact_info ?></p>
                    </div>
                    <div class="en-info-btn">
                        <?php
                        if (isset($_SESSION['u-type'])) {
                            if ($userAvaiability == "Available") {
                                if ($isCheckIn != "1") { ?>
                                    <form method="POST" action="<?= $eventData->event_id ?>">




                                        <label class="switch">
                                            <input onchange="toggleValue()" type="checkbox" name="eventCheckIn" <?php // ($isCheckIn == "true" ? "checked" : ""); 
                                                                                                                ?>>
                                            <span class="slider round"></span>

                                        </label>

                                        <input class="btn btn-primary" type="submit" name="eventCheckIn-btn" value="Submit">

                                    </form>
                                <?php } else {
                                ?>

                                    <div class="alert alert-info w-100" role="alert">
                                        You have already checked in !
                                    </div>
                                <?php
                                }
                            } else {
                                ?>

                                <div class="alert alert-info w-100" role="alert">
                                    You are not available to donate blood
                                </div>
                            <?php

                            }
                        } else {
                            ?>

                            <div class="alert alert-info w-100" role="alert">
                                Please login to check in
                            </div>
                        <?php

                        }




                        ?>


                    <?php

                }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include "footer.php"; ?>