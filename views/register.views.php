<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="<?= HOSTNAME ?>/assets/css/style.css">


</head>

<body>

<div class="inf reg ">
    <div class="form-container">
        <div class="container">
        <h1>BLOODWORKS</h1>
            <div class="heading">
                Registration
            </div>
            <p>Fill the following fields to create an account </p>
           
            <form action="register" method="post">
                <div class="form ">
                    <div class="details personal">
                        <!-- <span class="title">Enter your personal information below : </span> -->
                        <div class="fields ">
                            <div class="input_field">
                                <label for="fname">First Name :</label>
                                <input type="text" name="fname" id="fname" class="inputbox" placeholder="First Name" required>
                            </div>
    
                            <div class="input_field">
                                <label for="mname">Middle Name :</label>
                                <input type="text" name="mname" id="mname" class="inputbox" placeholder="Middle Name">
                            </div>
    
                            <div class="input_field">
                                <label for="lname">Last Name :</label>
                                <input type="text" name="lname" id="lname" class="inputbox" placeholder="Last Name" required>
                            </div>
    
                            <div class="input_field">
                                <label for="dateofbirth">Date of Birth :</label>
                                <input type="date" name="dateofbirth" id="dateofbirth" class="inputbox" placeholder="Date of Birth" required>
                            </div>
    
                            <div class="input_field">
                                <label for="email">Email Address: </label>
                                <input type="email" name="email" id="email" class="inputbox" placeholder="Email Address" required>
                            </div>
                            
                            <div class="input_field">
                                <label for="username">Username :</label>
                                <input type="text" name="username" id="uname" class="inputbox" placeholder="Username" required>
                            </div>
                            
                            <div class="input_field">
                                <label for="password">Password :</label>
                                <input type="password" name="password" id="pass" class="inputbox" placeholder="Password" required>
                            </div>

    
                            <div class="input_field">
                                <label for="bloodgroup">Blood Group :</label>
                                <select name="bloodgroup" id="">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                  </select>
                            </div>
    
                            <div class="input_field">
                                <label for="address">Address :</label>
                                <input type="text" name="address" id="address" class="inputbox" placeholder="Address" required>
                            </div>
                            <div class="input_field">
                                <label for="phone_no">Phone Number :</label>
                                <input type="text" name="phone_no" id="phone_no" class="inputbox" placeholder="Phone Number" required>
                            </div>
                            <input class="submit button" type="submit" value="REGISTER" name="register">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- <div class="formpage">
        <form action="register" method="post">

            <div class="input-container">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" class="inputbox" placeholder="First Name" required>
            </div>
            <div class="input-container">
                <label for="mname">Middle Name</label>
                <input type="text" name="mname" id="mname" class="inputbox" placeholder="Middle Name">
            </div>
            <div class="input-container">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="inputbox" placeholder="Last Name" required>
            </div>
            <div class="input-container">
                <label for="dateofbirth">Date of Birth</label>
                <input type="date" name="dateofbirth" id="dateofbirth" class="inputbox" placeholder="Date of Birth" required>
            </div>
            <div class="input-container">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="inputbox" placeholder="Email Address" required>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" name="password" id="pass" class="inputbox" placeholder="Password" required>
            </div>
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" name="username" id="uname" class="inputbox" placeholder="Username" required>
            </div>
            <div class="input-container">
                <label for="bloodgroup">Blood Group</label>
                <select name="bloodgroup" id="">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="input-container">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="inputbox" placeholder="Address" required>
            </div>
            <div class="input-container">
                <label for="phone_no">Phone Number</label>
                <input type="text" name="phone_no" id="phone_no" class="inputbox" placeholder="Phone Number" required>
            </div>
            <input type="submit" value="register" name="register">

        </form>
    </div> -->
</body>

</html>