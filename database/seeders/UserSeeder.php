<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        DB::table('users')->insert([
            'name' => 'Abdul Rahman S',
            'email' => 'admin@gmail.com',
            'roles' => 'ADMIN',
            'password' => '$2y$10$C8Usu6G2aZXW2nAXnkVfYupnahnUchXM.XOWmK84HELpwSJ20u8Xe'
        ]);
    }
}
