<?php

use Illuminate\Database\Seeder;
use App\Icone;

class IconeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icones')->insert([
            
            'icone' => 'flaticon-facebook-letter-logo',
            
        ]);
        DB::table('icones')->insert([
            
            'icone' => 'flaticon-twitter-logo',
            
        ]);
        DB::table('icones')->insert([
            'icone' => 'flaticon-dribbble-logo',
            
        ]);
        DB::table('icones')->insert([
            
            'icone' => 'flaticon-behance-logo',
            
        ]);
       
    }
}
