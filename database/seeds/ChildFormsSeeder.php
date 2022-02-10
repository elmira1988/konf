<?php

use Illuminate\Database\Seeder;

class ChildFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('child_forms')->insert(['name' => 'Доклад']);
        DB::table('child_forms')->insert(['name' => 'Презентация']);
        DB::table('child_forms')->insert(['name' => 'Размещение тезиса доклада в сборнике материалов']);
    }
}
