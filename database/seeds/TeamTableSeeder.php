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
    {
        DB::table('teams')->insert([
            
            'photo'=>'/images/team-pic1.png',
            'user_id' => 1,
            'role_id'=> 1,
            
            
        ]);
        DB::table('teams')->insert([
            
            'photo'=>'/images/team-pic2.png',
            'user_id' => 2,
            'role_id'=> 2,
            
            
        ]);
        DB::table('teams')->insert([
            
            'photo'=>'/images/team-pic3.png',
            'user_id' => 3,
            'role_id'=> 2,
            
            
        ]);
        DB::table('teams')->insert([
            
            'photo'=>'/images/team-pic4.png',
            'user_id' => 4,
            'role_id'=> 2,
            
            
        ]);
    }
}
