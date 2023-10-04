<?php 	
include 'database.php';
$db = new database();
$data = $db->tampil_data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="jquery-3.7.1.min.js">
    </script> -->
</head>
<body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 
        <label>PROVINSI</label>
        <select name="prov" id="prov" onchange="kota()">
        <?php
        foreach($data as $d){
        ?>
        <option value="<?php echo $d['id_provinsi']; ?>"><?php echo $d['nama_provinsi']; ?></option>
        <?php
        }
        ?>
        </select>

    <select name="kota" id="kota">

    </select>

    <script>
        function kota(){
            var prov=$('#prov').val();
            $('#kota').load("combo.php?id_provinsi="+prov+"");
        }
    </script>

    
</body>
</html>