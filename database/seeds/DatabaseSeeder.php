<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('admin')->insert([
            'name' => 'admin',
            'role_id'=>'1',
            'email' =>' hackingll98@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin12345'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
