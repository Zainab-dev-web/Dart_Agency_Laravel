<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            
            'icone'=>'/images/header-background.png',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt',
            'titre'=>'Growing Business',
            
        ]);
        DB::table('services')->insert([
            
            'icone'=>'/images/header-background.png',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt',
            'titre'=>'Save Time',
            
        ]);
        DB::table('services')->insert([
            
            'icone'=>'/images/header-background.png',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunta',
            'titre'=>'Free Support',
            
        ]);
        DB::table('services')->insert([
            
            'icone'=>'/images/header-background.png',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt',
            'titre'=>'Responsive Design',
            
        ]);
        DB::table('services')->insert([
            
            'icone'=>'/images/header-background.png',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt',
            'titre'=>'Target Fill Up',
            
        ]);
        DB::table('services')->insert([
            
            'icone'=>'/images/header-background.png',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt',
            'titre'=>'Graphic Design',
            
        ]);
    }
}
