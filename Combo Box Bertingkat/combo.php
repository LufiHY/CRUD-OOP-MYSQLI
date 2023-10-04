<?php 	
include 'database.php';
$db = new database();
$data_kota = $db->tampil_kota($_GET['id_provinsi']);
?>
<?php
    foreach($data_kota as $d){
?>
<option><?php echo $d['nama_kota']; ?></option>
<?php
}
?>



