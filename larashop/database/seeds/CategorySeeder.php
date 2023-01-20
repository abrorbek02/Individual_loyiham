<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Yangi yil uchun',
            'order' => 1
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Ayollar uchun',
            'order' => 2

        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Erkaklar uchun',
            'order' => 3

        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Takliflar',
            'order' => 4
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => "Sovg'alar",
            'order' => 5
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'Brendlar',
            'order' => 6
        ]);
        DB::table('categories')->insert([
            'id' => 7,
            'name' => 'Yuz va tana',
            'order' => 7
        ]);


    }
}
