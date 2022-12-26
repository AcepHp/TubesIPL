<?php 
 
session_start();
 
if (!isset($_SESSION['Username'])) {
    header("Location: ../auth/login.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/style_booking.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>
<header>

<div class="container">

    <h1><a href="#"><i class="fas fa-ring"> GreenSide </i></a></h1>
    <h1><i class="fas fa-ring"> GreenSide </i></h1>
    <ul>
        <li><a href="index_admin.php">Home</a></li>
        <!-- Menambahkan class active -->
        <li><a href="#">Daftar Booking</a></li>
        <li><a href="pegawai.php">Daftar Pegawai</a></li>
</div>
</header>
    <br>
    <br>
    <h1><center>Daftar Pesanan</center></h1>
    <br>
    <table>
        <thead>
            <tr class="table-header">
                <th scope="col">No</th>
                <th scope="col">Id_Booking</th>
                <th scope="col">Nama</th>
                <th scope="col">Catering</th>
                <th scope="col">Tempat</th>
                <th scope="col">Jumlah Orang</th>
                <th scope="col">MC</th>
                <th scope="col">Hiburan</th>
                <th scope="col">Dekorasi</th>
                <th scope="col">Makeup</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Total</th>
                <th scope="col" colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../auth/koneksi.php';
            $nama=$_SESSION['Username'];

            $sql = mysqli_query($conn, "SELECT * FROM `tb_booking`"); 
            $i=1;
            foreach ($sql as $peng){
            ?>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $peng['id_booking']?></td>
                <td><?php echo $peng['Nama']?></td>
                <td><?php echo $peng['Catering']?></td>
                <td><?php echo $peng['Tempat']?></td>
                <td><?php echo $peng['Jumlah_Orang']?></td>
                <td><?php echo $peng['MC']?></td>
                <td><?php echo $peng['Hiburan']?></td>
                <td><?php echo $peng['Dekorasi']?></td>
                <td><?php echo $peng['Makeup']?></td>
                <td><?php echo $peng['Tanggal']?></td>
                <td><a href="../auth/detail.php?id=<?php echo $peng['id_booking']; ?>">Detail</a></td>
                <td><a href="../auth/hapus.php?id=<?php echo $peng['id_booking']; ?>">Hapus</a></td>
                <?php $i++;}?>
            </tr>
        </tbody>
    </table>
</body>

</html>