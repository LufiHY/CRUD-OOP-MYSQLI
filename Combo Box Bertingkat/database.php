<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "combo";
	var $koneksi="";

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	
	}

    function tampil_data(){
		$data = mysqli_query($this->koneksi, "SELECT * FROM tbl_provinsi");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function tampil_kota($id_provinsi){
		$data = mysqli_query($this->koneksi, "SELECT * FROM tbl_kota WHERE id_provinsi='$id_provinsi'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

}
?>