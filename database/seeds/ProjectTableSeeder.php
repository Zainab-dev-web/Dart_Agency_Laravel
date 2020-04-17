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
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/featured-project-pic1.png', $filename);
        DB::table('projects')->insert([
            
            'photo'=>$filename,
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/featured-project-pic2.png', $filename);
        DB::table('projects')->insert([
            
            'photo'=>$filename,
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/featured-project-pic3.png', $filename);
        DB::table('projects')->insert([
            
            'photo'=>$filename,
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/featured-project-pic4.png', $filename);
        DB::table('projects')->insert([
            
            'photo'=>$filename,
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/featured-project-pic5.png', $filename);
        DB::table('projects')->insert([
            
            'photo'=>$filename,
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/featured-project-pic6.png', $filename);
        DB::table('projects')->insert([
            
            'photo'=>$filename,
            'titre'=>'DESIGN',
            'text'=>'Lorem ipsum dolor sit amet ',

        ]);
    }
}
