<?php

use Illuminate\Database\Seeder;

class DegreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degree')->insert(['name' => 'без ученой степени']);
        DB::table('degree')->insert(['name' => 'кандидат наук']);
        DB::table('degree')->insert(['name' => 'доктор наук']);
    }
}
