<?php
$koneksi->query("DELETE FROM penjualan WHERE id_jual='$_GET[id]'");


echo "<div class='alert alert-primary'>Data Penjualan Terhapus</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=penjualan'>";

 
?>