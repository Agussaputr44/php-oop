<?php
include("Class_mobil.php");

// Membuat objek Mobil_Pickup
$obj_mobil_pickup_merah = new Mobil_Pickup();
$obj_mobil_pickup_biru = new Mobil_Pickup();

$obj_mobil_pickup_merah->set_merk("Carry");
$obj_mobil_pickup_merah->set_jenis_bbm("Bensin");
$obj_mobil_pickup_merah->set_isi_silinder(1500);
$obj_mobil_pickup_merah->set_l_bak(2);
$obj_mobil_pickup_merah->set_p_bak(4);
$obj_mobil_pickup_merah->set_t_bak(2);
$obj_mobil_pickup_merah->set_berat_max(200);
$obj_mobil_pickup_merah->set_max_bbm(45);
$obj_mobil_pickup_merah->set_konsumsi_bbm(15);
$obj_mobil_pickup_merah->set_isi_bbm(10);

$obj_mobil_pickup_biru->set_merk("Grand max");
$obj_mobil_pickup_biru->set_jenis_bbm("Solar");
$obj_mobil_pickup_biru->set_isi_silinder(1500);
$obj_mobil_pickup_biru->set_l_bak(2);
$obj_mobil_pickup_biru->set_p_bak(5);
$obj_mobil_pickup_biru->set_t_bak(1);
$obj_mobil_pickup_biru->set_berat_max(250);
$obj_mobil_pickup_biru->set_max_bbm(45);
$obj_mobil_pickup_biru->set_konsumsi_bbm(10);
$obj_mobil_pickup_biru->set_isi_bbm(10);


// tampilkan informasi mobil carry
echo "Mobil: " . $obj_mobil_pickup_merah->get_merk() . "<br>";
echo "Tampilkan nambah berat" . "<br>";
$obj_mobil_pickup_merah->isi_pasir(1);
$obj_mobil_pickup_merah->isi_pasir(3);
$obj_mobil_pickup_merah->isi_pasir(10);
$obj_mobil_pickup_merah->isi_barang(50);
echo "Total volume bak tersedia: " . $obj_mobil_pickup_merah->get_vol_diangkut() . "<br>";
echo "Berat Diangkut: " . $obj_mobil_pickup_merah->get_berat_diangkut() . "<br>";
echo "Jumlah bbm saat ini: " . $obj_mobil_pickup_merah->get_sisa_bbm() . "l <br>";
$sisa_bbm_pickup_merah = $obj_mobil_pickup_merah->get_sisa_bbm();
$obj_mobil_pickup_merah->set_jarak(330);
echo "Hitung uang yang harus diberi ke supir untuk menempuh jarak " . $obj_mobil_pickup_merah->get_jarak() . "km yogyakarta-surabaya pulang pergi adalah: " . $obj_mobil_pickup_merah->hitung_bayaran($sisa_bbm_pickup_merah) * 2 . "<br>";
// echo"Jarak yang di tempuh oleh mobil ".$obj_mobil_pickup_merah." adalah : ".$obj_mobil_pickup_merah->get_jarak()."km <br>";







echo "<br><br>";
// tampilkan informasi mobil grand max
echo "Mobil: " . $obj_mobil_pickup_biru->get_merk() . "<br>";
echo "Tampilkan nambah berat" . "<br>";
$obj_mobil_pickup_biru->isi_pasir(1);
$obj_mobil_pickup_biru->isi_barang(50);
$obj_mobil_pickup_biru->isi_pasir(3);
$obj_mobil_pickup_biru->isi_pasir(10);
echo "Total volume bak tersedia: " . $obj_mobil_pickup_biru->get_vol_diangkut() . "<br>";
echo "Berat Diangkut: " . $obj_mobil_pickup_biru->get_berat_diangkut() . "<br>";
echo "Jumlah bbm saat ini: " . $obj_mobil_pickup_biru->get_sisa_bbm() . "l <br>";
$sisa_bbm_pickup_biru = $obj_mobil_pickup_biru->get_sisa_bbm();
echo "Jumlah bbm saat ini setelah menempuh jarak: " . $obj_mobil_pickup_biru->get_jarak() . "km adalah " . $obj_mobil_pickup_biru->get_sisa_bbm() . "l <br>";
$obj_mobil_pickup_biru->set_jarak(330);
echo "Hitung uang yang harus diberi ke supir untuk menempuh jarak " . $obj_mobil_pickup_biru->get_jarak() . "km yogyakarta-surabaya pulang pergi adalah: " . $obj_mobil_pickup_biru->hitung_bayaran($sisa_bbm_pickup_biru) * 2 . "<br>";


echo "<br><br>";
$total_biaya_pickup_merah = $obj_mobil_pickup_merah->hitung_bayaran($sisa_bbm_pickup_merah);
$total_biaya_pickup_biru = $obj_mobil_pickup_biru->hitung_bayaran($sisa_bbm_pickup_biru);

if ($total_biaya_pickup_biru < $total_biaya_pickup_merah) {
    echo "" . $obj_mobil_pickup_biru->get_merk() . " lebih efisien";
} else {
    echo "" . $obj_mobil_pickup_merah->get_merk() . " lebih efisien";
}