<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;

class LoginTableSeeder extends Seeder
{
    public function run()
    {
        Login::create([
            'username' => 'admin',
            'password' => Hash::make('admin1'),
        ]);
    }
}
