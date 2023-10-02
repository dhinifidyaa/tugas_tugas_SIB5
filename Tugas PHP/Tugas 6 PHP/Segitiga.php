<?php
require_once 'Abstract.php';

class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;
    public $sisiMiring;

    public function __construct($alas, $tinggi, $sisiMiring){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisiMiring = $sisiMiring;
    }

    public function namaBidang(){
        return 'Segitiga';
    }

    public function luasBidang() {
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function kelilingBidang(){
        $keliling = $this->alas + $this->tinggi + $this->sisiMiring;
        return $keliling;
    }
}
?>
