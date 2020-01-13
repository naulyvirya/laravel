<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function hello()
    {
        return "Hello World!";
    }

    public function nama()
    {
        return "Hai! Nama Saya Nauly Virya";
    }

    public function kelas()
    {
        return "Saya Kelas 11";
    }

    public function alamat()
    {
        return "Alamat Saya di Jalan Muarasari";
    }

    public function sekolah()
    {
        return "Saya Sekolah di SMK Assalaam Bandung";
    }

    public function hobi()
    {
        return "Hobi Saya jadi Pilot";
    }

    public function ttl()
    {
        return "Saya Lahir di Bogor, 10 Juli 2003";
    }

    public function umur()
    {
        return "Saya Berumur 16 Tahun";
    }

    public function teman_sebangku()
    {
        return "di Lab, Saya Sebangku sama Ari";
    }

    public function jam_pulang()
    {
        return "Hari ini Saya pulangnya jam 5";
    }

    public function warnakucing($warna = null)
    {
        if (!$warna) {
            return "warna belum dipilih";
        } else {
            return "Warna kucing : ".$warna;
        }
    }

    public function beli($makanan = null, $harga = null)
    {
         if (isset($makanan)) {
            echo "Anda beli ".$makanan;
        } if (isset($harga)) {
            if ($harga >= 15000) {
                echo " dengan Ukuran Jumbo.";
            } elseif ($harga < 15000 && $harga >= 7500){
                echo " dengan Ukuran Medium.";
            } elseif ($harga < 7500) {
                echo " dengan Ukuran Small.";
            }
        } if (!$makanan && !$harga) {
            return "Silahkan Masukan Item Terlebih Dahulu";
        }
    }
}
