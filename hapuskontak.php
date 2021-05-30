<?php
$koneksi->query("DELETE FROM kontak WHERE id_kontak='$_GET[id]'");


echo "<div class='alert alert-primary'>Data Kontak Terhapus</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=kontak'>";
// echo "<script>alert('Data Pembayaran Terhapus');</script>";
// echo "<script>location='index.php?halaman=kontak';</script>";
 
?>