<h2>Ubah Data Pengeluaran</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM pengeluaran WHERE id_pengeluaran='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>Tanggal</label>
        <input type="date" name="tgl" class="form-control" value="<?php echo $pecah['tgl']; ?>">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control" value="<?php echo $pecah['kategori']; ?>">
    </div>
    <div class="form-group">
    	<label>Pengeluaran</label>
        <input type="text" name="pengeluaran" class="form-control" value="<?php echo $pecah['pengeluaran']; ?>">
    </div>
    
    <button class="btn btn-dark" name="ubah">Ubah</button>
    
<?php
if (isset($_POST['ubah']))
{
	$koneksi->query("UPDATE pengeluaran SET tgl='$_POST[tgl]',kategori='$_POST[kategori]',pengeluaran='$_POST[pengeluaran]' WHERE id_pengeluaran='$_GET[id]'");

echo "<div class='alert alert-dark'>Data Pengeluaran Telah diubah</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=pengeluaran'>";
}
?>