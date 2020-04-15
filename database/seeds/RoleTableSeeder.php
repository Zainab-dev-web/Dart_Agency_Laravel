<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            
            'role' => 'Admin',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Membre',
            
        ]);
    }
}
