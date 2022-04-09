<?php

class Dispenser{
    public $volume;
    public $hargaSegelas;
    public $volumeGelas;
    public $namaMinuman;

    public const PHI = 3.14;
    public $Jari;
    public $Tinggi;

    public function __construct ($Jari, $Tinggi) {
        $this -> Jari = $Jari;
        $this -> Tinggi = $Tinggi;
        echo "<br/>Jari : " . $Jari . " cm";
        echo "<br/>Tinggi : " . $Tinggi . " cm";
    }

    public function volumWadah(){
        return self::PHI * $this -> Jari * $this -> Tinggi;
    }
}

class Harga extends Dispenser {

    public function __construct($hargaperSegelas){
        $this -> hargaperSegelas = $hargaperSegelas;
        echo "<br/> Diketahui : ";
        echo "<br/>Harga per gelas : " . $hargaperSegelas;
    }
    public function harga() {
        return $this -> hargaperSegelas * 2 ;
    }
}
    
    echo "<br/>  Phi : " . Dispenser :: PHI;
    $volumWadah = new Dispenser(10, 30);
    $harga = new Harga (3500);
    echo "<br/> Volum Wadah : " . $volumWadah -> VolumWadah() . " cm";
    echo "<br/> Harga per-2 Gelas : " . $harga -> Harga();

?>