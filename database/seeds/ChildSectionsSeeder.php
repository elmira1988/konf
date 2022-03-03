<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('child_sections')->insert(['name' => 'Секция 1 ']);
        DB::table('child_sections')->insert(['name' => 'Секция 2']);
        DB::table('child_sections')->insert(['name' => 'Секция 3']);
    }
}
