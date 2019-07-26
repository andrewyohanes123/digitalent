<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::insert([
            ['name' => 'Casual'],
            ['name' => 'Sport'],
            ['name' => 'Classic'],
            ['name' => 'Pantofel'],
            ['name' => 'Simple'],
            ['name' => 'Sliper'],
        ]);
    }
}
