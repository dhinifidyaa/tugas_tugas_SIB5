<?php
require 'konversiSuhu.php';
$dataKonversiSuhu = array (
    new konversiSuhu('Celcius', 25, 'Fahrenheit'),
    new konversiSuhu('Fahrenheit', 98, 'Celcius'),
    new konversiSuhu('Celcius', 30, 'Rheamur'),
    new konversiSuhu('Rheamur', 15, 'Celcius')
);

echo '<table border="1">';
echo '<tr>';
echo '<th>Satuan Suhu Awal</th>';
echo '<th>Besaran Suhu</th>';
echo '<th>Satuan Suhu Tujuan</th>';
echo '<th>Hasil Konversi Suhu</th>';
echo '</tr>';
foreach ($dataKonversiSuhu as $konversi) {
    $konversi->cetak();
}
echo '</table>';

?>