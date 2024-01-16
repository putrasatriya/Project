<?php 
include 'config.php';
session_start();
if($_SESSION['status'] !="login"){
    header("index.php");
}
?>
 
<!DOCTYPE html>
<html lang="en">


</style>
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
          <li><a class="nav-link scrollto" href="daftar_aduan.php">Daftar Aduan</a></li>
          <li class="dropdown"><a href="#"><span class="btn btn-success">Sugeng Rawuh, <?php echo $_SESSION['usernamed']; ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#about">Profil</a></li>
              <li><a class="nav-link scrollto" href="#testimonials">Riwayat Aduan</a></li>
              <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>  
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up"> -->
          <div>
            <h1 style="color: #990000;font-size: 42px;text-align: center;">Aplikasi Pengaduan Masyarakat Kecamatan Srandakan Kabupaten Bantul Daerah Istimewa Yogyakarta</h1>
            <center>
            <a href="javascript:openpopup('complaint.php')" class="btn-get-started scrollto">Kirim Pengaduan</a>
            <a href="#" onclick="myFunction1()" class="btn-get-started scrollto">Survei Kepuasan Mayarakat
            </a>
            <a href="#" onclick="myFunction2()" class="btn-get-started scrollto">Informasi
            </a>
            </center>
          </div>
       <!--  </div> -->
      </div>
    </div>

  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item" data-aos="fade-up">
                <h2><b>Alur & Proses Penyelesaian Pengaduan Masyarakat</b></h2><br>
                 <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>Tulis Aduan</h4>
                  <p>Tulis aduan anda di form pengaduan cepat.</p>
                </a> -->
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>Proses Delegasi</h4>
                  <p>Tim kami akan melakukan musyawarah dengan instansi terkait untuk menemukan  solusi atas pengaduan anda.</p>
                </a> -->
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                 <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>Tindak Lanjut & Feedback</h4>
                  <p>Hasil musyawarah akan dilanjutkan dengan tindakan dan impelementasi solusi di area pengaduan. Respon terhadap pengaduan anda akan kami infokan di website segera setelah proses musyawarah dan tindak lanjut terealisasikan.</p>
                </a> -->
              </li>
              <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4>Selesai</h4>
                  <p>Terimakasih atas peran serta anda dalam meningkatkan pelayanan masyarakat. Matur Nuwun.</p>
                </a> -->
              </li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/features-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="assets/img/features-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="assets/img/features-4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- End Features Section -->

<!-- aduan terbaru section -->

<section id="hero" class="hero">

      <h1 align="center">Daftar Aduan Masyarakat</h1>
      
    <?php
    $nomer = 1;
    $data = mysqli_query($db,"select * from tb_aduan inner join tb_user on tb_aduan.nik=tb_user.nik");
?>
<div class="container">
<div class="table-responsive">
<table class="table">
    <thead>
  <tr>
    <th>No</th>
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
              <h3>Kecamatan Srandakan Kabupaten Bantul Provinsi D.I Yogyakarta</h3>
              <p>
                Jl. Srandakan-Bantul D.I Yogyakarta<br><br>
                <strong>Telp:</strong> (0274) 522809<br>
                <strong>Fax:</strong> (0274) 522809<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <ul>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.576041312837!2d110.24411491380512!3d-7.939267881272179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7afe71c61aa42d%3A0xd7acff6af6f34f57!2sKtr.%20Kec.%20Srandakan%2C%20Sapuangin%2C%20Trimurti%2C%20Kec.%20Srandakan%2C%20Kabupaten%20Bantul%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sen!2sid!4v1667178625864!5m2!1sen!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       
      </div>
      <div class="credits">
        Designed by <a href="https://kerjonline.my.id/">Satriya Yunanta Putra</a>
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