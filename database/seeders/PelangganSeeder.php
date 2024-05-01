<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('2122102_pelanggan')->insert([
            '2122102_idPelanggan' => 'P001',
            '2122102_nmPelanggan' => 'Muhammad Fadli Kurniawan',
            '2122102_alamat' => 'Jalan Joglo',
            '2122102_noTelp' => '0823123123121'
        ]);
    }
}
