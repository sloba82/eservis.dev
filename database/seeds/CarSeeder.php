<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('cars')->insert([
                'numberplate' => 'NS222JT',
                'make' => 'vw',
                'model' => 'Golf',
                'engine' =>'1.6',
                'year' => '2006',
                'created_at' => '2018-02-18 01:20:44',
                'updated_at' => '2018-02-18 01:20:44',

            ]);

    }
}
