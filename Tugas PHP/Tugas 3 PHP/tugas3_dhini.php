<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
$m1 = ['nim' => '0111111','nama'=>'Dhini', 'nilai' =>95];
$m2 = ['nim' => '0111112','nama'=>'Fidya', 'nilai' =>80];
$m3 = ['nim' => '0111113','nama'=>'Anggraeni', 'nilai' =>78];
$m4 = ['nim' => '0111114','nama'=>'Fathan', 'nilai' =>76];
$m5 = ['nim' => '0111115','nama'=>'Fadillah', 'nilai' =>86];
$m6 = ['nim' => '0111116','nama'=>'Jennie', 'nilai' =>50];
$m7 = ['nim' => '0111117','nama'=>'Lalisa', 'nilai' =>20];
$m8 = ['nim' => '0111118','nama'=>'Jisso', 'nilai' =>30];
$m9 = ['nim' => '0111119','nama'=>'Rose', 'nilai' =>70];
$m10 = ['nim' => '01111110','nama'=>'Irene', 'nilai' =>65];

$ar_judul = ['No','NIM','Nama Mahasiswa','Nilai','Keterangan','Grade','Predikat'];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
$jumlah_nilai = array_column($mahasiswa, 'nilai');


$nilai_tertinggi = max($jumlah_nilai);
$nilai_terendah = min($jumlah_nilai);
$nilai_rata_rata = array_sum($jumlah_nilai) / count($jumlah_nilai);
$jumlah_mahasiswa = count($mahasiswa);
$jumlah_keseluruhan_nilai = array_sum($jumlah_nilai);

$keterangan = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata-Rata' => $nilai_rata_rata,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $jumlah_keseluruhan_nilai,
];
?>

<h3 align="center">Daftar Nilai Mahasiswa</h3>
<table border="1" cellpadding="10" cellspacing="2" width="100%">
    <thead>
        <tr>
            <?php
            foreach($ar_judul as $judul){ ?>
                <th><?= $judul ?></th>
          <?php  } ?>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($mahasiswa as $mhs){
            $nilai = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
            $grade = ''; 
            
            if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = "A";
            else if ($mhs['nilai'] >= 75 && $mhs['nilai'] <= 84) $grade = "B";
            else if ($mhs['nilai'] >= 60 && $mhs['nilai'] <= 74) $grade = "C";
            else if ($mhs['nilai'] >= 30 && $mhs['nilai'] <= 59) $grade = "D";
            else if ($mhs['nilai'] >= 0 && $mhs['nilai'] <= 29) $grade = "E";
            
            switch($grade){
                case "A" : $predikat = "Memuaskan"; break;
                case "B" : $predikat = "Bagus"; break;
                case "C" : $predikat = "Cukup"; break;
                case "D" : $predikat = "Kurang"; break;
                case "E" : $predikat = "Buruk"; break;
                default: $predikat = '';
            }
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['nilai'] ?></td>
                <td><?= $nilai ?></td>
                <td><?= $grade ?></td> 
                <td><?= $predikat ?></td> 
            </tr>
      <?php  } ?>
    </tbody>
    <tfoot>
        <?php
        foreach($keterangan as $ket => $hasil){
            ?>
            <tr>
                <th colspan="3"><?= $ket ?></th>
                <th colspan="5"><?= $hasil ?></th>
            </tr>
        <?php } ?>
    </tfoot>
</table>
</body>
</html>
