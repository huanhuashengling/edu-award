<?php

use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('awards')->insert([
        'awardee' => "wj",
        'award_types_id' => '1',
        'title' => '',
        'img_url' => "1588686399.jpeg",
        'award_years' => "2012",
        'award_level' => "一等奖",
        'award_date' => "201209",
        'is_visioned' => "false",
        'vision_txt' => "",
      ]);

      DB::table('awards')->insert([
        'awardee' => "wj",
        'award_types_id' => '1',
        'title' => '',
        'img_url' => "1589495785.jpeg",
        'award_years' => "2012",
        'award_level' => "一等奖",
        'award_date' => "201209",
        'is_visioned' => "false",
        'vision_txt' => "",
      ]);
    }
}
