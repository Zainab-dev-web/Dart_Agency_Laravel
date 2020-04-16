<?php

use Illuminate\Database\Seeder;
use App\Header;
class HeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            
            'text' => 'Zainab ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna',
            'photo'=>'/images/header-background.png',
            
        ]);
    }
}
