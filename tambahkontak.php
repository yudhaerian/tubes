<h2>Tambah Kontak</h2>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
    	<label>Id Kontak</label>
        <input type="text" class="form-control" name="idkontak" >
    </div>
	<div class="form-group">
    	<label>Kategori</label>
        <input type="text" class="form-control" name="kategorikontak" placeholder="(Karyawan, Reseller dan Customer)">
    </div>
    <div class="form-group">
    	<label>Nama Kontak</label>
    	<input type="text" class="form-control" name="namakontak">
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" class="form-control" name="telp">
    </div>
    <div class="form-group">
    	<label>Alamat</label>
    	<input type="text" class="form-control" name="alamat">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <button class="btn btn-dark" name="save">Tambah </button>
</form>
<?php 
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO kontak
	(id_kontak,kategori_kontak,nama_kontak,telp,alamat,email)
	VALUES('$_POST[idkontak]','$_POST[kategorikontak]','$_POST[namakontak]','$_POST[telp]','$_POST[alamat]','$_POST[email]')");

	echo "<div class='alert alert-dark'>Data Tersimpan</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=kontak'>";

}
?>