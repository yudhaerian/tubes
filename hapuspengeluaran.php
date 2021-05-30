<?php
$koneksi->query("DELETE FROM pengeluaran WHERE id_pengeluaran='$_GET[id]'");


echo "<div class='alert alert-primary'>Data Pengeluaran Terhapus</div>
<meta http-equiv='refresh' content='1;url=index.php?halaman=pengeluaran'>";


 
?>