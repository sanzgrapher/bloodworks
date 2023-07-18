<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= HOSTNAME ?>/assets/css/style.css">
</head>
<body>
    <div class="formpage">
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


