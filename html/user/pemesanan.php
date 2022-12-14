<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Greenside</title>
    <link rel="stylesheet" type="text/css" href="../../css/stylepemesanan.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>


    <!-- Navbar -->
    <header>

        <div class="container">

            <h1 class="logo"> GreenSide </h1>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <!-- Menambahkan class active -->
                <li><a href="paket.php">Paket</a></li>
                <li><a href="../galeri.php">Galeri</a></li>
                <li><a href="#">Pesanan</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </div>
    </header>

    <div class="formulir">
        <div class="pemesanan">
            <h1 style="text-align: center;">Formulir Pemesanan</h1>

            <br><label for="catering">Catering</label><br>
            <select id="catering" name="catering">
                <option value disabled selected hidden>Pilihan Catering</option>
                <option value="Teratai Catering">Teratai Catering :Rp.20Jt</option>
                <option>Akasya Catering</option>
                <option>EATEVER Catering</option>
            </select>
            <br>
            <label for="Tempat">Tempat</label><br>
            <select id="tempat" name="tempat">
                <option value disabled selected hidden>Pilihan Tempat</option>
                <option>Indoor</option>
                <option>Outdoor</option>
            </select>
            <br>
            <label for="orang">Jumlah Orang</label>
            <br>
            <input type="number" name="orang" id="orang">
            <br>
            <label for="MC">MC</label><br>
            <input type="number" id="mc" name="mc" placeholder="Butuh Berapa MC">



            <br><label for="hiburan">Hiburan</label><br>
            <select id="hiburan" name="hiburan">
                <option value disabled selected hidden>Pilihan Hiburan</option>
                <option>Dangdut</option>
                <option>Orkestra</option>
                <option>Live Acoustic</option>
            </select>

            <br><label for="dekorasi">Dekorasi</label><br>
            <select id="dekorasi" name="dekorasi">
                <option value disabled selected hidden>Pilihan Dekorasi</option>
                <option>Minimalis</option>
                <option>Mewah</option>
                <option>Pernikahan Adat</option>
            </select>

            <br><label for="rias">Makeup</label><br>
            <select id="rias" name="rias">
                <option value disabled selected hidden>Pilihan Makeup</option>
                <option>Mustika Ratu</option>
                <option>Wardah</option>
                <option>Kryolan</option>
            </select>
            <br>

            <input type="submit" value="Pesan">
            <br>
        </div>
    </div>
    <footer>
        <h1>Copyright &copy; 2022 - Greenside. All Right Reserved</h1>
    </footer>
</body>

</html>