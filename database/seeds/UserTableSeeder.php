<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); 
        User::truncate();
        DB::table('users')->insert([
            
            'name' => 'Zainab',
            'email' => 'admin@admin',
            'password' => Hash::make('123456789'),
            'role_id' => 1,
            'photo' =>'/images/team-pic1.png'
            
            
        ]);
        DB::table('users')->insert([
            
            'name' => 'Membre1',
            'email' => 'membre@membre',
            'password' => Hash::make('123456789'),
            'role_id' => 2,
            'photo' => '/images/team-pic2.png'
            
            
        ]);
        DB::table('users')->insert([
            
            'name' => 'Membre2',
            'email' => 'membre2@membre',
            'password' => Hash::make('123456789'),
            'role_id' => 2,
            'photo' =>'/images/team-pic3.png'
            
            
        ]);
        DB::table('users')->insert([
            
            'name' => 'Membre3',
            'email' => 'membre3@membre',
            'password' => Hash::make('123456789'),
            'role_id' => 2,
            'photo'=> '/images/team-pic4.png',
            
            
        ]);
    }
}
