<h2>Data Penjualan</h2> 
<table  class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Tanggal</th>
			<th>Customer</th>
			<th>No Telepon</th>
			<th>Kategori</th>
			<th>Produk</th>
			<th>Harga</th>
            <th>Jumlah</th>
            <th>Sub Total</th>
            <th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM penjualan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['id_jual']; ?></td>
			<td><?php echo $pecah['tgl']; ?></td>
			<td><?php echo $pecah['customer']; ?></td>
			<td><?php echo $pecah['no_telp']; ?></td>
			<td><?php echo $pecah['kategori']; ?></td>
            <td><?php echo $pecah['produk']; ?></td>
			<td><?php echo $pecah['harga']; ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td><?php echo $pecah['total']; ?></td>
			<td>
				<a href="index.php?halaman=hapuspenjualan&id=<?php echo $pecah['id_jual']; ?>" class="btn btn-outline-danger">hapus</a>
				<a href="index.php?halaman=ubahpenjualan&id=<?php echo $pecah ['id_jual']?>" class="btn btn-outline-dark">ubah</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpenjualan" class="btn btn-dark">Tambah Data</a>