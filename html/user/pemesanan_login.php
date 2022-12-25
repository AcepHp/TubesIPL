<?php 
 
session_start();
 
if (!isset($_SESSION['Username'])) {
    header("Location: ../index.php");
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Greenside</title>
    <link rel="stylesheet" type="text/css" href="../../css/stylepemesanan.css?=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>


    <!-- Navbar -->
    <header>

        <div class="container">

            <h1><a href="#"><i class="fas fa-ring"> GreenSide </i></a></h1>
            <h1><i class="fas fa-ring"> GreenSide </i></h1>
            <ul>
                <li><a href="index_login.php">Home</a></li>
                <!-- Menambahkan class active -->
                <li><a href="paket.php">Paket</a></li>
                <li><a href="../galeri.php">Galeri</a></li>
                <li><a href="#">Pesanan</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                <li><a href="../auth/logout.php">Logout</a></li>
            </ul>
        </div>
    </header>
    <form action="../auth/proses_input.php" method="POST">
        <div class="formulir">
            <div class="pemesanan">
                <h1 style="text-align: center;">Formulir Pemesanan</h1>
                <label for="orang">Nama Pemesan</label>
                <br>
                <input type="text" name="nama" value="<?php echo $_SESSION['nama']?>" readonly>
                <br>
                <br><label for="catering">Catering</label><br>
                <select id="catering" name="catering" required>
                    <option value disabled selected hidden>Pilihan Catering</option>
                    <option value="Teratai Catering">Teratai Catering :Rp.5Jt</option>
                    <option value="Akasya Catering">Akasya Catering :Rp.10Jt</option>
                    <option value="EATEVER Catering">EATEVER Catering:Rp.15Jt</option>
                </select>
                <br>
                <label for="Tempat">Tempat</label><br>
                <select id="tempat" name="tempat" required>
                    <option value disabled selected hidden>Pilihan Tempat</option>
                    <option value="Indoor">Indoor:Rp.5Jt</option>
                    <option value="Outdoor">Outdoor:Rp.10Jt</option>
                </select>
                <br>
                <label for="orang">Jumlah Orang</label>
                <br>
                <input type="number" name="orang" id="orang" required>
                <br>
                <label for="MC">MC</label><br>
                <input type="number" id="mc" name="mc" placeholder="Harga 1 MC 2Jt" required>



                <br><label for="hiburan">Hiburan</label><br>
                <select id="hiburan" name="hiburan" required>
                    <option value disabled selected hidden>Pilihan Hiburan</option>
                    <option value="Dangdut">Dangdut:Rp.30Jt</option>
                    <option value="Orkestra">Orkestra:Rp.50Jt</option>
                    <option value="Live Acoustic">Live Acoustic:Rp.5Jt</option>
                </select>

                <br><label for="dekorasi">Dekorasi</label><br>
                <select id="dekorasi" name="dekorasi" required>
                    <option value disabled selected hidden>Pilihan Dekorasi</option>
                    <option value="Minimalis">Minimalis:Rp.5Jt</option>
                    <option value="Mewah">Mewah:Rp.50Jt</option>
                    <option value="Pernikahan Adat">Pernikahan Adat:Rp.100Jt</option>
                </select>

                <br><label for="rias">Makeup</label><br>
                <select id="rias" name="rias" required>
                    <option value disabled selected hidden>Pilihan Makeup</option>
                    <option value="Mustika Ratu">Mustika Ratu:Rp.5Jt</option>
                    <option value="Wardah">Wardah:Rp.5Jt</option>
                    <option value="Kryolan">Kryolan:Rp.5Jt</option>
                </select>
                <br>

                <br><label for="tanggal" required>Pilih Tanggal</label><br>
                <input type="date" id="tanggal" name="tanggal">
                <br>

                <input type="submit" value="Daftar"
                    onclick="return confirm('Apakah Anda Yakin Dengan Pemesanan Ini ?');">
                <br>
            </div>
        </div>
    </form>
    <div class="footer">
        <small>Copyright &copy; 2022 - Greenside. All Right Reserved</small>
    </div>
</body>

</html>