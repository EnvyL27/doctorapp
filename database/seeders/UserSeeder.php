<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'phone' => '087900876555',
                'address' => 'Malang',
                'age' => 20,
                'username' => 'admin',
                'is_admin' => '1',
                'password' => Hash::make(12345678),
            ],
            [
                'name' => 'doctor',
                'phone' => '081111222333',
                'address' => 'Malang',
                'age' => 45,
                'username' => 'doctor',
                'is_admin' => '1',
                'password' => Hash::make(12345678),
            ],
            [
                'name' => 'hilya',
                'phone' => '082222333444',
                'address' => 'Mojokerto',
                'age' => 21,
                'username' => 'hilya02',
                'is_admin' => '0',
                'password' => Hash::make(12345678),
            ],
            [
                'name' => 'bella',
                'phone' => '083333444555',
                'address' => 'Gresik',
                'age' => 19,
                'username' => 'bella03',
                'is_admin' => '0',
                'password' => Hash::make(12345678),
            ],
            [
                'name' => 'lisa',
                'phone' => '084444555666',
                'address' => 'Nganjuk',
                'age' => 18,
                'username' => 'lisa04',
                'is_admin' => '0',
                'password' => Hash::make(12345678),
            ],
            [
                'name' => 'cintya',
                'phone' => '08444555666',
                'address' => 'Probolinggo',
                'age' => 20,
                'username' => 'cintya05',
                'is_admin' => '0',
                'password' => Hash::make(12345678),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
