<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert(['name' => 'Спектральная теория дифференциальных операторов']);
        DB::table('sections')->insert(['name' => 'Теория функций и функционального анализа']);
        DB::table('sections')->insert(['name' => 'Краевые задачи для дифференциальных уравнений']);
        DB::table('sections')->insert(['name' => 'Обратные и некорректные задачи']);
        DB::table('sections')->insert(['name' => 'Уравнения смешанного типа']);
        DB::table('sections')->insert(['name' => 'Математические проблемы механики']);
        DB::table('sections')->insert(['name' => 'Прикладные задачи термодинамики и теплофизики']);
        DB::table('sections')->insert(['name' => 'Математическое моделирование сложных процессов и систем']);
        DB::table('sections')->insert(['name' => 'Актуальные проблемы математического и физического образования в Вузе']);
    }
}
