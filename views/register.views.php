<!-- register -->
<h1></h1>
<form action="register" method="post">
    
    <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required>
    </div>
    <div class="form-group">
        <label for="mname">Middle Name</label>
        <input type="text" name="mname" id="mname" class="form-control" placeholder="Middle Name">
    </div>
    <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required>
    </div>
    <div class="form-group">
        <label for="dateofbirth">Date of Birth</label>
        <input type="date" name="dateofbirth" id="dateofbirth" class="form-control" placeholder="Date of Birth" required>
    </div>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="uname" class="form-control" placeholder="Username" required>
    </div>
    <div class="form-group">
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
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
    </div>
    <div class="form-group">
        <label for="phone_no">Phone Number</label>
        <input type="text" name="phone_no" id="phone_no" class="form-control" placeholder="Phone Number" required>
    </div>
    <input type="submit" value="register" name="register">

</form>