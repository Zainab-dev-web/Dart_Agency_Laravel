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
            
            
        ]);
    }
}
