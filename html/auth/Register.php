<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../../css/styledaftar.css">
</head>

<body>
    <div class="login-box">
        <h1>Register</h1>
        <form action="Proses_Register.php" method="post">
            <p>Nama Lengkap</p>
            <input type="text" name="Nama" placeholder="Masukan Nama Lengkap" required>
            <p>Email</p>
            <input type="text" id="email" name="email" placeholder="Masukan Email" required>
            <p>Nomor Telepon</p>
            <input type="text" id="phone" name="phone" placeholder="Masukan Nomor Telepon" required>
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="Password" name="Password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Daftar">
            <center><a href="login.php">Login</a></center>
        </form>

    </div>

</body>

</html>