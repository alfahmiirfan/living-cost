<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'superadmin@gmail.com',
            'password' => 'superadmin',
            'name' => 'Super Admin',
        ]);
        User::create([
            'username' => 'alfahmiirfan11@gmail.com',
            'password' => 'alfahmi',
            'name' => 'Super Admin',
        ]);
    }
}
