<?php

use Illuminate\Database\Seeder;

class AwardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('award_types')->insert([
        'label' => "论文撰写"
      ]);
      DB::table('award_types')->insert([
        'label' => "课堂教学"
      ]);
    }
}