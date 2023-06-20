<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

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
        	'name' => 'pakGuru',
        	'role' => 'admin',
        	'email' => 'admin461@gmail.com',
        	'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
        	'name' => 'Agung Ramadhan',
        	'role' => 'siswa',
        	'siswa_id' => '1',
        	'email' => 'agung@gmail.com',
        	'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
        	'name' => 'Anita Amelia',
        	'role' => 'siswa',
        	'siswa_id' => '2',
        	'email' => 'anita@gmail.com',
        	'password' => bcrypt('password123')
        ]);
    }
}
