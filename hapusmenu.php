<?php

$ambil = $koneksi->query("SELECT * FROM menu WHERE id_menu='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotomenu = $pecah['foto_menu'];
if (file_exists("../foto_menu/$fotomenu"))
{
	unlink("../foto_menu/$fotomenu");
}


$koneksi->query("DELETE FROM menu WHERE id_menu='$_GET[id]'");

echo "<script>alert('menu terhapus');</script>";
echo "<script>location='index.php?halaman=menu';</script>";
 
?>