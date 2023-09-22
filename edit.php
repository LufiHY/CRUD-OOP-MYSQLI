<?php 	
include 'database.php';
$db = new database();
$data_barang = $db->tampil_edit($_GET['id_barang']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach($data_barang as $row){
        ?>
    <form action="proses_barang.php?aksi=edit" method="POST">
        <label>INPUT NAMA BARANG</label>
        <input type="text" name="id_barang" value="<?php echo $row['id_barang'] ?>" readonly >
        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang'] ?>" >
        <input type="text" name="harga_barang" value="<?php echo $row['harga_barang']; ?>" >
        <input type="text" name="berat_barang" value="<?php echo $row['berat_barang'] ?>" >
        <input type="number" name="stok" value="<?php echo $row['stok']; ?>">
        <input type="date" name="tgl_exp" value="<?php echo $row['tgl_exp']; ?>" >
        <input type="submit" value="SIMPAN">
    </form>
    <?php
    }
    ?>
</body>
</html>