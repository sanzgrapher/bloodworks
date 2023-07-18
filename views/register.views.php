<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <<link rel="stylesheet" href="<?= HOSTNAME ?>/assets/css/style.css">


</head>
<body>
    <div class="register">
        <form action="register" method="post" onsubmit="return validate(this)">
            <h1>Register</h1>
            <table>
                <tr>
                    <td>Firstname</td>
                    <td>
                        <input type="text" name="fname" placeholder=" ">
                    </td>
                </tr>
                <tr>
                    <td>Middlename</td>
                    <td>
                        <input type="text" name="mname" placeholder=" ">
                    </td>
                </tr>
                <tr>
                    <td>Lastname</td>
                    <td>
                        <input type="text" name="lname" placeholder=" ">
                    </td>
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td>
                        <select name="bloodgroup">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                         <input type="date" name="dateofbirth" placeholder=" ">
                   </td>
                </tr>
                 <tr>
                    <td>Age</td>
                    <td>
                        <input type="number" name="age" placeholder=" ">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" placeholder=" ">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder=" ">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" placeholder=" ">
                    </td>
                </tr>
                 <tr>
                     <td>Address</td>
                    <td>
                        <input class="inputbox" type="text" name="address" placeholder="">
                    </td>
                </tr>
                <tr>
                     <td>Phone number</td>
                    <td>
                        <input class="inputbox" type="text" name="phone_no" placeholder="">
                    </td>
                </tr>
                 <tr>
                     <td>Donor Availability</td>
                    <td>
                        <select class="inputbox" name="donor_availability">
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Register" name="register">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
