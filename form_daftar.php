<?php
    include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Politeknik Negeri Pontianak</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/alfa-icon.png" rel="alfa-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- CSS Utama -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="d-flex flex-column">
        <div class="profile">
          <img src="assets/img/Reza-White-Wall.jpg" alt="" class="img-fluid rounded-circle" />
          <h1 class="text-light"><a href="index.html">LPMP</a></h1>
          <div class="social-links mt-3 text-center">
            <a href="https://www.youtube.com/channel/UCJz5GjF34r3m1ErnP3px_jw" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
            <a href="https://web.facebook.com/Reza.alfajriansyah" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/reza_alfa7" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://www.behance.net/rezaalfajri" target="_blank" class="behance"><i class="bx bxl-behance"></i></a>
            <a href="https://www.linkedin.com/in/reza-alfajri" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

        <nav class="nav-menu">
          <ul>
            <li>
              <a href="index.php"><i class="bx bx-home"></i> <span>Home</span></a>
            </li>
            <li>
              <a href="list_pendaftar.php"><i class="bx bx-user"></i> <span> List Mahasiswa</span></a>
            </li>
            <li class="active">
              <a href="#form_daftar"><i class="bx bx-book-content"></i> Daftar Baru</a>
            </li>
            <li>
              <a href="prestasi_mahasiswa.php"><i class="bx bx-award"></i> Prestasi</a>
            </li>
            <li>
              <a href="form_prestasi.php"><i class="bx bx-book-content"></i> Input Prestasi</a>
            </li>
            <li>
              <a href="logout.php"><i class="bx bx-exit"></i> Logout</a>
            </li>
          </ul>
        </nav>
        <!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
      </div>
    </header>
    <!-- End Header -->

    <main id="main">

      <!-- ======= List Mahasiswa Section ======= -->
      <section id="list_mahasiswa" class="list_mahasiswa">
        <div class="container">
          <div class="section-title">
            <h2 data-aos="zoom-out" data-aos-delay="170">Daftarkan Diri Anda</h2>
            <div class="container"> 
                <div class="ListDaftar" data-aos="fade-down" data-aos-delay="200">
                    <form action="proses_daftar.php" method="POST">
                      <fieldset>
                          <p><label for="timestamp">Timestamp : </label>
                              <input type="date" name="timestamp" class="form-control"></p>
                          <p><label for="nama_kegiatan">Nama Kegiatan: </label>
                              <input type="text" name="nama_kegiatan" class="form-control"></p>
                          <p><label for="tanggal_awal">Tanggal Awal : </label>
                              <input type="date" name="tanggal_awal" class="form-control"></p>
                          <p><label for="tanggal_akhir">Tanggal Akhir : </label>
                              <input type="date" name="tanggal_akhir" class="form-control"></p>
                          <p><label>Status Check Out : </label>
                          <select name="statusco" class="custom-select">
                              <option value="">-- status --</option>
                              <option value="terisi">Terisi</option>
                              <option value="kosong">Kosong</option>
                          </select> 
                          <p><label for="nama_tamu">Nama Tamu : </label>
                              <input type="text" name="nama_tamu" class="form-control"></p>
                          <p><label for="nip">NIP : </label>
                              <input type="text" name="nip" class="form-control"></p>
                          <p><label>Jenis Kelamin : </label>
                          <select name="jenis_kelamin" class="custom-select">
                              <option value="">-- jenis kelamin --</option>
                              <option value="pria">Pria</option>
                              <option value="wanita">Wanita</option>
                          </select> 
                          <p><label for="tanggal_lahir">Tanggal Lahir : </label>
                              <input type="date" name="tanggal_lahir" class="form-control"></p>
                          <p><label for="kota">Kota : </label>
                              <input type="text" name="kota" class="form-control"></p>
                          <p><label for="jabatan">Jabatan : </label>
                              <input type="text" name="jabatan" class="form-control"></p>
                          <p><label for="nama_kantor">Nama Kantor : </label>
                              <input type="text" name="nama_kantor" class="form-control"></p>
                          <p><label for="no_hp">No. HP : </label>
                              <input type="text" name="no_hp" class="form-control"></p>
                          <p><label>Wisma : </label>
                          <select name="wisma" class="custom-select">
                              <option value="">-- wisma --</option>
                              <option value="handayani">Handayani</option>
                              <option value="anggrek">Anggrek</option>
                          </select> 
                          <p><label for="nomor_kamar">No. Kamar: </label>
                              <input type="text" name="nomor_kamar" class="form-control"></p>
                          <p><input type="submit" value="Daftar" name="daftar" class="btn btn-primary"></p>
                      </fieldset>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End List Mahasiswa Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>POLNEP</span></strong> 2021
        </div>
        <div class="credits">Designed by <a href="https://www.instagram.com/reza_alfa7" target="_blank">Reza Alfajriansyah</a></div>
      </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- JS Utama -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
