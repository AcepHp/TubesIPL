<?php
include 'Koneksi.php';
// Jika formulir disubmit, proses input
if (isset($_POST['submit'])) {

  // Ambil data dari formulir
  $full = $_POST['Nama'];
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  $email = $_POST['email'];
  $no_telp = $_POST['phone'];
  // Validasi input
  if ($full==''|| $username==''|| $password==''|| $email==''|| $no_telp=='') {
    echo "<script>alert('Maaf Masukkan Field Yang Di Perlukan.');window.location.href='Register.php'</script>";
  } else {
    echo $full.$username.$password.$email.$no_telp;
    // Sisipkan data ke database
    $query = "INSERT INTO tb_login (Nama,Username,Password,email,phone) VALUES('$full','$username','$password','$email',$no_telp)";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      // Redirect ke halaman login jika berhasil
      echo "<script>alert('Selamat Akun Sudah Di Buat.');window.location.href='login.php'</script>";
    } else {
      // Tampilkan pesan error jika gagal
      echo "<script>alert('Maaf Username Atau Password Yang Anda Masukkan Sudah Ada.');window.location.href='Register.php'</script>";
    }
  }
}

?>