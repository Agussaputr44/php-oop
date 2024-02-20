<?php
class Mobil_Pickup
{
    private $merk;
    private $jenis_bbm;
    private $isi_silinder;
    private $l_bak;
    private $p_bak;
    private $t_bak;
    private $berat_max;
    private $berat_diangkut;
    private $vol_diangkut;

    private $max_bbm;
    private $isi_bbm;
    private $konsumsi_bbm;

    private $jarak = 0;

    public function set_merk($merk)
    {
        $this->merk = $merk;
    }

    public function set_jenis_bbm($jenis_bbm)
    {
        $this->jenis_bbm = $jenis_bbm;
    }

    public function set_isi_silinder($isi_silinder)
    {
        $this->isi_silinder = $isi_silinder;
    }

    public function set_l_bak($l_bak)
    {
        $this->l_bak = $l_bak;
    }

    public function set_p_bak($p_bak)
    {
        $this->p_bak = $p_bak;
    }

    public function set_berat_max($berat_max)
    {
        $this->berat_max = $berat_max;
    }

    public function set_berat_diangkut($berat_diangkut)
    {
        $this->berat_diangkut = $berat_diangkut;
    }

    public function get_berat_diangkut()
    {
        return $this->berat_diangkut;
    }

    public function set_vol_diangkut($vol_diangkut)
    {
        $this->vol_diangkut = $vol_diangkut;
    }

    public function get_vol_diangkut()
    {
        return $this->l_bak * $this->p_bak * $this->t_bak;
    }

    public function set_t_bak($t_bak)
    {
        $this->t_bak = $t_bak;
    }

    public function get_t_bak()
    {
        return $this->t_bak;
    }

    public function get_berat_max()
    {
        return $this->berat_max;
    }

    public function get_p_bak()
    {
        return $this->p_bak;
    }

    public function get_l_bak()
    {
        return $this->l_bak;
    }

    public function get_isi_silinder()
    {
        return $this->isi_silinder;
    }

    public function get_jenis_bbm()
    {
        return $this->jenis_bbm;
    }

    public function get_merk()
    {
        return $this->merk;
    }

    public function isi_barang($berat)
    {
        $berat_diangkut = $this->get_berat_diangkut();
        $berat_max = $this->get_berat_max();

        if (($berat_diangkut + $berat) > $berat_max) {
            echo "Gagal<br>";
            return false;
        }

        $this->berat_diangkut += $berat;
        echo "Berhasil<br>";

        return true;
    }

    public function isi_pasir($vol)
    {
        $vol_diangkut = $this->get_vol_diangkut();
        $vol_max = $this->get_l_bak() * $this->get_p_bak() * $this->get_t_bak();

        if (($vol_diangkut + $vol) > $vol_max) {
            echo "Gagal<br>";
            return false;
        }

        $this->vol_diangkut += $vol;
        echo "Berhasil<br>";
        return true;
    }

    public function set_nilai_angkut()
    {
        $this->vol_diangkut = 0;
        $this->berat_diangkut = 0;
    }

    public function turun_barang($berat)
    {
        $berat_diangkut = $this->get_berat_diangkut();

        if ($berat_diangkut != 0) {
            $this->berat_diangkut -= $berat;
        }

        return max($this->berat_diangkut, 0);
    }

    public function turun_pasir($vol)
    {
        $vol_diangkut = $this->get_vol_diangkut();

        if ($vol_diangkut != 0) {
            $this->vol_diangkut -= $vol;
        }
        return max($this->vol_diangkut, 0);
    }

    public function set_max_bbm($liter)
    {
        $this->max_bbm = $liter;
    }

    public function get_max_bbm()
    {
        return $this->max_bbm;
    }

    public function set_konsumsi_bbm($jarak_perliter)
    {
        $this->konsumsi_bbm = $jarak_perliter;
    }

    public function get_konsumsi_bbm()
    {
        return $this->konsumsi_bbm;
    }

    public function set_isi_bbm($liter)
    {
        $bbm_saat_ini = $this->get_sisa_bbm();
        $max_bbm = $this->get_max_bbm();

        if (($bbm_saat_ini + $liter) <= $max_bbm) {
            $this->isi_bbm += $liter;
            return true;
        }

        return false;
    }

    public function get_isi_bbm()
    {
        return $this->isi_bbm;
    }

    
    public function set_jarak($jarak)
    {
        $this->jarak += $jarak;
    }

    public function get_jarak()
    {
        return $this->jarak;
    }

    // method untuk melihat sisa bbm yang ada pada kendaraan
    public function get_sisa_bbm()
    {
        $isi_bbm = $this->get_isi_bbm();
        $jarak = $this->get_jarak();
        $konsumsi_bbm = $this->get_konsumsi_bbm();

        return max($isi_bbm - ($jarak/$konsumsi_bbm), 0);
    }


    // method ini digunakan untuk menghitung berapa uang yang dibutuhkan jika ingin menempuh suatu perjalanan dengan berpatokan jarak dan harga dari bbm suatu kendaraan
    public function hitung_bayaran($sisa_bbm)
    {
        $jenis_bbm = $this->get_jenis_bbm();
        $jarak = $this->get_jarak();
        $konsumsi_perliter = $this->get_konsumsi_bbm();
    
        switch ($jenis_bbm) {
            case "Bensin":
                
                return $jarak / $konsumsi_perliter * 10000 - ($sisa_bbm * 10000);
            case "Solar":
                return $jarak / $konsumsi_perliter * 7000 - ($sisa_bbm * 7000);
            default:
                return 0;
        }
    }
    

}
