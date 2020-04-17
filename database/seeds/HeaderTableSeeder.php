<?php

use Illuminate\Database\Seeder;
use App\Header;
use Illuminate\Support\Facades\Storage;
class HeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/header-background.png', $filename);
        DB::table('headers')->insert([
            
            'text' => 'Zainab ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna',
            'photo'=>$filename,
            
        ]);
    }
}
