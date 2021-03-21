<?php

use Illuminate\Database\Seeder;

use App\Models\AwardLevel;

class AwardLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AwardLevel::truncate();
      DB::table('award_levels')->insert([
        ['label' => "国家级"],
        ['label' => "省级"],
        ['label' => "市级"],
        ['label' => "区(县)级"],
        ['label' => "校级"],
      ]);
    }
}
