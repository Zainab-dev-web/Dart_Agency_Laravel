<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Storage;

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
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/team-pic1.png', $filename);
        DB::table('users')->insert([
            
            'name' => 'Zainab',
            'email' => 'admin@admin',
            'password' => Hash::make('123456789'),
            'role_id' => 1,
            'photo' =>$filename,
            'newsletter_id'=>2,
            
            
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/team-pic2.png', $filename);
        DB::table('users')->insert([
            
            'name' => 'Membre1',
            'email' => 'membre@membre',
            'password' => Hash::make('123456789'),
            'role_id' => 2,
            'photo' => $filename,
            'newsletter_id'=>2,
            
            
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/team-pic3.png', $filename);
        DB::table('users')->insert([
            
            'name' => 'Membre2',
            'email' => 'membre2@membre',
            'password' => Hash::make('123456789'),
            'role_id' => 2,
            'photo' =>$filename,
            'newsletter_id'=>2,
            
            
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/team-pic4.png', $filename);
        DB::table('users')->insert([
            
            'name' => 'Membre3',
            'email' => 'membre3@membre',
            'password' => Hash::make('123456789'),
            'role_id' => 2,
            'photo'=> $filename,
            'newsletter_id'=>2,
            
            
        ]);
        $filename = Str::random(10) . time() . '.jpeg';
        Storage::disk('public')->copy('/YfncwQSdAGX0rmLmVfD1jgECoWmbQeNui29JV1JY.jpeg', $filename);
        DB::table('users')->insert([
            
            'name' => 'Membre4',
            'email' => 'membre4@membre',
            'password' => Hash::make('123456789'),
            'role_id' => 2,
            'photo'=> $filename,
            'newsletter_id'=>2,
            
            
        ]);
        $filename = Str::random(10) . time() . '.jpg';
        Storage::disk('public')->copy('/Reserve-de-ciel-etoile_page_interne_image.jpg', $filename);
        DB::table('users')->insert([
            
            'name' => 'Membre5',
            'email' => 'membre5@membre',
            'password' => Hash::make('123456789'),
            'role_id' => 2,
            'photo'=> $filename,
            'newsletter_id'=>2,
            
            
        ]);
    }
}
