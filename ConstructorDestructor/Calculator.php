<?php
class Calculator {
    const phi = 3.14;

    public function perkalian($a, $b) {
        $hasil = $a * $b;
        echo "Hasil perkalian $a dan $b = $hasil <br>"; 
    }

    public function penjumlahan($a, $b) {  
        echo "Hasil penjumlahan $a dan $b = " . ($a + $b) . "<br>";
    }

    public function pengurangan($a, $b) {
        echo "Hasil pengurangan $a dan $b = " . ($a - $b) . "<br>";
    }

    public function pembagian($a, $b) {
        echo "Hasil pembagian $a dan $b = " . ($a / $b) . "<br>";
    }

    public function pangkatN($a, $b) {
        echo "Hasil pangkat $a pangkat $b = " . ($a ** $b) . "<br>";
    }

    public function luasLingkaran($diameter) {
        echo "Luas lingkaran dengan diameter $diameter = " . (self::phi * $diameter * $diameter) . "<br>";
    }

    public function volumeBola($diameter) {
        $radius = $diameter / 2;
        echo "Volume bola dengan diameter $diameter = " . ((4 / 3) * self::phi * $radius * $radius * $radius) . "<br>";
    }
}

$calculator1 = new Calculator();

$calculator1->perkalian(5, 8);
$calculator1->penjumlahan(10, 3);
$calculator1->pembagian(15, 3);
