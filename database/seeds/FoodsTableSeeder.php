<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Food::create([
            'name' => 'Pepperoni Pizza',
            'price' => 11 * 100,
        ]);

        \App\Food::create([
            'name' => 'Sausage Roll',
            'price' => 1 * 100,
        ]);

        \App\Food::create([
            'name' => 'Cake',
            'price' => 3 * 100,
        ]);

    }
}
