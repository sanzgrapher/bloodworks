 
<?php
include_once 'views/header.php';


?>


<?php
// if (!isset($_COOKIE["STATUS"])) {
//     // echo "Cookie named '" . $cookie_name . "' is not set!";
//     echo "NOT SET";
// } else {
//     echo "Cookie 'STATUS' is set!<br>";
//     echo "Value is: " . $_COOKIE["STATUS"];
//     echo "SET";
// }
?>
<main class="dash-container">
    <section class="dashboard_container">
        <?php include'asidemenu.php' ?>
        <div class="info ">


                <div class="container">
                    <div class="switch-donor">
                        <a>Become Donor</a>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                



            <div class="container">
                <div class="heading">
                    PROFILE
                </div>
                <form action="edit" method="post">
                    <?php foreach ($loggedinuser as $user) { ?>
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Personal Details</span>
                                <input type="hidden" name="id" value="<?= $user->id; ?>">
                                <div class="fields">
                                    <div class="input_field">a
                                        <label>First Name</label>
                                        <input type="text" name="fname" value="<?= $user->fname; ?> " placeholder="Enter your First name" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Middle Name</label>
                                        <input type="text" name="mname" value="<?= $user->mname; ?>" placeholder="Enter your Middle name">
                                    </div>
                                    <div class="input_field">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" value="<?= $user->lname; ?>" placeholder="Enter your Last name" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Date of Birth</label>
                                        <input type="date" placeholder="Select Date" value="<?= $user->dateofbirth ?>" name="dateofbirth" required>
                                    </div>
                                    <div class="input_field">
                                        <label>Username</label>
                                        <input type="text" placeholder="Enter your username" value="<?= $user->username ?>" required>
                                    </div>







                                    <div class="input_field">
                                        <label>Mobile Number</label>
                                        <input type="text" maxlength="10" name="phone_no" value="<?= $user->phone_no ?>" placeholder="Enter your mobile number" required>
                                    </div>

                                    <!-- <div class="input_field">
                                        <label>Gender</label>
                                        <select name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div> -->

                                    <!-- <div class="input_field">
                                        <label>Blood Group</label>
                                        <select name="gender">
                                            <option value="">Select Your Blood Group</option>
                                            <option value="apositive">A Positive</option>
                                            <option value="anegative">A Negaitive</option>
                                            <option value="bpositive">B Positive</option>
                                            <option value="bnegative">B Negative</option>
                                            <option value="abpositive">AB Positive</option>
                                            <option value="abnegative">AB Negative</option>
                                            <option value="opositive">O Positive</option>
                                            <option value="onegative">O Negative</option>
                                        </select>
                                    </div> -->

                                    <div class="input_field">
                                        <label>Address</label>
                                        <input type="text" name="address" value=" <?= $user->mname; ?>" placeholder=" City-ward no,tole eg,(Pokhara-17,Chhorepatan)" required>
                                    </div>
                                </div>
                                <input class="submit button" type="submit" name="edit-basic" value="Update Details">
                                <!-- <input class="submit" type="submit" name="edit-basic" value="edit-basic">
                                Update Profile
                                </input> -->
                            </div>
                        </div> <?php } ?>
                </form>
            </div>


            <div class="container">
                <div class="heading">
                    Credentials
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