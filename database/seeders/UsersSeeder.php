<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cek Gu',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123')
        ]);

        DB::table('users')->insert([
            'name' => 'John Doe',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt('johndoe123')
        ]);

        DB::table('users')->insert([
            'name' => 'Jane Doe',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'janedoe@gmail.com',
            'password' => bcrypt('janedoe123')
        ]);

    }
}
