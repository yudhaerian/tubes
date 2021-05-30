<h2>Ubah Menu</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM menu WHERE id_menu='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>Nama Menu</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_menu']; ?>">
    </div>
    <div class="form-group">
    	<label>Harga (Rp)</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_menu']; ?>">
    </div>

    <div class="form-group">
    	<img src="../tubes/foto_menu/<?php echo $pecah['foto_menu'] ?>" width="200">
    </div>
    <div class="form-group">
    	<label>Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <button class="btn btn-dark" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah']))
{
	$namafoto=$_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];
	
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../tubes/foto_menu/$namafoto");
		$koneksi->query("UPDATE menu SET nama_menu='$_POST[nama]',harga_menu='$_POST[harga]',foto_menu='$namafoto' WHERE id_menu='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE menu SET nama_menu='$_POST[nama]',harga_menu='$_POST[harga]' WHERE id_menu='$_GET[id]'");
	}
	
	
echo "<div class='alert alert-dark'>Data Telah diubah</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=menu'>";

}
?>