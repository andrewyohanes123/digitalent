<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Brand::insert([
            ['name' => 'Adidas'],
            ['name' => 'Reebok'],
            ['name' => 'Puma'],
            ['name' => 'Vans'],
        ]);
    }
}
