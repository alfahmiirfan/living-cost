<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YearSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $years = [
            '2020',
            '2021',
            '2022',
            '2023',
            '2024',
            '2025',
            '2026',
            '2027',
            '2028',
            '2029',
            '2030',
        ];

        foreach ($years as $year) {
            Year::create([
                'year' => $year,
            ]);
        }
    }
}
