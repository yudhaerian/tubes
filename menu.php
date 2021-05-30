<h2>Data Menu</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM menu"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_menu']; ?></td>
			<td>Rp. <?php echo $pecah['harga_menu']; ?></td>
			<td>
				<img src="../tubes/foto_menu/<?php echo $pecah['foto_menu']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=hapusmenu&id=<?php echo $pecah['id_menu']; ?>" class="btn-outline-danger btn">hapus</a>
				<a href="index.php?halaman=ubahmenu&id=<?php echo $pecah ['id_menu']?>" class="btn btn-outline-dark">ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>

	</tbody>
</table>
<a href="index.php?halaman=tambahmenu" class="btn btn-dark">Tambah Data</a>