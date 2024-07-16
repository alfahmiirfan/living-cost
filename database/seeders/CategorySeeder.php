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
            'Pangan',
            'Snack',
            'Obat-obatan',
            'Sarpras',
        ];

        foreach ($category as $cat) {
            DB::table('category')->insert([
                'name' => $cat,
            ]);
        }
    }
}
