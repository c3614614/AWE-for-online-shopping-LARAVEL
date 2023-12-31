<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'lk',
                'email' => 'lk@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345'),
                'remember_token' => Str::random(10),
                'is_admin' =>true,
            ],
            [
                'name' => 'Bah',
                'email' => 'bah@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345'),
                'remember_token' => Str::random(10),
                'is_admin' => false,
            ],
          
        ];

        foreach ($users as $userData) {
            DB::table('users')->insert($userData);
        }
    }
}
