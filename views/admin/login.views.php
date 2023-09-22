<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= HOSTNAME ?>/assets/css/style.css">
</head>

<body>
    <div class="formpage">
        <h1>Admin Login</h1>
        <form name="form" action="login" method="POST">
            <div class="input-container">
                <label for="email">Username:</label>
                <input type="text" name="admin_username" placeholder="username">
            </div>

            <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" name="admin_password" placeholder="password">
            </div>

            <input type="submit" value="login" name="login">




        </form>
    </div>
</body>

</html>