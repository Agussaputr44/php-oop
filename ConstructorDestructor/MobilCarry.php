<?php
class Perjalanan {
    public static function sisaBbmDitujuan($jarak, $kmPerLiter, $kapasitasTangki, $bbmAwal) {
        $bbmDiperlukan = $jarak / $kmPerLiter;

        $frekuensiIsiBbm = ceil($bbmDiperlukan / $kapasitasTangki);

        $bbmDiisi = $frekuensiIsiBbm * $kapasitasTangki;

        $sisaBbm = $bbmDiisi - $bbmDiperlukan + $bbmAwal;

        return $sisaBbm;
    }
}

class Mobil_pickup {
    public static $kmPerLiter = 15;
    public static $kapasitasTangki = 45;

    public static function hitungSisaBbm($jarak, $bbmAwal) {
        return Perjalanan::sisaBbmDitujuan($jarak, self::$kmPerLiter, self::$kapasitasTangki, $bbmAwal);
    }
}

$jarakCarry = 3300;
$bbmAwalCarry = 10;
$sisaBbmCarry = Mobil_pickup::hitungSisaBbm($jarakCarry, $bbmAwalCarry);
echo "Sisa BBM Mobil Carry setelah sampai tujuan: $sisaBbmCarry liter\n <br>";

// $jarakGrandMax = 4000;
// $bbmAwalGrandMax = 20;
// $sisaBbmGrandMax = Mobil_pickup::hitungSisaBbm($jarakGrandMax, $bbmAwalGrandMax);
// echo "Sisa BBM Grand Max setelah sampai tujuan: $sisaBbmGrandMax liter\n";
