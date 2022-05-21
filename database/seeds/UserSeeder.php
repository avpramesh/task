<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = ['male','female'];
        for($i=0; $i<5; $i++){
            DB::table('users')->insert([
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'annual_income' => rand(10000,1000000),
                'dob' => '2000=02-02',
                'gender' => Arr::random($gender),
            ]);
        }
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Test',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'annual_income' => rand(10000,1000000),
            'dob' => '2000=02-02',
            'gender' => Arr::random($gender),
        ]);
    }
}
