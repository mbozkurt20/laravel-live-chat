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
       $a = [
           [ 'name' => 'mehmet',
               'avatar' => 'https://via.placeholder.com/150',
               'email' => 'mehmet@gmail.com',
               'email_verified_at' => now(),
               'password' => \Illuminate\Support\Facades\Hash::make('12345678'), // 123456
                   'remember_token' => 1232131123,],
           [ 'name' => 'cem',
               'avatar' => 'https://via.placeholder.com/150',
               'email' => 'cem@gmail.com',
               'email_verified_at' => now(),
               'password' => \Illuminate\Support\Facades\Hash::make('12345678'), // 123456
               'remember_token' => 12312323112,],
           [ 'name' => 'gizem',
               'avatar' => 'https://via.placeholder.com/150',
               'email' => 'gizem@gmail.com',
               'email_verified_at' => now(),
               'password' => \Illuminate\Support\Facades\Hash::make('12345678'), // 123456
               'remember_token' => 12312323112,],
           [ 'name' => 'merve',
               'avatar' => 'https://via.placeholder.com/150',
               'email' => 'merve@gmail.com',
               'email_verified_at' => now(),
               'password' => \Illuminate\Support\Facades\Hash::make('12345678'), // 123456
               'remember_token' => 12312323112,],
       ];
       foreach ($a as $b){
           \App\User::create($b);
       }
    }
}
