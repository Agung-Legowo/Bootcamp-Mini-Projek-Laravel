<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

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
        	'nama' => 'Agung Ramadhan',
        	'nis' => '101',
        	'tgl_lahir' => '2003-12-22'
        ]);

		DB::table('siswa')->insert([
        	'nama' => 'Anita Amelia',
        	'nis' => '102',
        	'tgl_lahir' => '2004-01-30'
        ]);

    }
}
