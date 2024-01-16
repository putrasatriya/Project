<?php 
include 'config.php';
session_start();
if($_SESSION['status'] !="login"){
    header("index.php");
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aplikasi Pengaduan Masyarakat Srandakan - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/BANTUL.png" rel="icon">
  <link href="assets/img/BANTUL.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v4.7.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <!-- <h1><a href="index.html">E-Lapor Purbayan DIY</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.php"><img src="assets/img/BANTUL.png" alt="" class="img-fluid"><b style="color: #990000;">&nbsp; &nbsp; Aplikasi Pengaduan Masyarakat Srandakan</b></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="dashboard.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Daftar Aduan</a></li>
          <li class="dropdown"><a href="#"><span class="btn btn-success">Sugeng Rawuh, <?php echo $_SESSION['usernamed']; ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#about">Profil</a></li>
              <li><a class="nav-link scrollto" href="#testimonials">Riwayat Aduan</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">



        <!-- ======= Clients Section ======= -->
    <section id="hero" class="hero">

      <h1 align="center" style="color: #990000;">Daftar Aduan Anda</h1>
      
    <?php
    $nomer = 1;
    $data = mysqli_query($db,"select * from tb_aduan inner join tb_user on tb_aduan.nik=tb_user.nik where username='{$_SESSION['usernamed']}'");
?>
<div class="container">
<div class="table-responsive">
<table class="table">
    <thead>
  <tr>
    <th>No</th>
    <th>Nama Pelapor</th>
    <th>Judul Aduan</th>
    <th>Deskripsi Aduan</th>
    <th>Wilayah Aduan</th>
    <th>Kategori Aduan</th>
    <th>Tanggapan</th>
    <th>Status</th>
  </tr>
</thead>

<?php
  $nomer=1;
while($row=mysqli_fetch_assoc($data)) { ?>
  <tbody>
  <tr>
  <td><?= $nomer; ?></td>
  <td><?= $row['nama']; ?></td> 
  <td><?= $row['judul']; ?></td>
  <td><?= $row['deskripsi']; ?></td>
  <td><?= $row['wilayah']; ?></td>
  <td><?= $row['kategori']; ?></td>
  <td><?= $row['tanggapan']; ?></td>
  <td><?= $row['status']; ?></td>

  </tr>
  <?php
    $nomer++;
    }
  ?>

</tbody>
</table>
</div>
</div>

    </section><!-- End Clients Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>KELURAHAN PURBAYAN Pemerintah Kota Yogyakarta</h3>
              <p>
                Jalan Kemasan Nomor 39 A Kotagede Yogyakarta<br><br>
                <strong>Telp:</strong> (0274) 417010<br>
                <strong>Fax:</strong> (0274) 417010<br>
                <strong>Email:</strong> purbayan@jogjakota.go.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ketentuan Layanan</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kerjonline 2022</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
        Designed by <a href="https://kerjonline.my.id/">Vito Nur Arfiansyah</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
        <script type="text/javascript">
    function openpopup(popurl){
    var winpops=window.open(popurl,"","width=730,height=720,status,scrollbars,resizable")
    }
    </script>

</body>

</html>