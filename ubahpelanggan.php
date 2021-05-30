<h2>Ubah Data Pelanggan</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_pelanggan']; ?>">
    </div>
    <div class="form-group">
    	<label>Telepon</label>
        <input type="number" name="telepon" class="form-control" value="<?php echo $pecah['telepon_pelanggan']; ?>">
    </div>
    <div class="form-group">
    	<label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $pecah['alamat_pelanggan']; ?>">
    </div>
    <button class="btn btn-dark" name="ubah">Ubah</button>
    
<?php
if (isset($_POST['ubah']))
{
	$koneksi->query("UPDATE pelanggan SET nama_pelanggan='$_POST[nama]',telepon_pelanggan='$_POST[telepon]',alamat_pelanggan='$_POST[alamat]' WHERE id_pelanggan='$_GET[id]'");

    echo "<div class='alert alert-dark'>Data Pelanggan Telah diubah</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";
}
?>