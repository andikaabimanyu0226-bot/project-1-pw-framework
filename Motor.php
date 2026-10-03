<?php

class Motor{
    
    public $merk;
    public $type;
    public $warna;
    public $tahun;
    public $harga;

    // construct
    public function __construct($merk="", $type=""){
        $this->merk = $merk;
        $this->type = $type;

        // echo $this->merk." ".$this->type." berhasil dibuat<br>";
    }

    // destruct
    public function __destruct(){
        echo $this->merk." ".$this->type." telah selesai digunakan<br>";
    }

    // method 1
    public function info(){
        echo "Merk : ".$this->merk."<br>";
        echo "Type : ".$this->type."<br>";
        echo "Warna : ".$this->warna."<br>";
        echo "Tahun : ".$this->tahun."<br>";
        echo "Harga : Rp ".$this->harga."<br>";
    }

    // method 2
    public function nyalakan(){
        echo $this->merk." ".$this->type." dinyalakan<br>";
    }

    // method 3
    public function servis(){
        echo $this->merk." ".$this->type." sedang diservis<br>";
    }
}