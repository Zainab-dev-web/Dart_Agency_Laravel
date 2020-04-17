<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Testi;

class TestiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/slider-image.png', $filename);
        DB::table('testis')->insert([
            
            'photo'=> $filename,
            'text' => 'magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.',
            'name'=>'Sheryl D',
            'titre'=>'UI Design Agency',
            
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/slider-image.png', $filename);
        DB::table('testis')->insert([
            
            'photo'=>$filename,
            'text' => 'magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.or incididunt ut labore et dolore magna',
            'name'=>'Sheryl D',
            'titre'=>'UI Design Agency',
            
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/slider-image.png', $filename);
        DB::table('testis')->insert([
            
            'photo'=>$filename,
            'text' => 'Zainab ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna',
            'name'=>'Sheryl D',
            'titre'=>'UI Design Agency',
            
        ]);
        
    }
}
