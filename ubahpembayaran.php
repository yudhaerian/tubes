<h2>Ubah Data Pelanggan</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM pembayaran WHERE id_pembayaran='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>Nama Admin</label>
        <input type="text" name="namaadmin" class="form-control" value="<?php echo $pecah['id_admin']; ?>">
    </div>
    <div class="form-group">
        <label>Nama Pelanggan</label>
        <input type="text" name="namapelanggan" class="form-control" value="<?php echo $pecah['id_pelanggan']; ?>">
    </div>
    <div class="form-group">
        <label>Menu</label>
        <input type="text" name="menu" class="form-control" value="<?php echo $pecah['id_menu']; ?>">
    </div>
    <div class="form-group">
    	<label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control" value="<?php echo $pecah['jumlah']; ?>">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga']; ?>">
    </div>
    <button class="btn btn-dark" name="ubah">Ubah</button>
    
<?php
if (isset($_POST['ubah']))
{
	$koneksi->query("UPDATE pembayaran SET id_admin='$_POST[namaadmin]',id_pelanggan='$_POST[namapelanggan]',id_menu='$_POST[menu]',jumlah='$_POST[jumlah]',harga='$_POST[harga]' WHERE id_pembayaran='$_GET[id]'");

echo "<div class='alert alert-dark'>Data Pembayaran Telah diubah</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=pembayaran'>";
}
?>