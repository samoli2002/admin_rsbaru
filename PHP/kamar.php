<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/kamar.css">
    <title>Kamar Rawat Inap | AdminSite</title>
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
				<a href="RawatInap.html"><i class="fa-solid fa-people-group icon"></i> Rawat Inap<i class='bx bx-chevron-right icon-right' ></i> </a>
                <ul class="side-dropdown">
					<li><a href="#">Kamar</a></li>
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

         <!-- Pages -->
         <main>
			<h1 class="title">Kamar</h1>
        
            <button class="tambahBtn">
                <a href="../PHP/tambah_kamar.php" style="color: white;"><span class="btnText">Tambah Kamar</span></a>
            </button>
        <!-- Kamar -->

        <div class="container">
			<form action="" method="POST" autocomplete="off">
				<div class="fields">
                    <div class="input-field">
                        <label>Nama Kamar</label>
                            <select name = "nama_kamar" required>
                                <option disabled selected>Select</option>
                                <option>Anggrek</option>
                                <option>Melati</option>
                                <option>Mawar</option>
                                <option>Aster</option>
                            </select>
                    </div>

                    <div class="input-field">
                        <label>Kelas</label>
                            <select name = "kelas_kamar" required>
                                <option disabled selected>Select</option>
                                <option>VIP</option>
                                <option>Kelas 1</option>
                                <option>Kelas 2</option>
                                <option>Kelas 3</option>
                            </select>
                    </div>

                    <div class="input-field">
                            <label>Status Kamar</label>
                            <select name = "status_kamar" required>
                                <option disabled selected>Select</option>
                                <option>Tersedia</option>
                                <option>Tidak Tersedia</option>
                            </select>
                    </div>


				</div>


				<div class="input-field">
                    <button class="cariBtn" name = "cari_kamar:>
                        <span class="caribtnText">Cari</span>
                    </button>
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
     </div>
    
     <table class="laporan_kamar">
			<thead>
				<tr>
					<th>Nama Kamar</th>
					<th>Kelas Kamar</th>
					<th>Jumlah Kamar</th>
					<th>Kamar Terpakai</th>
				</tr>
			</thead>
			<?php
				include "../PHP/koneksi.php";
				$ambil_data = mysqli_query($koneksi,"SELECT kamar_nama, kamar_kelas FROM tabel_kamar");
				while ($tampil = mysqli_fetch_array($ambil_data)) {
					echo "
					<tbody>
					<tr>
						<td>$tampil[kamar_nama]</td>
						<td>$tampil[kamar_kelas]</td>
                  <td class = 'counterJlmkamar'>24</td>
                  <td class = 'counterTerpakai'>1</td>
					</tr>
					</tbody>
					";
				}
			?>
		</table>

</div>
    </section>
    <!-- END Navigation Bar -->




    <!-- JS -->
    <script src="../JS/Script.js"></script>
    <!-- END JS -->
</body>
</html>
        
