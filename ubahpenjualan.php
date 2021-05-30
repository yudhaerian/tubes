<h2>Ubah Data Penjualan</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM penjualan WHERE id_jual='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>Tanggal</label>
        <input type="date" name="tgl" class="form-control" value="<?php echo $pecah['tgl']; ?>">
    </div>
    <div class="form-group">
        <label>Customer</label>
        <input type="text" name="customer" class="form-control" value="<?php echo $pecah['customer']; ?>">
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" name="telp" class="form-control" value="<?php echo $pecah['no_telp']; ?>">
    </div>
    <div class="form-group">
    	<label>Kategori</label>
        <input type="text" name="kategori" class="form-control" value="<?php echo $pecah['kategori']; ?>">
    </div>
    <div class="form-group">
        <label>Produk</label>
        <input type="text" name="produk" class="form-control" value="<?php echo $pecah['produk']; ?>">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control" value="<?php echo $pecah['harga']; ?>">
    </div>
    <div class="form-group">
        <label>Jumlah</label>
        <input type="text" name="jumlah" class="form-control" value="<?php echo $pecah['jumlah']; ?>">
    </div>
    <div class="form-group">
        <label>Sub Total</label>
        <input type="text" name="total" class="form-control" value="<?php echo $pecah['total']; ?>">
    </div>
    <button class="btn btn-dark" name="ubah">Ubah</button>
    
<?php
if (isset($_POST['ubah']))
{
	$koneksi->query("UPDATE penjualan SET tgl='$_POST[tgl]',customer='$_POST[customer]',no_telp='$_POST[no_telp]',kategori='$_POST[kategori]',produk='$_POST[produk]',harga='$_POST[harga]',jumlah='$_POST[jumlah]',total='$_POST[total]', WHERE id_kontak='$_GET[id]'");

echo "<div class='alert alert-dark'>Data Penjualan Telah diubah</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=penjualan'>";
}
?>