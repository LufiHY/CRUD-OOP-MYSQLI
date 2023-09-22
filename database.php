<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "multi_user";
	var $koneksi="";

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	
	}

    function tampil_data(){
		$data = mysqli_query($this->koneksi, "SELECT * FROM barang");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function input_barang($nama_barang,$harga_barang,$berat_barang,$stok,$tgl_exp){
	mysqli_query($this->koneksi,"INSERT INTO barang
	VALUES('','$nama_barang','$harga_barang',
	'$berat_barang','$stok','$tgl_exp')");
	}	

	function hapus_barang($id_barang){
		mysqli_query($this->koneksi, "DELETE FROM barang WHERE id_barang='$id_barang'");
	}

	function tampil_edit($id_barang){
		$data = mysqli_query($this->koneksi, 
		"SELECT * FROM barang WHERE id_barang='$id_barang'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	
	function edit_barang($id_barang,$nama_barang,$harga_barang,$berat_barang,$stok,$tgl_exp){
		mysqli_query($this->koneksi,"UPDATE barang SET nama_barang='$nama_barang',harga_barang='$harga_barang',berat_barang='$berat_barang',stok='$stok',tgl_exp='$tgl_exp' WHERE id_barang='$id_barang'");
	}

}
?>