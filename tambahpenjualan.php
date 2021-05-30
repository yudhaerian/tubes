<h2>Tambah Penjualan</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>ID Penjualan</label>
        <input type="text" class="form-control" name="id_jual" >
    </div>
    <div class="form-group">
    	<label>Tanggal</label>
    	<input type="date" class="form-control" name="tgl">
    </div>
    <div class="form-group">
        <label>Customer</label>
        <input type="text" class="form-control" name="customer" >
    </div>
    <div class="form-group">
    	<label>No Telepon</label>
    	<input type="text" class="form-control" name="no_telp">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" class="form-control" name="kategori" placeholder="(Ecer, Paket, Grosir)">
    </div>
    <div class="form-group">
    	<label>Produk</label>
    	<input type="text" class="form-control" name="produk">
    </div>
    <div class="form-group">
    	<label>Harga</label>
    	<input type="text" class="form-control" name="harga">
    </div>
    <div class="form-group">
    	<label>Jumlah</label>
    	<input type="text" class="form-control" name="jumlah">
    </div>
    <div class="form-group">
    	<label>Sub Total</label>
    	<input type="text" class="form-control" name="total">
    </div>
    <button class="btn btn-dark" name="save">Tambah </button>
</form>
<?php 
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO penjualan
	(id_jual,tgl,customer,no_telp,kategori,produk,harga,jumlah,total)
	VALUES('$_POST[id_jual]','$_POST[tgl]','$_POST[customer]','$_POST[no_telp]','$_POST[kategori]','$_POST[produk]','$_POST[harga]','$_POST[jumlah]','$_POST[total]')");

	echo "<div class='alert alert-dark'>Data Tersimpan</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=penjualan'>";

}
?>