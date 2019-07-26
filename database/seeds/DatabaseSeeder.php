<?php

use Illuminate\Database\Seeder;
// use BrandSeeder;
// use TypeSeeder;
// use CategorySeeder;
// use ShoeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\User::create([
            'name' => 'Aministrator',
            'email' => 'admin@a.com',
            'password' => bcrypt('1234')
        ]);
        // $this->call(BrandSeeder::class);
        // $this->call(TypeSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(ShoeSeeder::class);
    }
}
