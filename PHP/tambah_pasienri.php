<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/rawatinaptp.css">
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
					<li><a href="#">Tambah Pasien</a></li>
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
			<h1 class="title">Tambah Pasien</h1>

        <!-- Kamar -->
        <div class="container">
			<form action="" method="POST" autocomplete="off">
				<div class="fields">
                    <div class="input-field">
                        <label>No Rekam Medis</label>
                        <input type="text" name="no_rekammedis">
                    </div>

                    <div class="input-field">
                        <label>ID Kamar</label>
                        <input type="text" name="id_kamar">
                    </div>

                    <div class="input-field">
                        <label>Tanggal masuk</label>
                        <input type="date" name="tanggal_masuk">
                    </div>

				</div>


				<div class="input-field">
                    <button class="checkIn" name = "checkIn">
                        <span class="check_in">Check In</span>
                    </button>
				</div>
			</form>
		</div>
    </section>
    <!-- END Navigation Bar -->

    <?php
		include "../PHP/koneksi.php";

		if (isset($_POST['checkIn'])) {
			mysqli_query($koneksi, "INSERT INTO tabel_rawatinaptp SET
			rm_no = '$_POST[no_rekammedis]',
            kamar_id = '$_POST[id_kamar]',
			tanggal_masuk = '$_POST[tanggal_masuk]'
			");
		}
	?>


    <!-- JS -->
    <script src="../JS/Script.js"></script>
    <!-- END JS -->
</body>
</html>