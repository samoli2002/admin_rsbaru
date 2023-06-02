<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/dataPasien.css">
	 <script src="../JS/jquery.min.js"></script>

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
			<h1 class="title">DATABASE PASIEN</h1>
			
			<div class="tbl_tambah">
			<button class="tambahPasien" name="tambah_pasien">
				<a href="../PHP/data_pasien.php">
					<span class="btnText" >Tambah</span>
				</a>
			</button>
			</div>

		<div class="containera">
			<form action="" method="POST" autocomplete="off">
				<div class="fieldsa">
					<div class="input-fielda">
						<label>ID Pasien</label>
						<input type="text" name="cari_idpasien" placeholder="Cari ID Pasien" id="keyword">

						<button class="searchBtn" name="search_idpasien" id="tbl_cari">
							<span class="btnText" >Cari</span>
						</button>
					</div>
				</div>

			</form>
		</div>

		<div class="filter_table">
			<select name="filter" id="filter">
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
			</select>
			<label for="choose_filter">Records per page</label>
		</div>

		<table class="laporan_pasien" id="tampil">
			<thead>
				<tr>
					<th>ID Pasien</th>
					<th>Nama Pasien</th>
					<th>Usia</th>
					<th>Jenis kelamin</th>
					<th>Tinggi badan</th>
					<th>Berat badan</th>
					<th>Tempat lahir</th>
					<th>Tanggal lahir</th>
					<th>Alamat</th>
					<th>Pekerjaan</th>
					<th>Nomor Telepon</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
			<?php
				include "../PHP/koneksi.php";
				$ambil_data = mysqli_query($koneksi,"SELECT * FROM tabel_pasien");
				while ($tampil = mysqli_fetch_array($ambil_data)) {
					echo "
					<tbody>
					<tr>
						<td>$tampil[pasien_id]</td>
						<td>$tampil[pasien_nama]</td>
						<td>$tampil[pasien_usia]</td>
						<td>$tampil[pasien_jeniskelamin]</td>
						<td>$tampil[pasien_tinggi]</td>
						<td>$tampil[pasien_berat]</td>
						<td>$tampil[pasien_tempatlahir]</td>
						<td>$tampil[pasien_tanggallahir]</td>
						<td>$tampil[pasien_alamat]</td>
						<td>$tampil[pasien_pekerjaan]</td>
						<td>$tampil[pasien_notelepon]</td>
						<td><button class = 'b1'><a href='?kode=$tampil[pasien_id]'><img src = '../img/bin.png'></img></a></button></td>
						<td><button class = 'b2'><a href='../PHP/ubah_datapasien.php?kode=$tampil[pasien_id]'><img src = '../img/pencil.png'></img></a></button></td>
					</tr>
					</tbody>
					";
				}
			?>
		</table>
		<?php
			if (isset($_GET['kode'])) {
				mysqli_query($koneksi, "DELETE FROM tabel_pasien WHERE pasien_id = '$_GET[kode]'");
				echo "<meta http-equiv=refresh content=0;URL='../PHP/laporan_datapasien.php'>";
			}
		?>
		<!-- Rekam Medis -->
    </section>
    <!-- END Navigation Bar -->

    <!-- JS -->
    <script src="../JS/Script.js"></script>

	 <script>
		$(document).ready(function() {
			$("#keyword").keyup(function() {
				$.ajax({
					type: 'POST',
					url: '../PHP/cari_pasien.php',
					data: {
						search: $(this).val()
					},
					cache: false,
					success: function(data) {
						$("#tampil").html(data);
					}
				})
			})
		})
	 </script>
    <!-- END JS -->
	</main>
</body>
</html>

