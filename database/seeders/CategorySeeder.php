<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            'Makanan',
            'Minuman',
            'Pakaian',
            'Elektronik',
            'Kesehatan',
            'Olahraga',
            'Hobi',
        ];

        foreach ($category as $cat) {
            DB::table('category')->insert([
                'name' => $cat,
            ]);
        }
    }
}
