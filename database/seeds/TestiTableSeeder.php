<?php

use Illuminate\Database\Seeder;

class TestiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testis')->insert([
            
            'photo'=>'/images/slider-image.png',
            'text' => 'magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.',
            'name'=>'Sheryl D',
            'titre'=>'UI Design Agency',
            
        ]);
        DB::table('testis')->insert([
            
            'photo'=>'/images/slider-image.png',
            'text' => 'magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.or incididunt ut labore et dolore magna',
            'name'=>'Sheryl D',
            'titre'=>'UI Design Agency',
            
        ]);
        DB::table('testis')->insert([
            
            'photo'=>'/images/slider-image.png',
            'text' => 'Zainab ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna',
            'name'=>'Sheryl D',
            'titre'=>'UI Design Agency',
            
        ]);
        
    }
}
