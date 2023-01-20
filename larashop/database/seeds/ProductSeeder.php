<?php

use Illuminate\Database\Seeder;
use App\Color;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'color' => 'black',
        ]);
        DB::table('colors')->insert([
            'color' => 'white',
        ]);
        DB::table('colors')->insert([
            'color' => 'red',
        ]);
        DB::table('colors')->insert([
            'color' => 'blue',
        ]);
        DB::table('colors')->insert([
            'color' => 'gray',
        ]);

        DB::table('products')->insert([
            'id' => 1,
            'name' => 'Christmas',
            'price' => '28.00',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'id' => 2,
            'name' => 'COCO Chanel',
            'price' => '36.00',
            'category_id' => '2',
        ]);
        DB::table('products')->insert([
            'id' => 3,
            'name' => 'Blue chanel',
            'price' => '60.00',
            'category_id' => '4',
        ]);
        DB::table('products')->insert([
            'id' => 4,
            'name' => 'Men parfume',
            'price' => '40.00',
            'category_id' => '3',
        ]);
        DB::table('products')->insert([
            'id' => 5,
            'name' => 'Boy perfume',
            'price' => '45.00',
            'category_id' => '3',
        ]);
        DB::table('products')->insert([
            'id' => 6,
            'name' => 'Girl parfume',
            'price' => '35.00',
            'category_id' => '5',
        ]);
        DB::table('products')->insert([
            'id' => 7,
            'name' => 'Girl parfume',
            'price' => '35.00',
            'category_id' => '5',
        ]);
        DB::table('products')->insert([
            'id' => 8,
            'name' => 'Girl parfume',
            'price' => '35.00',
            'category_id' => '5',
        ]);


        foreach (Product::all() as $p) {
            $colors = Color::find([1, 2, 3, 4, 5]);
            $p->colors()->attach($colors);
        }

    }
}
