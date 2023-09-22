<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_barang.php?aksi=tambah" method="POST">
        <label>INPUT NAMA BARANG</label>
        <input type="text" name="nama_barang" placeholder="nama barang">
        <input type="text" name="harga_barang" placeholder="harga barang">
        <input type="text" name="berat_barang" placeholder="berat barang">
        <input type="number" name="stok" placeholder="stok">
        <input type="date" name="tgl_exp" >
        <input type="submit" value="SIMPAN">
    </form>
</body>
</html>