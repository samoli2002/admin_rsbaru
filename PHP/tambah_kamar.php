<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/tambahKamar.css">
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

         <!-- Pages -->
         <main>
			<h1 class="title">Tambah Kamar</h1>

        <!-- Kamar -->
    
        <div class="container">
			<form action="" method="POST" autocomplete="off">
				<div class="fields">

                <div class="input-field">
                        <label>Kamar ID</label>
                        <input type="text" name="id_kamar" required>
                    </div>

                    <div class="input-field">
                        <label>Nama Kamar</label>
                            <select name = "nama_kamar" required>
                                <option disabled selected>Select</option>
                                <option value="Anggrek">Anggrek</option>
                                <option value="Melati">Melati</option>
                                <option value="Mawar">Mawar</option>
                                <option value="Aster">Aster</option>
                            </select>
                    </div>

                    <div class="input-field">
                        <label>Kelas</label>
                            <select name = "kelas_kamar" required>
                                <option disabled selected>Select</option>
                                <option value="VIP">VIP</option>
                                <option value="Kelas 1">Kelas 1</option>
                                <option value="Kelas 2">Kelas 2</option>
                                <option value="Kelas 3">Kelas 3</option>
                            </select>
                    </div>

                    <div class="input-field">
                            <label>Nomor Kamar</label>
                            <select name = "no_kamar" required>
                                <option disabled selected>Select</option>
                                <option value="101">101</option>
                                <option value="102">102</option>
                                <option value="103">103</option>
                                <option value="201">201</option>
                                <option value="202">202</option>
                                <option value="203">203</option>
                                <option value="301">301</option>
                                <option value="302">302</option>
                                <option value="303">303</option>
                            </select>
                    </div>

                    <div class="input-field">
                        <label>Biaya kamar</label>
                        <input type="number" name="kamar_biaya" required>
                    </div>

                    <div class="input-field">
                            <label>Status Kamar</label>
                            <select name = "status_kamar" required>
                                <option disabled selected>Select</option>
                                <option value="Terisi">Terisi</option>
                                <option value="Kosong">Kosong</option>
                            </select>
                    </div>

				</div>


				<div class="input-field">
                    <button class="submit_kamar" name = "submit_kamar">
                        <span class="caribtnText">Submit</span>
                    </button>
				</div>
			</form>
		</div>

        <table class="laporan_kamar">
			<thead>
				<tr>
                    <th>Kode Kamar</th>
					<th>Nama Kamar</th>
					<th>Kelas Kamar</th>
					<th>Nomor Kamar</th>
					<th>Biaya Kamar</th>
					<th>Status Kamar</th>
                    <th colspan="2">Aksi</th>
				</tr>
			</thead>
			<?php
				include "../PHP/koneksi.php";
				$ambil_data = mysqli_query($koneksi,"SELECT * FROM tabel_kamar");
				while ($tampil = mysqli_fetch_array($ambil_data)) {
					echo "
					<tbody>
					<tr>
						<td>$tampil[kamar_id]</td>
						<td>$tampil[kamar_nama]</td>
						<td>$tampil[kamar_kelas]</td>
                        <td>$tampil[kamar_no]</td>
						<td>$tampil[kamar_biaya]</td>
						<td>$tampil[kamar_status]</td>
                        <td><button class = 'b1'><a href='?kode=$tampil[kamar_id]'><img src = '../img/bin.png'></img></a></button></td>
						<td><button class = 'b2'><a href='../PHP/ubah_datapasien.php?kode=$tampil[kamar_id]'><img src = '../img/pencil.png'></img></a></button></td>
					</tr>
					</tbody>
					";
				}
			?>
		</table>
    </section>

    <?php
		include "../PHP/koneksi.php";
        
		if (isset($_POST['submit_kamar'])) {
			mysqli_query($koneksi, "INSERT INTO tabel_kamar SET
            kamar_id = '$_POST[id_kamar]',
			kamar_nama = '$_POST[nama_kamar]', 
			kamar_kelas = '$_POST[kelas_kamar]',
			kamar_no = '$_POST[no_kamar]',
			kamar_biaya ='$_POST[kamar_biaya]',
			kamar_status ='$_POST[status_kamar]'");
		}
	?>

    <!-- END Navigation Bar -->




    <!-- JS -->
    <script src="../JS/Script.js"></script>
    <!-- END JS -->
	</body>
</html>