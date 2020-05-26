<?php

use Illuminate\Database\Seeder;

class AwardLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('award_levels')->insert([
        ['label' => "国家级"],
        ['label' => "省级"],
        ['label' => "市级"],
        ['label' => "区级"],
        ['label' => "校级"],
      ]);
    }
}
