<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kode' => 'TI2301', 'nama' => 'Pemrograman Web', 'sks' => 3, 'status' => true],
            ['kode' => 'TI2302', 'nama' => 'Pemrograman Berorientasi Objek 2', 'sks' => 3, 'status' => true],
            ['kode' => 'TI2303', 'nama' => 'Basis Data Lanjut', 'sks' => 3, 'status' => true],
            ['kode' => 'TI2304', 'nama' => 'Jaringan Komputer', 'sks' => 2, 'status' => false],
            ['kode' => 'TI2305', 'nama' => 'Internet of Things', 'sks' => 3, 'status' => true],
            ['kode' => 'TI2306', 'nama' => 'Kecerdasan Buatan', 'sks' => 2, 'status' => false],
        ];

        foreach ($data as $item) {
            MataKuliah::create($item);
        }
    }
}