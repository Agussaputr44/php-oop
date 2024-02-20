<?php
include("Class_mobil.php");

// Membuat objek Mobil_pickup
$obj_mobil_pickup_merah = new Mobil_Pickup();
$obj_mobil_pickup_biru = new Mobil_pickup();

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


echo "Merk mobil merah adalah " . $obj_mobil_pickup_merah->get_merk() . "<br>";
echo "Jenis BBM mobil merah adalah " . $obj_mobil_pickup_merah->get_jenis_bbm() . "<br>";
echo "Silinder mobil merah adalah " . $obj_mobil_pickup_merah->get_isi_silinder() . "<br>";
echo "Lebar bak mobil merah adalah " . $obj_mobil_pickup_merah->get_l_bak() . "<br>";
echo "Panjang bak mobil merah adalah " . $obj_mobil_pickup_merah->get_p_bak() . "<br>";
echo "Tinggi bak mobil merah adalah " . $obj_mobil_pickup_merah->get_t_bak() . "<br>";
echo "Berat max mobil merah adalah " . $obj_mobil_pickup_merah->get_berat_max() . "<br>";
echo "<br>";



echo "<br>";
echo "Merk mobil biru adalah " . $obj_mobil_pickup_biru->get_merk() . "<br>";
echo "Jenis BBM mobil biru adalah " . $obj_mobil_pickup_biru->get_jenis_bbm() . "<br>";
echo "Silinder mobil biru adalah " . $obj_mobil_pickup_biru->get_isi_silinder() . "<br>";
echo "Lebar bak mobil biru adalah " . $obj_mobil_pickup_biru->get_l_bak() . "<br>";
echo "Panjang bak mobil biru adalah " . $obj_mobil_pickup_biru->get_p_bak() . "<br>";
echo "Tinggi bak mobil biru adalah " . $obj_mobil_pickup_biru->get_t_bak() . "<br>";
echo "Berat max mobil biru adalah " . $obj_mobil_pickup_biru->get_berat_max() . "<br>";
echo "<br>";



// Informasi mobil carry
echo "Mobil: " . $obj_mobil_pickup_merah->get_merk() . "<br>";
echo "Tampilkan Muatan berat" . "<br>";

echo "Muatan ditambah: ";
$obj_mobil_pickup_merah->isi_pasir(15);
echo "Muatan ditambah: ";
$obj_mobil_pickup_merah->isi_pasir(3);
echo "Muatan ditambah: ";
$obj_mobil_pickup_merah->isi_barang(10);
echo "<br>";
echo "Total volume bak yang tersedia: " . $obj_mobil_pickup_merah->get_vol_diangkut() . "<br>";
echo "Berat muatan mobil carry: " . $obj_mobil_pickup_merah->get_berat_diangkut() . "<br>";
echo "Jumlah sisa bbm saat ini: " . $obj_mobil_pickup_merah->get_sisa_bbm() . "<br>";
$sisa_bbm_pickup_merah = $obj_mobil_pickup_merah->get_sisa_bbm();
$obj_mobil_pickup_merah->set_jarak(330);
echo "Uang yang harus diberi ke supir untuk menempuh jarak " . $obj_mobil_pickup_merah->get_jarak() . " KM, yogyakarta-surabaya pulang pergi adalah: " . $obj_mobil_pickup_merah->hitung_bayaran($sisa_bbm_pickup_merah) * 2 . "<br>";


echo "<br><br>";
// Informasi mobil grand max
echo "Mobil: " . $obj_mobil_pickup_biru->get_merk() . "<br>";
echo "Tampilkan nambah berat" . "<br>";
echo "Muatan ditambah: ";
$obj_mobil_pickup_biru->isi_barang(50);
echo "Muatan ditambah: ";
$obj_mobil_pickup_biru->isi_barang(65);
echo "Muatan ditambah: ";
$obj_mobil_pickup_biru->isi_barang(70);
echo "Muatan ditambah: ";
$obj_mobil_pickup_biru->isi_barang(80);
echo "<br>";
echo "Total volume bak tersedia: " . $obj_mobil_pickup_biru->get_vol_diangkut() . "<br>";
echo "Berat Diangkut: " . $obj_mobil_pickup_biru->get_berat_diangkut() . "<br>";
echo "Jumlah bbm saat ini: " . $obj_mobil_pickup_biru->get_sisa_bbm() . " <br>";
$sisa_bbm_pickup_biru = $obj_mobil_pickup_biru->get_sisa_bbm();
$obj_mobil_pickup_biru->set_jarak(330);
echo "Jumlah bbm saat ini setelah menempuh jarak: " . $obj_mobil_pickup_biru->get_jarak() . " KM adalah " . $obj_mobil_pickup_biru->get_sisa_bbm() . " <br>";
echo "Uang yang harus diberi ke supir untuk menempuh jarak " . $obj_mobil_pickup_biru->get_jarak() . " KM, yogyakarta-surabaya adalah: " . $obj_mobil_pickup_biru->hitung_bayaran($sisa_bbm_pickup_biru) * 2 . "<br>";

echo "<br><br>";
$total_biaya_pickup_merah = $obj_mobil_pickup_merah->hitung_bayaran($sisa_bbm_pickup_merah);
$total_biaya_pickup_biru = $obj_mobil_pickup_biru->hitung_bayaran($sisa_bbm_pickup_biru);

if ($total_biaya_pickup_biru < $total_biaya_pickup_merah) {
    echo "" . $obj_mobil_pickup_biru->get_merk() . " lebih efisien";
} else {
    echo "" . $obj_mobil_pickup_merah->get_merk() . " lebih efisien";
}