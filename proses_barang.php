<?php 
include 'database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input_barang($_POST['nama_barang'],
	$_POST['harga_barang'],$_POST['berat_barang'],
	$_POST['stok'],$_POST['tgl_exp']);
 	header("location:tampil.php");
 }elseif($aksi == "hapus"){ 	
$db->hapus_barang($_GET['id_barang']);
header("location:tampil.php");
}elseif($aksi == "edit"){
$db->edit_barang($_POST['id_barang'],$_POST['nama_barang'],$_POST['harga_barang'],$_POST['berat_barang'],$_POST['stok'],$_POST['tgl_exp']);
	header("location:tampil.php");
 }
