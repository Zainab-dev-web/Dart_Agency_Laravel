<?php

use Illuminate\Database\Seeder;
use App\Project;
class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            
            'photo'=>'/images/featured-project-pic1.png',
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
        DB::table('projects')->insert([
            
            'photo'=>'/images/featured-project-pic2.png',
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
        DB::table('projects')->insert([
            
            'photo'=>'/images/featured-project-pic3.png',
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
        DB::table('projects')->insert([
            
            'photo'=>'/images/featured-project-pic4.png',
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
        DB::table('projects')->insert([
            
            'photo'=>'/images/featured-project-pic5.png',
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
        DB::table('projects')->insert([
            
            'photo'=>'/images/featured-project-pic6.png',
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
    }
}
