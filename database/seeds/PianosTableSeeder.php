<?php

use Illuminate\Database\Seeder;

class PianosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianos')->insert([
            'name' => 'Pfeiffer 122',
            'mark' => 'Pfeiffer',
            'color' => 'black',
            'model' => '122 de Stuttgart',
        ]);
        DB::table('pianos')->insert([
            'name' => 'Sauter Delta',
            'mark' => 'Sauter',
            'color' => 'black laque',
            'model' => '1/4 queue Delta 182',
        ]);
        DB::table('pianos')->insert([
            'name' => 'Renner',
            'mark' => 'Steinway & Sons',
            'color' => 'brown',
            'model' => 'Modèle Z de Hambourg',
        ]);
    }
}
