  <?php 
include 'config.php';
session_start();
if($_SESSION['status'] !="login"){
    header("index.php");
}
?>
<!-- <?php echo $_SESSION['usernamed']; ?> -->
<style type="text/css">
	element.style {
}
.quick-asp-box .blocked-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    bottom: 0;
    right: 0;
    display: block;
    color: #444;
    transition: all 0.25s;
    background-color: rgba(221,221,221,0.3);
}
.quick-asp-box {
    position: relative;
    display: block;
    padding: 25px 40px;
    background: #fff;
    color: #444;
    box-shadow: 0 0 15px rgb(0 0 0 / 40%);
    margin: 30px 0;
    z-index: 3;
}
</style>


<div class="quick-asp-box">
		<h3 class="title">ADUAN CEPAT</h3>
<form action="complaint.php" method="post" name="form1" enctype="multipart/form-data">
		<div class="complaint-form">
		<div class="row">
			<div class="col-sm-6 section-left">
				<input type="hidden" name="media" value="2" readonly="readonly" class="form-control">

				<div class="form-group">
					<label class="sr-only" for="judul">Judul</label>
					<input type="text" name="judul" class="form-control" id="judul" value="" placeholder="Judul keluhan" required="">
				</div>

				<div class="form-group">
					<label class="sr-only" for="isi_aspirasi">Isi</label>
					<textarea id="isi_aspirasi" class="form-control " name="isi" rows="3" placeholder="Keluhan Anda" required=""></textarea>
				</div>

				<div class="form-group">
					<label class="sr-only" for="wilayah">Wilayah</label>
					
	
	<select name="wilayah" id="inputWilayah" class="form-control " required="">
	
		<option value="">- Pilih Wilayah -</option>
	
		<option value="RW 1">RW 1</option>
	
		<option value="RW 2">RW 2</option>
	
		<option value="RW 3">RW 3</option>
	
		<option value="RW 4">RW 4</option>
	
		<option value="RW 5">RW 5</option>
	
	</select>
	

				</div>

				<div class="row sm-gutters">
				<div class="col-sm-12 col-md-6 col-lg-8">
					<div class="form-group">
						<label class="sr-only" for="inputKategori">Kategori</label>
						
	
	<select name="kategori" id="inputKategori" class="form-control  " required="" >
	
		<option value="">- Pilih Kategori -</option>
	
		<option value="Kesejahteraan Masyrakat">Kesejahteraan Masyrakat</option>
		<option value="Ekonomi">Ekonomi</option>
		<option value="Polhukam">Politik, Hukum, HAM</option>
		<option value="Ekonomi">Ekonomi</option>
		<option value="ESDA">Energi dan Sumber Daya Alam</option>
		<option value="Infrastruktur">Infrastruktur</option>
		<option value="Kesehatan">Kesehatan</option>
		<option value="Lainnya">Lainnya</option>


	
	
	</select>
	

					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="form-group clearfix">
						<div class="btns-justify-width">
							<input type="file" name="uploadfile" class="form-control" id="uploadfile">
							<!-- <button type="button" class="btn btn-small btn-primary " data-toggle="modal" data-target="#quickComplaintFilesModal" >
								<span class="fa fa-photo"></span>
								Foto
								<span class="badge attachment-indicator"></span>
							</button> -->
						<!-- 	<button type="button" class="btn btn-small btn-primary " data-toggle="modal" data-target="#quickComplaintMapModal" >
								<span class="fa fa-map-marker"></span>
								Lokasi
							</button> -->
						</div>
					</div>
				</div>

				</div>
			</div>
			<?php 
		$no = 1;
		$data = mysqli_query($db,"select * from tb_user where username='{$_SESSION['usernamed']}'");
		while($d = mysqli_fetch_array($data)){
			?>
			<div class="col-sm-6 section-right">
				<h3 class="visible-xs-block">Data Pengirim</h3>
				<div class="form-group">
					
					<label class="sr-only" for="inputNama">Nama</label>
					<input type="text" name="nama" class="form-control " id="inputNama" placeholder="Nama Anda" value="<?php echo $d['nama']; ?>" required readonly>
					
				</div>

				<div class="form-group">
					
					<label class="sr-only" for="inputEmail">Email</label>
					<input type="text" name="email" class="form-control " id="inputEmail" placeholder="Alamat email Anda" value="<?php echo $d['email']; ?>" readonly>
					
				</div>

				<div class="form-group">
					
					<label class="sr-only" for="inputTelp">No. Telepon</label>
					<input type="text" name="telepon" class="form-control" id="inputTelp" placeholder="Nomor telepon/handphone Anda" value="<?php echo $d['telepon']; ?>" readonly>
					
				</div>

				<div class="form-group">
					
					<label class="sr-only" for="inputIdentity">NIK</label>
					<input type="text" name="nik" class="form-control" id="inputIdentity" value="<?php echo $d['nik']; ?>" placeholder="Nomor Induk Kependudukan" maxlength="20" readonly>
					
				</div>
			</div>
			<?php 
		}
		?>
			<div class="col-xs-12 section-bottom">
				<div class="row">
					<div class="col-sm-offset-6 col-sm-6">
					</div>
				</div>
				<div class="row">
					
		<!-- 			<div class="col-sm-6">
						<div class="form-group">
							<label>Inputkan Captcha berikut</label>
							<img src="captcha.php" alt="gambar"><br><br>
							<input type="text" class="form-control" name="kodecaptcha" value="" maxlength="5" required />
						</div>
					</div> -->
					
					<div class="col-sm-6 pull-right">
						<div class="form-group">
							<div class="checkbox check-success ">
								<input type="checkbox" name="agreement" id="inputAgreement" value="1" class="" required>
								<label for="inputAgreement">
									Dengan mengisi form ini dan mengirimkan Aduan, Anda telah menyetujui <a href="/index.php?mod=about&amp;sub=TermsOfService&amp;act=view&amp;typ=html" target="_blank" class="text-primary link-default">Ketentuan Layanan</a> dan <a href="/index.php?mod=about&amp;sub=PrivacyPolicy&amp;act=view&amp;typ=html" target="_blank" class="text-primary link-default">Kebijakan Privasi</a> kami.
								</label>
							</div>
						</div>

						<div class="form-group">
							<div class="submit-wrapper">
								<button type="submit" name="submit" class="btn btn-submit btn-primary " style="margin-top: 0;" >Adukan</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</form>
	
	</div>

	<!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/plugins/headereffects/css/component.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/plugins/headereffects/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/plugins/pace/pace-theme-flash.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/plugins/boostrapv3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/css/magic_space.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/plugins/bootstrap-select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/plugins/bootstrap-select2/select2-bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/plugins/owl-carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/webarch/plugins/owl-carousel2/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/css/theme.css" />
    <link rel="stylesheet" type="text/css" href="https://lapor.jogjaprov.go.id/assets/css/custom.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/images/asp_logo.png" />
	<!-- end favicon -->
	<script lang="javascript">
        var default_date_format = 'yy-mm-dd';
    </script>

		<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$wilayah = $_POST['wilayah'];
		$kategori = $_POST['kategori'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$telepon = $_POST['telepon'];
		$nik = $_POST['nik'];

		$filename = $_FILES["uploadfile"]["name"];
    	$tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;

		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$sql = "INSERT INTO tb_aduan(judul,deskripsi,wilayah,kategori,nama,email,telepon,nik,foto) VALUES('$judul','$isi','$wilayah','$kategori','$nama','$email','$telepon','$nik','$filename')";
		$query=mysqli_query($db,$sql);

		if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
		
		 if( $query ) {
        echo '<script>alert("Pengaduan Terkirim")</script>';
        echo "<script>window.close();</script>";
    } else {
        echo '<script>alert("Pengaduan Gagal")</script>';

    }


} else {
    die("Akses dilarang...");
}

?>