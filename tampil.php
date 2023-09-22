<?php 	
include 'database.php';
$db = new database();
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="input.php">Input Data</a>
<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Harga barang</th>
			<th>Berat barang</th>
			<th>Stok</th>
			<th>Tanggal Exp</th>
			<th>Action</th>
		</tr>
		<?php 
		
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_barang']; ?></td>
				<td><?php echo $row['harga_barang']; ?></td>
				<td><?php echo $row['berat_barang']; ?></td>
				<td><?php echo $row['stok']; ?></td>
				<td><?php echo $row['tgl_exp']; ?></td>
				<td><a href="edit.php?id_barang=<?php echo $row['id_barang'];?>&aksi=edit">Edit</a>
				
				<a href="proses_barang.php?id_barang=<?php echo $row['id_barang']; ?>&aksi=hapus">Hapus</a>
		</td>
			</tr>
			<?php 
		} 
		?>
	</table>
</body>
</html>