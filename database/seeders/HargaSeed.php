<?php

namespace Database\Seeders;

use App\Models\Harga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HargaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Harga::create(['amoung' => '10000000']);
    }
}
