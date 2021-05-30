<?php
$koneksi->query("DELETE FROM pembayaran WHERE id_pembayaran='$_GET[id]'");

echo "<script>alert('Data Pembayaran Terhapus');</script>";
echo "<script>location='index.php?halaman=pembayaran';</script>";
 
?>