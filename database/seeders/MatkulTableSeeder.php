<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('matkul')->insert([
            [ 'kode_mk' => 'MK01', 'nama_mk' => 'Pemrograman Dasar', 'sks' => 3 ],
            [ 'kode_mk' => 'MK02', 'nama_mk' => 'Pemrograman Web', 'sks' => 4 ],
            [ 'kode_mk' => 'MK03', 'nama_mk' => 'Pemorgraman Web Lanjut', 'sks' => 4 ],
        ]);
    }
}
/*
insert into matkul (kode_mk, nama_mk , sks)
values
('MK01', 'Pemrograman Dasar', 'sks'=> 3),
('MK02', 'Pemrograman Web', 'sks'=> 4),
('MK03', 'Pemrograman Web Lanjut', 'sks'=> 4);
*/
