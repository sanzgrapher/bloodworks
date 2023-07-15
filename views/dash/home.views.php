<?php
include_once 'views/header.php';
?>

<main class="dash-container">
    <section class="dashboard_container">
        <div class="dashboard ">
            <div class="profile-container">
                <img src="img.jpg" alt="" class="profile-img">
                <a href="#" class="upload-img">Upload Image</a>
                <h3>Username</h3>
            </div>
            <div class="side-list">
                <a href="#">
                    <i class="fa-solid fa-chart-simple active"></i>Dashboard</a>
                <a href="#">
                    <i class="fa-regular fa-user"></i>My Profile</a>
                <a href="#">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a>
                <a href="#">
                    <i class="fa-regular fa-trash-can"></i>Delete Profile</a>
            </div>
            <div class="hamburger1">
                <div class="bar1"></div>
                <div class="bar1"></div>
                <div class="bar1"></div>
            </div>
        </div>
        <div class="info ">
            <div class="container">
                <div class="heading">
                    PROFILE
                </div>
                <form action="#">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Personal Details</span>

                            <div class="fields">
                                <div class="input_field">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Enter your name" required>
                                </div>

                                <div class="input_field">
                                    <label>Username</label>
                                    <input type="text" placeholder="Enter your username" required>
                                </div>

                                <div class="input_field">
                                    <label>E-mail</label>
                                    <input type="text" placeholder="Enter your e-mail" required>
                                </div>

                                <div class="input_field">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter your password" required>
                                </div>

                                <div class="input_field">
                                    <label>Date of Birth</label>
                                    <input type="date" placeholder="Select Date" required>
                                </div>

                                <div class="input_field">
                                    <label>Mobile Number</label>
                                    <input type="number" placeholder="Enter your mobile number" required>
                                </div>

                                <div class="input_field">
                                    <label>Gender</label>
                                    <select name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="input_field">
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
                                </div>

                                <div class="input_field">
                                    <label>Address</label>
                                    <input type="number" placeholder="Enter your address" required>
                                </div>
                            </div>
                            <button class="submit" type="submit">
                                Update Profile
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="heading">
                    PROFILE
                </div>
                <form action="#">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Personal Details</span>

                            <div class="fields">
                                <div class="input_field">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Enter your name" required>
                                </div>

                                <div class="input_field">
                                    <label>Username</label>
                                    <input type="text" placeholder="Enter your username" required>
                                </div>

                                <div class="input_field">
                                    <label>E-mail</label>
                                    <input type="text" placeholder="Enter your e-mail" required>
                                </div>

                                <div class="input_field">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter your password" required>
                                </div>

                                <div class="input_field">
                                    <label>Date of Birth</label>
                                    <input type="date" placeholder="Select Date" required>
                                </div>

                                <div class="input_field">
                                    <label>Mobile Number</label>
                                    <input type="number" placeholder="Enter your mobile number" required>
                                </div>

                                <div class="input_field">
                                    <label>Gender</label>
                                    <select name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="input_field">
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
                                </div>

                                <div class="input_field">
                                    <label>Address</label>
                                    <input type="number" placeholder="Enter your address" required>
                                </div>
                            </div>
                            <button class="submit" type="submit">
                                Update Profile
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </section>
</main>




<?php include_once 'views/footer.php' ?>