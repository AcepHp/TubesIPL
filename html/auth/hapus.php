<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM tb_booking WHERE id_booking='$id'");
mysqli_query($conn,"DELETE FROM tb_harga WHERE id_booking='$id'");
header("location:../user/daftar_booking.php");
?>