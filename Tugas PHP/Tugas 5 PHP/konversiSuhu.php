<!DOCTYPE html>
<html>
<head>
    <style>
table {
    border-collapse: collapse;
    width: 60%;
    margin: 20px auto;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

th, td {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
}

th {
    background-color: #F2BED1;
    color: #333;
}

tr:nth-child(even) {
    background-color: #F2BED1;
}

tr:nth-child(odd) {
    background-color: #FDCEDF;
}

tr:hover {
    background-color: #F8E8EE;
    transition: background-color 0.3s ease;
}

h1 {
    text-align: center;
    font-size: 24px;
    color: #333;
}

table {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.caption {
    font-weight: bold;
    margin-bottom: 10px;
}

    </style>
</head>
<body>

<?php
class konversiSuhu{
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;
    private $hasilKonversi;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
        $this->hasilKonversi = $this->konversi();
    }
    private function konversi(){
        switch ($this->satuanSuhuAwal){
            case'Celcius':
                switch($this->satuanSuhuTujuan) {
                    case 'Fahrenheit':
                        return ($this->besaranSuhu * 9/5) + 32;
                        case 'Rheamur':
                            return $this->besaranSuhu * 4/5;
                            default:
                            return $this->besaranSuhu;
                }
                break;
                case 'Fahrenheit':
                    switch ($this->satuanSuhuTujuan) {
                        case 'Celcius':
                            return ($this->besaranSuhu - 32) * 5/9;
                            case 'Rheamur':
                                return ($this->besaranSuhu - 32) * 4/9;
                                default:
                                return $this->besaranSuhu;
                    }
                    break;
                    case 'Rheamur':
                        switch ($this->satuanSuhuTujuan) {
                            case 'Celcius':
                                return $this->besaranSuhu * 5/4;
                                case 'Fahrenheit':
                                    return ($this->besaranSuhu * 9/4) + 32;
                                    default:
                                    return $this->besaranSuhu;
                        }
                        break;
                        default:
                        return $this->besaranSuhu;
                     }
                }

                public function cetak() {
                    echo '<tr>';
                    echo '<td>'.$this->satuanSuhuAwal . '</td>';
                    echo '<td>'.$this->besaranSuhu . '</td>';
                    echo '<td>'.$this->satuanSuhuTujuan . '</td>';
                    echo '<td>'.$this->hasilKonversi . '</td>';
                    echo '</tr>';
                }
              }
?>