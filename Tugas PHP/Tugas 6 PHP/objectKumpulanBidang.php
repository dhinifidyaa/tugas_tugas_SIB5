<?php
require_once 'Abstract.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(5); 
$persegiPanjang = new PersegiPanjang(4, 6); 
$segitiga = new Segitiga(3, 4, 5); 

$shapes = [$lingkaran, $persegiPanjang, $segitiga];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Bidang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Data Bidang</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php
           foreach ($shapes as $index => $shape) {
            echo '<tr>';
            echo '<td>' . ($index + 1) . '</td>';
            echo '<td>' . $shape->namaBidang() . '</td>';
            echo '<td>';
            echo 'Jumlah Perhitungan Luas: ' . ($shape->luasBidang() + $shape->kelilingBidang()) . '<br>'; 
            echo 'Jumlah Perhitungan Keliling: ' . ($shape->luasBidang() + $shape->kelilingBidang()) . '<br>'; 
            echo '</td>';
            echo '<td>' . $shape->luasBidang() . '</td>';
            echo '<td>' . $shape->kelilingBidang() . '</td>';
            echo '</tr>';
        }        
            ?>
        </tbody>
    </table>
</body>
</html>
