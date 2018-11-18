<?php

use Illuminate\Database\Seeder;

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
            'password' =>  md5('admin'),
            'created_at' => '2018-02-18 01:20:44',
            'updated_at' => '2018-02-18 01:20:44',
        ]);
    }
}

