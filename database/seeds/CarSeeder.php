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

        for ($i = 0; $i <= 9; $i++) {
            DB::table('cars')->insert([
                'numberplate' => 'NS00' . $i . JT,
                'created_at' => '2018-02-18 01:20:44',
                'updated_at' => '2018-02-18 01:20:44',

            ]);
        }

    }
}
