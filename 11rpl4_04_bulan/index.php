<!DOCTYPE html>
<html>
<head>
	<title>TOKO BULAN</title>
</head>
<body>
 
	<h2>TOKO BULAN</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH DATA BARANG</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Satuan Barang</th>
			<th>Stok Barang</th>
            <th>Harga Barang</th>
            <th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_toko");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kodeBarang']; ?></td>
				<td><?php echo $d['namaBarang']; ?></td>
				<td><?php echo $d['satuanBarang']; ?></td>
                <td><?php echo $d['stokBarang']; ?></td>
                <td><?php echo $d['hargaBarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>