<?php include "header.php"; ?>
<?php // show($data) 
?>

<?php
if (empty($bbData)) {
    echo "No event available";
} else {
    foreach ($bbData as $bData) {
        // show($bData);
?>


        <section class="bb-profile-container top-gap">
            <div class="bb-profile ">
                <div class="profile-name-container">

                    <div class="title-con">
                        <img src="https://resources.premierleague.com/premierleague/badges/rb/t43.svg" alt="" class="profile-img1">
                        <div class="title-contain">
                            <h3><?= $bData->bb_name ?></h3>
                            <h4><?= $bData->bb_address ?></h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-main-container">
                <div class="tab-container">
                    <div class="topnav" id="myTopnav1">
                        <div class="tab">
                            <a href="#"><button class="tablinks active" onclick="openTab(event, 'Overview')">Overview</button></a>
                            <a href="#"><button class="tablinks" onclick="openTab(event, 'Events')" id="defaultOpen">Events</button></a>
                            <a href="#"><button class="tablinks" onclick="openTab(event,'Stocks')">Stocks</button></a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>


                    <div id="Overview" class="tabcontent" style="display:block">
                        <div class="container">
                            <h1 class="table-sec-title fw-bold display-5">
                                Blood Bank's Details
                            </h1>
                            <h2>About Blodd Bank</h2>
                            <p>
                                <?= $bData->bb_description ?>
                                <br>
                            <h2>Address</h2>
                            <p><?= $bData->bb_address ?></p>
                            <h2>Contact</h2>
                            <p><?= $bData->bb_phoneno ?>
                            <h2>Email</h2>
                            <p><?= $bData->bb_email ?>

                            </p>



                        </div>
                    </div>


                    <div id="Events" class="tabcontent">
                        <div class="container">
                            <h1 class="table-sec-title fw-bold display-5">Available events</h1>
                            <div class="table-section">
                                <div>
                                    <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing=" 0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Name</th>
                                                <th>Event Location</th>
                                                <th>Organizers</th>
                                                <th>Contact</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php $sn = 0;
                                        if (empty($events)) {
                                            echo "No event available";
                                        } else {
                                            foreach ($events as $event) { ?>
                                                <tr>
                                                    <td><?= ++$sn ?></td>
                                                    <td><?= $event->event_name ?></td>
                                                    <td><?= $event->event_location; ?></td>
                                                    <td><?= $event->organizer; ?></td>
                                                    <td><?= $event->contact_info; ?></td>


                                                    <td><a class="btn btn-danger" href="/event/<?= $event->event_id ?>">View Evemt</a></td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="Stocks" class="tabcontent">
                        <div class="container">
                            <h1 class="table-sec-title fw-bold display-5">
                                Blood Bank's Blood Stocks
                            </h1>

                            <div class="table-section" style="width: 50%;margin: 0 auto;">
                                <div style="overflow-x:auto;">
                                    <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Blood Type</th>
                                                <th>Blood Unit Avaiable</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>A+</td>
                                                <td><?= $bloodstock->a_pos; ?></td>
                                            </tr>
                                            <tr>
                                                <td>A-</td>
                                                <td><?= $bloodstock->a_neg; ?></td>
                                            </tr>
                                            <tr>
                                                <td>B+</td>
                                                <td><?= $bloodstock->b_pos; ?></td>
                                            </tr>
                                            <tr>
                                                <td>B-</td>
                                                <td><?= $bloodstock->b_neg; ?></td>
                                            </tr>
                                            <tr>
                                                <td>AB+</td>
                                                <td><?= $bloodstock->ab_pos; ?></td>
                                            </tr>
                                            <tr>
                                                <td>AB-</td>
                                                <td><?= $bloodstock->ab_neg; ?></td>
                                            </tr>
                                            <tr>
                                                <td>O+</td>
                                                <td><?= $bloodstock->o_pos; ?></td>
                                            </tr>
                                            <tr>
                                                <td>O-</td>
                                                <td><?= $bloodstock->o_neg; ?></td>
                                            </tr>
                                        </tbody>





                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
<?php
    }
} ?>


<script>
    function openTab(evt, TabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(TabName).style.display = "block";
        evt.currentTarget.className += " active";
    }



    function myFunction1() {
        var x = document.getElementById("myTopnav1");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
<?php include "footer.php";
?>