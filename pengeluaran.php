<h2>Data Pengeluaran</h2> 
<table  class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Tanggal</th>
			<th>Kategori</th>
			<th>Pengeluaran</th>
            <!-- <th>Sub Total</th> -->
            <th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM pengeluaran"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['id_pengeluaran']; ?></td>
			<td><?php echo $pecah['tgl']; ?></td>
			<td><?php echo $pecah['kategori']; ?></td>
			<td><?php echo $pecah['pengeluaran']; ?></td>
			
			<td>
				<a href="index.php?halaman=hapuspengeluaran&id=<?php echo $pecah['id_pengeluaran']; ?>" class="btn btn-outline-danger">hapus</a>
				<a href="index.php?halaman=ubahpengeluaran&id=<?php echo $pecah ['id_pengeluaran']?>" class="btn btn-outline-dark">ubah</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpengeluaran" class="btn btn-dark">Tambah Data</a>