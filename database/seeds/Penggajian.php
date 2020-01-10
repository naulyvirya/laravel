<?php

use Illuminate\Database\Seeder;

class Penggajian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama'=>'Nauly Virya Huska Putra', 'jabatan'=>'Manager', 'jk'=>'Laki-laki',
            'alamat'=>'Jl. Muarasari 3', 'agama'=>'Islam', 'total_gaji'=>'Rp 7.000.000'],

            ['nama'=>'Ari Andriana', 'jabatan'=>'Manajer Keuangan', 'jk'=>'Laki-laki',
            'alamat'=>'TCI', 'agama'=>'Islam', 'total_gaji'=>'Rp 5.000.000'],

            ['nama'=>'Refana Bagas Agustian', 'jabatan'=>'HRD', 'jk'=>'Laki-laki',
            'alamat'=>'Cicaheum', 'agama'=>'Islam', 'total_gaji'=>'Rp 5.000.000'],

            ['nama'=>'Rifa Ramdani', 'jabatan'=>'Manajer Pemasaran', 'jk'=>'Laki-laki',
            'alamat'=>'Mekar Wangi', 'agama'=>'Islam', 'total_gaji'=>'Rp 6.500.000'],

            ['nama'=>'Fauzan Muharram', 'jabatan'=>'Konsumsi', 'jk'=>'Laki-laki',
            'alamat'=>'Buah Batu', 'agama'=>'Islam', 'total_gaji'=>'Rp 5.000.000']
        ];
        DB::table('penggajians')->insert($data);
    }
}
