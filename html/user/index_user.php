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
    <link rel="stylesheet" type="text/css" href="../../css/style-home.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../../slick/slick.css">
    <link rel="stylesheet" href="../../slick/slick-theme.css">
    <style type="text/css">
    .slick-prev:before,
    .slick-next:before {
        color: gold;
    }
    </style>
</head>

<body>


    <!-- Navbar -->
    <header>

        <div class="container">

            <h1><a href="#"><i class="fas fa-ring"> GreenSide </i></a></h1>
            <h1><i class="fas fa-ring"> GreenSide </i></h1>
            <ul>
                <li><a href="#">Home</a></li>
                <!-- Menambahkan class active -->
                <li><a href="paket_user.php">Paket</a></li>
                <li><a href="galeri_user.php">Galeri</a></li>
                <li><a href="pemesanan_user.php">Pesanan</a></li>
                <li><a href="kontak_user.php">Kontak</a></li>
                <li><a href="../auth/logout.php">Logout</a></li>
                <li><?php echo $_SESSION['Username'];?></li>
            </ul>
        </div>
    </header>

    <!-- Slider -->
    <div class="chartClass">

        <div class="pembungkus" style="width: auto; height: auto; margin: 0px 20px auto 0px">
            <img src="../../gambar/kkk.jpg">
            <h2>Welcome Website</h2>
            <h3> </h3>
        </div>
        <div class="pembungkus" style="width: auto; height: auto; margin: 0px 20px auto 0px">
            <img src="../../gambar/kk.jpg">
            <h4>Give Guarantee of happiness</h4>
            <h3> </h3>
        </div>
        <div class="pembungkus" style="width: auto; height: auto; margin: 0px 20px auto 0px">
            <img src="../../gambar/k.jpg">
            <h4>Give Guarantee of happiness</h4>
            <h3> </h3>
        </div>
    </div>
    </div>
    <script src="../../jquery/jquery.min.js"></script>
    <script src="../../slick/slick.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.chartClass').slick({

            accessibility: true,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            draggable: false,
            focusOnSelect: true,
            infinite: true,
            speed: 1000
        });
        $('.slick-prev').css('margin-left', '30px');
        $('.slick-next').css('margin-right', '30px');
    });
    </script>

    <!-- Perkenalan WO -->
    <!-- Wedding Organizer -->

    <section class="wedding_organizer">


        <div class="container">

            <h1><i class="fas fa-ring"> Green side </i></h1>
            <p>Green Side adalah perusahaan yang bergerak dalam Wedding Organizer, kami telah memulai ini sejak tahun
                2009 sudah banyak menangani pengantin pengantin yang akan menikah. Cabang Wedding Organizer kami telah
                tersebar hampir seluruh negara Indonesia
                banyak dari pengantin puas akan layanan yang kami tawarkan, Wedding Organizer kami berbeda dengan yang
                lain soalnya kami mempunyai ciri khas yaitu garansi kebahagiaan jika terjadi cerai uang kembali.</p>

        </div>


    </section>
    <section class="kami">
        <div class="container">
            <h2> Kenapa Harus Memilih Kami ! </h2>
            <div class="kotak">
                <div class="cols-4">
                    <div class="icon"><i class="fas fa-dollar-sign"></i></div>
                    <h4>Harga Terjangkau</h4>
                </div>
                <div class="cols-4">
                    <div class="icon"><i class="far fa-smile-beam"></i></div>
                    <h4>Kepuasan Pelanggan</h4>
                </div>
                <div class="cols-4">
                    <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                    <h4>Tempat Pernikahan</h4>
                </div>
                <div class="cols-4">
                    <div class="icon"><i class="fas fa-money-bill-wave-alt"></i></div>
                    <h4>Cashback</h4>
                </div>
            </div>
            <p>Berdiri sejak tahun 2010, Greenside Wedding Organizer menyediakan jasa wedding organizer islami dan non
                islami, meliputi catering mulai dari makanan ringan sampai berat, rias pengantin dan keluarga dan busana
                keluarga sampai pengantin, dekorasi
                pelaminan dan gedung/outdoor, fotographi dan video liputan, hiburan (musik positif), upacara adat, MC
                kartu undangan, souvenir, dan kebutuhan pernikahan lainnya.</p>
        </div>
    </section>

    <section class="review">
        <div class="container">
            <div class="tabreview">

                <div class="cols-1">
                    <p>TESTIMONIAL</p>
                    <h1>"We verry happy, About this WO membuat saya sangat senang akan service"</h1>
                    <h2> Acep & Pevita Pearce </h2>
                </div>
                <div class="cols-2">
                    <img src="../../gambar/InkedIMG_9190_LI.jpg"
                        style="width: 600px; height: 500px; text-align: left; box-shadow: 8px 8px 2px rgba(0,0,0,0.8); padding: 0px; border: 0px dashed grey;">
                </div>
            </div>
        </div>
    </section>

    <section class="offering">
        <div class="container">
            <div class="tabel">
                <div class="cols-3">
                    <div class="ikon"><img src="../../gambar/bird.png"></div>
                    <h4>Akad</h4>
                    <p>Di Greenside kami bertanggung jawab atas akad anda sampai selesai, greenside memprioritaskan
                        kesenangan dan kepuasan hati kalian, greenside akan membuat anda merasa puas dengan service akad
                        di kami</p>
                </div>
                <div class="cols-3">
                    <div class="ikon"><img src="../../gambar/catering.png"></div>
                    <h4>Catering</h4>
                    <p>Greenside sudah menyiapkan cathering selaku panitia penyelenggara WO, Di catering kami anda bisa
                        memilih makanan apa saja yang anda inginkan mulai dari makanan berat sampai makanan ringan.</p>
                </div>
                <div class="cols-3">
                    <div class="ikon"><img src="../../gambar/makeup.png"></div>
                    <h4>Makeup</h4>
                    <p>Di greenside pun kami sudah menyiapkan makeup artis untuk mendandani pengantin dan keluarga anda,
                        jangan khawatir makeup artis di kami sudah sangat profesional menangani wedding.</p>
                </div>
            </div>
            <div class="tabel2">
                <div class="cols-2">
                    <div class="ikon"><img src="../../gambar/kamera.png"></div>
                    <h4>Photografi</h4>
                    <p>Di Greenside kami menyediakan liputan foto dan video saat pernikahan anda berlangsung,
                        photografer kami sangatlah profesional dipastikan anda akan puas saat melihat lihat hasil
                        liputan kami.</p>
                </div>
                <div class="cols-2">
                    <div class="ikon"><img src="../../gambar/music.png"></div>
                    <h4>Hiburan</h4>
                    <p>Greenside sudah menyiapkan hiburan selaku panitia penyelenggara WO, Di hiburan kami anda bisa
                        memilih hiburan apa saja yang anda inginkan mulai dari makanan dandut sampai orkesta.</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="offering2">
        <div class="container">
            <h3>Pendukung</h3>
            <div class="sponsor">
                <div class="colsSP-3">
                    <div class="ikkon"><img src="../../gambar/cate.png" width="250px" height="150px"></div>
                </div>
                <div class="colsSP-3">
                    <div class="ikkon"><img src="../../gambar/hahaha.png" width="250px" height="150px"></div>
                </div>
                <div class="colsSP-3">
                    <div class="ikkon"><img src="../../gambar/make.png" width="250px" height="150px"></div>
                </div>
            </div>
    </section>


    <!------ Footer ------>

    <div class="footer">
        <small>Copyright &copy; 2022 - Greenside. All Right Reserved</small>
    </div>


</body>

</html>