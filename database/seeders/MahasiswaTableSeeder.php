<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nim' => '230101',
                'nama' => 'Tes 1',
                'jk' => 'L',
                'prodi' => 'Sistem Informasi',
                'alamat' => 'palembang',
                'tahun_masuk' => 2023
            ],
            [
                'nim' => '230102',
                'nama' => 'Tes 2',
                'jk' => 'P',
                'prodi' => 'Sistem Informasi',
                'alamat' => 'palembang',
                'tahun_masuk' => 2023
            ]
        ]);
    }
}
