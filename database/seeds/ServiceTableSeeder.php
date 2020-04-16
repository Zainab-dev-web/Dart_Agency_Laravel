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
            
            'icone'=>'trending_up',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt',
            'titre'=>'Growing Business',
            
        ]);
        DB::table('services')->insert([
            
            'icone'=>'access_time',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt',
            'titre'=>'Save Time',
            
        ]);
        DB::table('services')->insert([
            
            'icone'=>'group',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunta',
            'titre'=>'Free Support',
            
        ]);
        DB::table('services')->insert([
            
            'icone'=>'apps',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt',
            'titre'=>'Responsive Design',
            
        ]);
        DB::table('services')->insert([
            
            'icone'=>'adjust',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt',
            'titre'=>'Target Fill Up',
            
        ]);
        DB::table('services')->insert([
            
            'icone'=>'local_cafe',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt',
            'titre'=>'Graphic Design',
            
        ]);
    }
}
