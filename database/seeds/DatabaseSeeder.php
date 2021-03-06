<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SectionSeeder::class,
            FormSeeder::class,
            DegreeTableSeeder::class,
            RanksTableSeeder::class,
            ChildSectionsSeeder::class,
            ChildFormsSeeder::class
        ]);
    }
}
