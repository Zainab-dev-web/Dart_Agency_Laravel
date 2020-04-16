<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(HeaderTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(TestiTableSeeder::class);
        $this->call(ContactTableSeeder::class);

    }
}
