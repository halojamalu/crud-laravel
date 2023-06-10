<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'John Doe',
            'nis' => '2022001',
            'tgl_lahir' => '2012-12-12' // format ngikutin DB mysql
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Jane Doe',
            'nis' => '2022002',
            'tgl_lahir' => '2019-09-09' // format ngikuti DB mysql
        ]);
    }
}
