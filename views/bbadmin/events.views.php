 <?php
    include_once 'views/header.php';


    ?>



 <main class="dash-container">
     <section class="dashboard_container">
         <?php include_once 'asidemenu.php'; ?>


         <div class="info ">
            <div class="container">
                <div class="heading">
                    Events
                </div>
                <div class="table-section">
                    <div style="overflow-x:auto;">
                        <table id="datatable" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">Name
                                    </th>
                                    <th class="th-sm">Location
                                    </th>
                                    <th class="th-sm">Event Details
                                    </th>
                                    <th class="th-sm">Event Organizers
                                    </th>
                                    <th class="th-sm">Event Time
                                    </th>
                                    <th class="th-sm">Contacts
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (empty($bloodbanks)) {
                                    echo "No Requests available";
                                } else {
                                    foreach ($bloodbanks as $bloodbank) { ?>
                                        <tr>
                                            <td><?= $bloodbank->bb_name; ?></td>
                                            <td style="text-align:left;">
                                                Email = <?= $bloodbank->bb_email ?> <br>
                                                Phone no :<?= $bloodbank->bb_phoneno; ?> <br>
                                                Address :<?= $bloodbank->bb_address; ?> <br>
                                                Description :<?= $bloodbank->bb_description; ?> <br>
                                            </td>
                                            <td>
                                                <form action="bbrequests" method="post">
                                                    <input type="hidden" name="bb_id" value="<?= $bloodbank->bb_id ?>">
                                                    <button type="submit" class="btn btn-success" name="approve">Approve</button>
                                                </form>

                                                <form action="bbrequests" method="post">
                                                    <input type="hidden" name="bb_id" value="<?= $bloodbank->bb_id ?>">
                                                    <button type="submit" class="btn btn-danger" name="reject">Decline</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
             <div class="container">
                 <div class="heading">
                     Crediantals
                 </div>
                 <form action="#">
                     <div class="form first">
                         <div class="details personal">
                             <span class="title">Personal Details</span>

                             <div class="fields">




                                 <div class="input_field">
                                     <label>E-mail</label>
                                     <input type="text" placeholder="Enter your e-mail" required>
                                 </div>

                                 <div class="input_field">
                                     <label>Password</label>
                                     <input type="password" placeholder="Enter your password" required>
                                 </div>
                                 <div class="input_field">
                                     <label>Password</label>
                                     <input type="password" placeholder="ReEnter your password" required>
                                 </div>










                             </div>

                             <input class="submit button" type="submit" name="edit-login" value="Update Login">
                         </div>
                     </div>
                 </form>
             </div>


         </div>
     </section>
 </main>
 <?php include 'views/footer.php' ?>