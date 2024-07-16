<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PengeluaranSeeder extends Seeder {
    public function run(): void {
        $kategori = ['Transportasi', 'Makanan', 'Kantor', 'Pendidikan', 'Lainnya'];
        $tanggal = now()->subDays(rand(0, 30))->format('Y-m-d');

        for ($i = 1; $i <= 20; $i++) {
            DB::table('pengeluarans')->insert([
                'nama_item' => 'Item ' . $i,
                'kategori' => $kategori[array_rand($kategori)],
                'jumlah' => rand(1, 100),
                'harga' => rand(10000, 1000000),
                'tanggal' => now()->subDays(rand(0, 30))->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
