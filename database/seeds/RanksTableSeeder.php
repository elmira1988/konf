<?php

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranks')->insert(['name' => 'без ученого звания']);
        DB::table('ranks')->insert(['name' => 'доцент']);
        DB::table('ranks')->insert(['name' => 'профессор']);
    }
}
