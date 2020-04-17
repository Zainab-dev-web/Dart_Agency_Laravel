<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/team-pic1.png', $filename);
        DB::table('teams')->insert([
            
            'photo'=>$filename,
            'user_id' => 1,
            'role_id'=> 1,
            
            
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/team-pic2.png', $filename);
        DB::table('teams')->insert([
            
            'photo'=>$filename,
            'user_id' => 2,
            'role_id'=> 2,
            
            
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/team-pic3.png', $filename);
        DB::table('teams')->insert([
            
            'photo'=>$filename,
            'user_id' => 3,
            'role_id'=> 2,
            
            
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/team-pic4.png', $filename);
        DB::table('teams')->insert([
            
            'photo'=>$filename,
            'user_id' => 4,
            'role_id'=> 2,
            
            
        ]);
    }
}
