<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= HOSTNAME ?>/assets/css/style.css">
</head>

<body>

    <!-- <div class="formpage">
        <h1>BB Login</h1>
        <form name="form" action="login" method="POST">
            <div class="input-container">
                <label for="email">Username:</label>
                <input type="text" name="bb_username" placeholder="username">
            </div>

            <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" name="bb_password" placeholder="password">
            </div>

            <input type="submit" value="login" name="login">

          


        </form>
    </div> -->


    <div class="inf inform">
    <div class="container">
        <h1>BLOODWORKS</h1>
            <div class="heading">
                Login to Your Blood Bank Account
            </div>
            <p>Enter your username & password to login</p>
           
            <form name="form" action="login" method="POST">
                <div class="form first">
                    <div class="details personal">
                        <div class="fields log-reg-field">
                            <div class="input_field">
                                <label for="email">Username:</label>
                                <input class="inputbox" type="text" name="bb_username" id="email" placeholder="">
                            </div>
    
                            <div class="input_field">
                                <label for="password">Password:</label>
                                <input class="inputbox" type="password" name="bb_password" id="password" placeholder="">
                            </div>
    
                            <div class="button-manage">
                                <input class="submit button" type="submit" name="login" value="LOG IN">
                                <p>Don't have account?  <button type="button" onclick="location.href='register'">  Create an account</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
   
    </div>

</body>

</html>