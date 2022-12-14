<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "wedding_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}



session_start();
 
if (isset($_SESSION['Username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];
 
    echo $password.$username;
    $sql = "SELECT * FROM tb_login WHERE Username='$username' AND Password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['Username'] = $username;
        header("Location: ../user/index_login.php");
    } else {
        echo "<script>alert('Maaf Username Atau Password Yang Anda Masukkan Salah.');window.location.href='login.php'</script>";
    }
}
 













// // Ambil data dari form login
// $username = $_POST['Username'];
// $password = $_POST['Password'];
// // Query untuk mencari user berdasarkan username dan password
// $query = "SELECT * FROM tb_login WHERE Username='$username' AND Password='$password'";
// $result = mysqli_query($conn, $query);

// if (mysqli_num_rows($result) == 1) {
//   // Login sukses
//   $row = mysqli_fetch_assoc($result);
//   if($row["role"]=="admin"){
//     header("location:index.html");
//   }
//   // header("location: index.html");
//   elseif($row["role"]=="user"){
//     header("location:paket.html");
//   }
// } else {
//   // Login gagal
//   echo"<script>alert('Maaf Username Atau Password Yang Anda Masukkan Salah.');window.location.href='login.html'</script>";
// }

// mysqli_close($conn);
?>