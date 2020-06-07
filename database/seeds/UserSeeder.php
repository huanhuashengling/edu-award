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
      DB::table('users')->insert([
        'name' => "文杰",
        'email' => 'shengling_2005@163.com',
        'phone_number' => '18073100720',
        'password' => Hash::make('password'),
      ]);
    }
}
