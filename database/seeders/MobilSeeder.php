<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mobil;

class MobilSeeder extends Seeder
{
    public function run(): void
    {
        $mobils = [
            [
                'nama' => 'Avanza 1.5 G CVT',
                'brand' => 'Toyota',
                'harga' => 275000000,
                'tahun' => 2024,
                'transmisi' => 'CVT',
                'bahan_bakar' => 'Bensin',
                'status' => 'tersedia',
                'foto' => 'https://example.com/avanza.jpg',
            ],
            [
                'nama' => 'Civic RS Turbo',
                'brand' => 'Honda',
                'harga' => 615000000,
                'tahun' => 2024,
                'transmisi' => 'CVT',
                'bahan_bakar' => 'Bensin',
                'status' => 'tersedia',
                'foto' => 'https://example.com/civic.jpg',
            ],
            [
                'nama' => 'Xpander Ultimate',
                'brand' => 'Mitsubishi',
                'harga' => 330000000,
                'tahun' => 2023,
                'transmisi' => 'Matic',
                'bahan_bakar' => 'Bensin',
                'status' => 'tersedia',
                'foto' => 'https://example.com/xpander.jpg',
            ],
            [
                'nama' => 'Innova Zenix Hybrid',
                'brand' => 'Toyota',
                'harga' => 470000000,
                'tahun' => 2024,
                'transmisi' => 'CVT',
                'bahan_bakar' => 'Hybrid',
                'status' => 'tersedia',
                'foto' => 'https://example.com/zenix.jpg',
            ],
            [
                'nama' => 'Brio Satya',
                'brand' => 'Honda',
                'harga' => 175000000,
                'tahun' => 2022,
                'transmisi' => 'Manual',
                'bahan_bakar' => 'Bensin',
                'status' => 'sold',
                'foto' => 'https://example.com/brio.jpg',
            ],
        ];

        foreach ($mobils as $mobil) {
            Mobil::create($mobil);
        }
    }
}
