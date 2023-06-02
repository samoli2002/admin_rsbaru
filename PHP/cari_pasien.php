<?php
	if (isset($_POST['search_idpasien'])) {
		include "../PHP/koneksi.php";
		$search = $_POST['search_idpasien'];
		$data = mysqli_query($koneksi, "SELECT * FROM tabel_pasien WHERE pasien_id LIKE '%".$search."%'");

		while ($tampil = mysqli_fetch_array($data)) {
			

?>

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

<?php }} ?>