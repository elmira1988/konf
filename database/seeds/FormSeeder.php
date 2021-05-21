<?php

use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forms')->insert(['name' => 'Выступление с пленарным докладом']);
        DB::table('forms')->insert(['name' => 'Выступление с секционным докладом']);
        DB::table('forms')->insert(['name' => 'Представление стендового доклада']);
    }
}
