<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal=date("Y.d.m");
$hari=date('d');
$bulan=date('m');
$tahun=date('Y');

$number=cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
for($x=$hari; $x<=$number; $x++){
    echo "<p> DAY".$x."</p>";
    for($jam=1; $jam<=24; $jam++){
        echo $jam;
    }
}