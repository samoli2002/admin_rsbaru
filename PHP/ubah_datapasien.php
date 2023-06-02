<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/dataPasien.css">
    <title>Data Pasien | AdminSite</title>
</head>
<body>
    <!-- Side Bar --> 
    <section id="sidebar">
		<a href="#" class="brand"></a>
		<ul class="side-menu">
			<li><a href="#"><i class="fa-solid fa-notes-medical icon"></i> Rekam Medis <i class='bx bx-chevron-right icon-right' ></i></a>
                <ul class="side-dropdown">
					 <li><a href="../PHP/laporan_datapasien.php">Data Pasien</a></li>
					<li><a href="../PHP/rawat_jalan.php">Rawat Jalan</a></li>
				</ul>
            </li>
				<li>
				<a href="#"><i class="fa-solid fa-people-group icon"></i> Rawat Inap <i class='bx bx-chevron-right icon-right' ></i> </a>
                <ul class="side-dropdown">
					 <li><a href="../PHP/kamar.php">Kamar</a></li>
					 <li><a href="../PHP/tambah_pasienri.php">Tambah Pasien</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="fa-solid fa-hospital icon"></i> Laporan <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Data Pasien</a></li>
                    <li><a href="#">Rawat Inap</a></li>
					<li><a href="#">Rawat Jalan</a></li>
					<li><a href="#">Laporan Bulanan</a></li>
                    <li><a href="#">Laporan Penyakit</a></li>
				</ul>
            </li>
		</ul>
			</div>
		</div>
	</section>
    <!-- END Side Bar -->


    <!-- Navigation Bar -->
    <section id="content">
        <nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="#"><i class='bx bxs-cog' ></i> Settings</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>

         <!-- Dashboard Pages -->
         <main>
			<h1 class="title">Rekam Medis</h1>


			<!--
			<p class="id">ID Pasien</p>
				<input type="username" placeholder="Masukkan ID Pasien" name="idpasien" class="idPasien" />
				<p class="nama">Nama Pasien</p>
				<input type="username" placeholder="Masukkan Nama Pasien" name="namapasien" class="namaPasien"/>
			-->

		<!-- Rekam Medis -->

		<?php 
			include "../PHP/koneksi.php";
			$sql = mysqli_query($koneksi, "SELECT * FROM tabel_pasien WHERE pasien_id='$_GET[kode]'");
			$data = mysqli_fetch_array($sql);


		?>
		<div class="container">
			<form action="" method="POST" autocomplete="off">
				<div class="fields">
					<div class="input-field">
						<label>ID Pasien</label>
						<input type="text" name="id_pasien" value="<?php echo $data['pasien_id'];?>">
					</div>
					<div class="input-field">
						<label>Tempat Lahir</label>
						<input type="text" name = "tempat_lahir" value="<?php echo $data['pasien_tempatlahir'];?>">
					</div>
					<div class="input-field">
						<label>Nama Pasien</label>
						<input type="text" name="nama_pasien" value="<?php echo $data['pasien_nama'];?>">
				</div>
					<div class="input-field">
						<label>Tanggal Lahir</label>
							<input type="date" name = "tanggal_lahir" value="<?php echo $data['pasien_tanggallahir'];?>">
					</div>
					<div class="input-field">
						<label>Usia</label>
						<input type="number" name = "usia" value="<?php echo $data['pasien_usia'];?>">
					</div>
					<div class="input-field">
						<label>Alamat</label>
						<input type="text" name="alamat" value="<?php echo $data['pasien_alamat'];	?>">
					</div>
					<div class="input-field">
						<label>Jenis Kelamin</label>
						<select name = "jenis_kelamin">
							<option disabled selected>Select gender</option>
							<option value="Pria" <?php if($data['pasien_jeniskelamin'] == 'Pria') {echo "selected";}?>>Pria</option>
							<option value="Wanita" <?php if($data['pasien_jeniskelamin'] == 'Wanita') {echo "selected";}?>>Wanita</option>
						</select>
					</div>
					<div class="input-field">
						<label>Pekerjaan</label>
						<input type="text" name = "pekerjaan" value="<?php echo $data['pasien_pekerjaan']?>">
					</div>
					<div class="input-field">
						<label>Tinggi Badan</label>
						<input type="number" name = "tinggi" value="<?php echo $data['pasien_tinggi']?>">
					</div>
					<div class="input-field">
						<label>Nomor Telepon</label>
						<input type="text" name = "no_telepon" value="<?php echo $data['pasien_notelepon']?>">
					</div>
					<div class="input-field">
						<label>Berat badan</label>
						<input type="text" name = "berat_badan" value="<?php echo $data['pasien_berat']?>" required>
					</div>
				</div>
				<button class="submitBtn" name="submit_pasien">
					<span class="btnText" >Simpan</span>
				</button>
			</form>
		</div>
		<!-- Rekam Medis -->
    </section>
    <!-- END Navigation Bar -->

	<?php
		include "../PHP/koneksi.php";

		if (isset($_POST['submit_pasien'])) {
			mysqli_query($koneksi, "UPDATE tabel_pasien SET
			pasien_nama = '$_POST[nama_pasien]', 
			pasien_usia = '$_POST[usia]',
			pasien_jeniskelamin = '$_POST[jenis_kelamin]',
			pasien_tinggi ='$_POST[tinggi]',
			pasien_berat = '$_POST[berat_badan]',
			pasien_tempatlahir ='$_POST[tempat_lahir]',
			pasien_tanggallahir = '$_POST[tanggal_lahir]',
			pasien_alamat = '$_POST[alamat]',
			pasien_pekerjaan = '$_POST[pekerjaan]',
			pasien_notelepon ='$_POST[no_telepon]'
			WHERE pasien_id = '$_GET[kode]'");

			echo "<meta http-equiv=refresh content=0;URL='../PHP/laporan_datapasien.php'>";
		}
	?>


    <!-- JS -->
    <script src="../JS/Script.js"></script>
    <!-- END JS -->
</body>
</html>

