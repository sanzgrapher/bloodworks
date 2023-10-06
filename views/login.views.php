<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= HOSTNAME ?>/assets/css/style.css">
</head>

<body>
    

<div class="info bb-form">
    <div class="form-container">
    <div class="container">
            <div class="heading">
                Log In
            </div>
           
            <form name="form" action="login" method="POST">
                <div class="form first">
                    <div class="details personal">
                        <div class="fields log-reg-field">
                            <div class="input_field">
                                <label for="email">Username:</label>
                                <input class="inputbox" type="text" name="username" id="email" placeholder="">
                            </div>
    
                            <div class="input_field">
                                <label for="password">Password:</label>
                                <input class="inputbox" type="password" name="password" id="password" placeholder="">
                            </div>
    
                            <div class="button-manage">
                                <button type="button" onclick="location.href='register'">Create New Account</button>

                                <input class="submit button" type="submit" name="login" value="LOG IN">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


    <!-- <div class="formpage">
        <h1>Login</h1>
        <form name="form" action="login" method="POST">
            <div class="input-container">
                <label for="email">Username:</label>
                <input class="inputbox" type="text" name="username" id="email" placeholder="">
            </div>

            <div class="input-container">
                <label for="password">Password:</label>
                <input class="inputbox" type="password" name="password" id="password" placeholder="">
            </div>

            <input type="submit" name="login" value="Login">

            <button type="button" onclick="location.href='register'">Create New Account</button>


        </form>
    </div>         -->
</body>

</html>