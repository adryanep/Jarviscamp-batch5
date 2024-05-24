<?php

class Kendaraan {
    public $merk;
    public $tahun;
    public $jenis;

    public function __construct($merk, $tahun, $jenis) {
        $this->merk = $merk;
        $this->tahun = $tahun;
        $this->jenis = $jenis;
    }

    public function info() {
        return "Kendaraan ".$this->merk." tahun ".$this->tahun." jenis ".$this->jenis;
    }
}

class Motor extends Kendaraan {
    public $warna;

    public function __construct($merk, $tahun, $jenis, $warna) {
        parent::__construct($merk, $tahun, $jenis);
        $this->warna = $warna;
    }

    public function infoWarna() {
        return "Motor ".$this->merk." tahun ".$this->tahun." jenis ".$this->jenis." berwarna ".$this->warna;
    }
}

$motor1 = new Motor("Honda", 2018, "Supra", "Hitam");

echo $motor1->infoWarna();

?>
