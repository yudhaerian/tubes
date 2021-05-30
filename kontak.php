<h2>Data Kontak</h2> 
<table  class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Nama </th>
			<th>No Telepon</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		
		<?php $ambil=$koneksi->query("SELECT * FROM kontak"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['id_kontak']; ?></td>
			<td><?php echo $pecah['kategori_kontak']; ?></td>
			<td><?php echo $pecah['nama_kontak']; ?></td>
			<td><?php echo $pecah['telp']; ?></td>
			<td><?php echo $pecah['alamat']; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td>
				<a href="index.php?halaman=hapuskontak&id=<?php echo $pecah['id_kontak']; ?>" class="btn btn-outline-danger">hapus</a>
				<a href="index.php?halaman=ubahkontak&id=<?php echo $pecah ['id_kontak']?>" class="btn btn-outline-dark">ubah</a>
			</td>
		</tr>
		
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahkontak" class="btn btn-dark">Tambah Data</a>