<h2>Tambah Pelanggan</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>Nama </label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
    	<label>Telepon</label>
    	<input type="number" class="form-control" name="telepon">
    </div>
    <div class="form-group">
    	<label>Alamat</label>
    	<input type="text" class="form-control" name="alamat">
    </div>
    <button class="btn btn-dark" name="save">Simpan</button><br>
</form>
<?php 
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO pelanggan
	(nama_pelanggan,telepon_pelanggan,alamat_pelanggan)
	VALUES('$_POST[nama]','$_POST[telepon]','$_POST[alamat]')");

	echo "<div class='alert alert-dark'>Data Tersimpan</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";

}
?>