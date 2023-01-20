<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'id' => 9,
            'url' => 'upload/chanel.jpg',
            'product_id' => 1,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 10,
            'url' => 'upload/perfume.jpg',
            'product_id' => 2,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 11,
            'url' => 'upload/Christmas.jpg',
            'product_id' => 3,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 12,
            'url' => 'upload/girl.jpg',
            'product_id' => 4,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 13,
            'url' => 'upload/boy.jpg',
            'product_id' => 5,
            'productMainImage' => 1,
        ]);

        DB::table('images')->insert([
            'id' => 14,
            'url' => 'upload/boy2.jpg',
            'product_id' => 6,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 15,
            'url' => 'upload/price.jpg',
            'product_id' => 7,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 16,
            'url' => 'upload/price1.jpg',
            'product_id' => 8,
            'productMainImage' => 1,
        ]);
        DB::table('images')->insert([
            'id' => 17,
            'url' => 'upload/price1.jpg',
            'product_id' => 8,
            'productMainImage' => 1,
        ]);


    }
}
