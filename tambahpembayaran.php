<h2>Tambah Pembayaran</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>Nama Admin</label>
        <input type="text" class="form-control" name="namaadmin">
    </div>
    <div class="form-group">
    	<label>Nama Pelanggan</label>
    	<input type="text" class="form-control" name="namapelanggan">
    </div>
    <div class="form-group">
        <label>Menu</label>
        <input type="text" class="form-control" name="menu">
    </div>
    <div class="form-group">
    	<label>Jumlah Pesanan</label>
    	<input type="number" class="form-control" name="jumlah">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <button class="btn btn-dark" name="save">Tambah </button>
</form>
<?php 
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO pembayaran
	(id_admin,id_pelanggan,id_menu,jumlah,harga)
	VALUES('$_POST[namaadmin]','$_POST[namapelanggan]','$_POST[menu]','$_POST[jumlah]','$_POST[harga]')");

	echo "<div class='alert alert-dark'>Data Tersimpan</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=pembayaran'>";

}
?>