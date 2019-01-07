<?php

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

            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => md5('admin'),
            'address' => 'Petra Petrovica 6',
            'city' => 'Novi Sad',
            'phone' => '0642465848',
            'role' => 2,
            'created_at' => '2018-02-18 01:20:44',
            'updated_at' => '2018-02-18 01:20:44',
        ]);
    }
}

