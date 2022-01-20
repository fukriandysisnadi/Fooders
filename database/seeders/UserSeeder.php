<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['username' => 'Shiikato',
            'name' => 'Fukriandy Sisnadi',
            'password' => bcrypt('riansisnadi576'),
            'role' => 'Admin'],
            ['username' => 'joni123',
            'name' => 'joni',
            'password' => bcrypt('joni123'),
            'role' => 'Member'],
        ]);
    }
}
