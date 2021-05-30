<h2>Ubah Data Pelanggan</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM kontak WHERE id_kontak='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>Kategori</label>
        <input type="text" name="kategorikontak" class="form-control" value="<?php echo $pecah['kategori_kontak']; ?>">
    </div>
    <div class="form-group">
        <label>Nama Kontak</label>
        <input type="text" name="namakontak" class="form-control" value="<?php echo $pecah['nama_kontak']; ?>">
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" name="telp" class="form-control" value="<?php echo $pecah['telp']; ?>">
    </div>
    <div class="form-group">
    	<label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $pecah['alamat']; ?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $pecah['email']; ?>">
    </div>
    <button class="btn btn-dark" name="ubah">Ubah</button>
    
<?php
if (isset($_POST['ubah']))
{
	$koneksi->query("UPDATE kontak SET kategori_kontak='$_POST[kategorikontak]',nama_kontak='$_POST[namakontak]',telp='$_POST[telp]',alamat='$_POST[alamat]',email='$_POST[email]' WHERE id_kontak='$_GET[id]'");

echo "<div class='alert alert-dark'>Data Kontak Telah diubah</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=kontak'>";
}
?>