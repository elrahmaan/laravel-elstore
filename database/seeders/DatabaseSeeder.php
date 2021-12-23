<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
