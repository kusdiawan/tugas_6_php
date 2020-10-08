<?php
$harga_jambu = 15000;
$jum_dus = 6;
$isi_dus = 5;
$harga_dus = 2000;

$total_jual = ($harga_jambu * ($isi_dus * $jum_dus) + 2 * $harga_dus );

echo "====================================== <br>";
echo "Harga Jambu = Rp " . $harga_jambu . "/Kg <br>";
echo "Harga Kardus = " . $harga_dus . "/pcs <br>";
echo "Total Penjualan (Dus dan Jambu) = Rp " . $total_jual . "<br>";
echo "====================================== <br>";
?>
