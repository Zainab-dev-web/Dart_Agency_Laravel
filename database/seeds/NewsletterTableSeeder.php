<?php

use Illuminate\Database\Seeder;

class NewsletterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsletters')->insert([
            
            'newsletter' => 'Envoyé',
            
        ]);
        DB::table('newsletters')->insert([
            
            'newsletter' => 'Non envoyé',
            
        ]);
    }
}
