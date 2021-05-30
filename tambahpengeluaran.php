<h2>Tambah Pengeluaran</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>ID Pengeluaran</label>
        <input type="text" class="form-control" name="id_pengeluaran" >
    </div>
    <div class="form-group">
    	<label>Tanggal</label>
    	<input type="date" class="form-control" name="tgl">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" class="form-control" name="kategori" placeholder="(Biaya operasional, penggajian) ">
    </div>
    <div class="form-group">
    	<label>Pengeluaran</label>
    	<input type="text" class="form-control" name="pengeluaran">
    </div>
    <!-- <div class="form-group">
    	<label>Sub Total</label>
    	<input type="text" class="form-control" name="total">
    </div> -->
    <button class="btn btn-dark" name="save">Tambah </button>
</form>
<?php 
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO pengeluaran
	(id_pengeluaran,tgl,kategori,pengeluaran)
	VALUES('$_POST[id_pengeluaran]','$_POST[tgl]','$_POST[kategori]','$_POST[pengeluaran]')");

	echo "<div class='alert alert-dark'>Data Tersimpan</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=pengeluaran'>";

}
?>