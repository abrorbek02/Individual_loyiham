<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'firstName' => 'Abrorbek',
            'lastName' => 'Boltayev',
            'DateOfBirth' => '2002-09-27',
            'phone' => '998930900927',
            'username' => 'abrorbek',
            'email' => 'abrorbek94220@gmail.com',
            'password' => Hash::make('aaaaaaaa'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'firstName' => 'Diyorbek',
            'lastName' => 'Boltayev',
            'DateOfBirth' => '2003-09-17',
            'phone' => '998883621700',
            'username' => 'diyorbek',
            'email' => 'diyorbek1700@gmail.com',
            'password' => Hash::make('aaaaaaaa'),
            'role' => 'manager',
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'firstName' => 'Ozodbek',
            'lastName' => 'Ozodov',
            'DateOfBirth' => '2002-09-28',
            'phone' => '+998912770919',
            'username' => 'ozodbek',
            'email' => 'ozodov002@gmail.com',
            'password' => Hash::make('aaaaaaaa'),
            'role' => 'client',
        ]);
    }
}
