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
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'address' => 'Petra Petrovica 6',
            'city' => 'Novi Sad',
            'phone' => '0642465848',
            'role' => 1,
            'created_at' => '2018-02-18 01:20:44',
            'updated_at' => '2018-02-18 01:20:44',
        ]);

        DB::table('users')->insert([

            'name' => 'serviceman',
            'last_name' => 'service',
            'email' => 'serviceman@serviceman.com',
            'password' => bcrypt('serviceman'),
            'address' => 'Petra Petrovica 6',
            'city' => 'Novi Sad',
            'phone' => '0642465848',
            'role' => 3,
            'created_at' => '2018-02-18 01:20:44',
            'updated_at' => '2018-02-18 01:20:44',
        ]);

        DB::table('users')->insert([

            'name' => 'user',
            'last_name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
            'address' => 'Petra Petrovica 6',
            'city' => 'Novi Sad',
            'phone' => '0642465848',
            'role' => 2,
            'created_at' => '2018-02-18 01:20:44',
            'updated_at' => '2018-02-18 01:20:44',
        ]);
    }
}

