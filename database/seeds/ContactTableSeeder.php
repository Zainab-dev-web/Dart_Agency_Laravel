<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            
            'adresse'=>'dartagency@gmail.com',
            'numero'=>'+0123-345-6789',
            
        ]);
    }
}
