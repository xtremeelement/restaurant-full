<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'fname'=> 'John',
            'lname'=> 'Doe',
            'email'=> 'test@test.com',
            'password'=> Hash::make('12341234'),
        ]);
        DB::table('users')->insert([
            'fname'=> 'Jane',
            'lname'=> 'Doe',
            'email'=> 'test2@test.com',
            'password'=> Hash::make('12341234'),
        ]);
    }
}
