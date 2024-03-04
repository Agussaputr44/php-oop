<?php
class Pecahan {
    private $pembilang;
    private $penyebut;

    public function set_Pembilang($pembilang) {
        $this->pembilang = $pembilang;
    }

    public function get_Pembilang() {
        return $this->pembilang;
    }

    public function set_Penyebut($penyebut) {
        $this->penyebut = $penyebut;
    }

    public function get_Penyebut() {
        return $this->penyebut;
    }

    public function tambah($pembilang2, $penyebut2) {
        $hasilPembilang = ($this->pembilang * $penyebut2) + ($pembilang2 * $this->penyebut);
        $hasilPenyebut = $this->penyebut * $penyebut2;

        $hasilPecahan = new Pecahan();
        $hasilPecahan->set_Pembilang($hasilPembilang);
        $hasilPecahan->set_Penyebut($hasilPenyebut);

        return $hasilPecahan;
    }
}

$pecahan1 = new Pecahan();
$pecahan1->set_Pembilang(3);
$pecahan1->set_Penyebut(4);

$pecahan2 = new Pecahan();
$pecahan2->set_Pembilang(1);
$pecahan2->set_Penyebut(2);

$hasilTambah = $pecahan1->tambah($pecahan2->get_Pembilang(), $pecahan2->get_Penyebut());

echo $pecahan1->get_Pembilang()."/".$pecahan1->get_Penyebut()." + ".$pecahan2->get_Pembilang()."/".$pecahan2->get_Penyebut(). " Hasil penambahan pecahan: " . $hasilTambah->get_Pembilang() . "/" . $hasilTambah->get_Penyebut();