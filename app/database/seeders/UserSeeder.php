<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Ismail Merdjaoui',
            'email' => 'imerdjaouicad@gmail.com',
            'password' => Hash::make('000000xz'),
            'phone_number' => '5144490082',
            'role' => 'superuser',
            'company_name' => 'Intelboard',
        ]);
    }
}
