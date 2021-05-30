<h2>Data Pembayaran</h2> 
<table  class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Admin</th>
			<th>Nama Pelanggan</th>
			<th>Menu</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=$koneksi->query("SELECT * FROM pembayaran"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['id_admin']; ?></td>
			<td><?php echo $pecah['id_pelanggan']; ?></td>
			<td><?php echo $pecah['id_menu']; ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td>Rp. <?php echo $pecah['harga']; ?></td>
			<td>
				<a href="index.php?halaman=hapuspembayaran&id=<?php echo $pecah['id_pembayaran']; ?>" class="btn btn-outline-danger">hapus</a>
				<a href="index.php?halaman=ubahpembayaran&id=<?php echo $pecah ['id_pembayaran']?>" class="btn btn-outline-dark">ubah</a>
			</td>
		</tr>
		<?php $nomor++ ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpembayaran" class="btn btn-dark">Tambah Data</a>