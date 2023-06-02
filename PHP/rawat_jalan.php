<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href= "../CSS/rawatJalan.css">
    <title>Rekam Medis Rawat Jalan | AdminSite</title>
</head>
<body>
    <!-- Side Bar --> 
    <section id="sidebar">
		<a href="#" class="brand"></a>
		<ul class="side-menu">
			<li><a href="#"><i class="fa-solid fa-notes-medical icon"></i> Rekam Medis <i class='bx bx-chevron-right icon-right' ></i></a>
                <ul class="side-dropdown">
					 <li><a href="../PHP/laporan_datapasien.php">Data Pasien</a></li>
					<li><a href="#">Rawat Jalan</a></li>
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
			<h1 class="title">Rekam Medis Pasien Rawat Jalan</h1>


			<!--
			<p class="id">ID Pasien</p>
				<input type="username" placeholder="Masukkan ID Pasien" name="idpasien" class="idPasien" />
				<p class="nama">Nama Pasien</p>
				<input type="username" placeholder="Masukkan Nama Pasien" name="namapasien" class="namaPasien"/>
			-->

		<!-- Rekam Medis -->
		<div class="container">
			<form action="" method="POST" autocomplete="off">
				<div class="fields">
					<div class="input-field">
							<label>ID Pasien</label>
							<input type="text" name = "id_pasien" required>
					</div>
					<div class="input-field">
						<label>Cholestrol DDL</label>
						<input type="text" name = "cholestrol_ddl" required>
					</div>
					<div class="input-field">
						<label>Poli</label>
						<select name = "poli" required>
							<option disabled selected>Pilih poli</option>
							<option>Saraf</option>
							<option>Mata</option>
							<option>Penyakit Dalam</option>
							<option>Bedah</option>
						</select>
					</div>
					<div class="input-field">
						<label>Diagnosa</label>
						<input type="text" name = "diagnosa" required>
					</div>
					<div class="input-field">
						<label>Nama Dokter</label>
						<select name = "nama_dokter" required>
							<option disabled selected>Pilih dokter</option>
							<option>Dr. Melisa, Sp.PD</option>
							<option>Dr. Fahri Reza, Sp.PD</option>
							<option>Dr. Asep Ema Prawiradilaga, Sp.PD</option>
							<option>Dr. Ismulat Rahmawati, Sp.PD</option>
						</select>
					</div>
					<div class="input-field">
						<label>Riwayat Keluarga</label>
						<select name = "riwayat_keluarga" required>
							<option disabled selected></option>
							<option>Ada</option>
							<option>Tidak</option>
						</select>
					</div>
					<div class="input-field">
						<label>Tekanan Darah</label>
						<input type="text" name = "tekanan_darah" required>
					</div>
					<div class="input-field">
						<label>Obat</label>
						<input type="text" name = "obat" required>
					</div>
					<div class="input-field">
						<label>Gula Darah Sebelum Puasa</label>
						<input type="number" name = "guladarah_sebelum" required>
					</div>																	
					<div class="input-field">
						<label>Riwayat Penyakit</label>
						<input type="text" name = "riwayat_penyakit" required>
					</div>
					<div class="input-field">
						<label>Gula Darah Setelah Puasa</label>
						<input type="number" name = "guladarah_setelah" required>
					</div>
					<div class="input-field">
						<label>Penyakit Lain</label>
						<input type="text" name = "penyakit_lain" required>
					</div>
					<div class="input-field">
						<label>Kreatinin Darah</label>
						<input type="text" name = "kreatinin_darah" required>
					</div>
					<div class="input-field">
						<label>Rawat Inap</label>
						<select name = "rawat_inap" required>
							<option disabled selected>Pilih rawat inap</option>
							<option>Ya</option>
							<option>Tidak</option>
						</select>
					</div>
					<div class="input-field">
						<label>Cholestrol Total</label>
						<input type="text" name = "cholestrol_total" required>
					</div>
					<div class="input-field">
						<label>Tanggal Masuk</label>
						<input type="date" name = "tanggal_masuk" required>
					</div>
					<div class="input-field">
						<label>Cholestrol HDL</label>
						<input type="text" name = "cholestrol_hdl" required>
					</div>
					<div class="input-field">
						<label>Tanggal Keluar</label>
						<input type="date" name = "tanggal_keluar" required>
					</div>
					<div class="input-field">
						<label>Trigleserida</label>
						<input type="text" name = "trigleserida"required>
					</div>
					<div class="input-field">
						<label>Poli Rujukan</label>
						<select name = "poli_rujukan" required>
							<option disabled selected>Pilih</option>
							<option>Saraf</option>
							<option>Mata</option>
							<option>Bedah</option>
						</select>
					</div>
				</div>
				<div class="input-field">
					<button class="submitBtn" name="submit_rawatjalan">
						<span class="btnText">Simpan</span>
					</button>
				</div>
			</form>
		</div>
		<!-- Rekam Medis -->
    </section>
    <!-- END Navigation Bar -->

	<?php
		include "../PHP/koneksi.php";

		if (isset($_POST['submit_rawatjalan'])) {
			mysqli_query($koneksi, "INSERT INTO tabel_rawatjalan SET
			pasien_id = '$_POST[id_pasien]',
			poli_nama = '$_POST[poli]',
			poli_dokter = '$_POST[nama_dokter]',
			pasien_tekanandarah = '$_POST[tekanan_darah]',
			pasien_guladarahb = '$_POST[guladarah_sebelum]',
			pasien_guladaraha = '$_POST[guladarah_setelah]',
			pasien_kreatinin = '$_POST[kreatinin_darah]',
			pasien_cholestrolt = '$_POST[cholestrol_total]',
			pasien_cholestrolhdl = '$_POST[cholestrol_hdl]',
			pasien_trigleserida = '$_POST[trigleserida]',
			pasien_cholestrolddl = '$_POST[cholestrol_ddl]',
			pasien_diagnosa = '$_POST[diagnosa]',
			pasien_isriwayatkeluarga = '$_POST[riwayat_keluarga]',
			pasien_obat = '$_POST[obat]',
			pasien_riwayatpenyakit = '$_POST[riwayat_penyakit]',
			pasien_penyakitlain = '$_POST[penyakit_lain]',
			rawat_inap = '$_POST[rawat_inap]',
			tanggal_masuk = '$_POST[tanggal_masuk]',
			tanggal_keluar = '$_POST[tanggal_keluar]',
			poli_rujukan = '$_POST[poli_rujukan]'
			");
		}


	?>


    <!-- JS -->
    <script src="../JS/Script.js"></script>
    <!-- END JS -->
</body>
</html>