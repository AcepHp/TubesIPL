<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../../css/stylelogin.css">
</head>

<body>
    <div class="login-box">
        <h1>Login</h1>
        <form action="Proses_login.php" method="post">
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="Password" name="Password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
            <center><a href="Register.php">Daftar</a></center>
        </form>

    </div>

</body>

</html>