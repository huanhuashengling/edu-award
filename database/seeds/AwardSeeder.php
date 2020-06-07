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
        'awardee' => "",
        'award_types_id' => '',
        'title' => '',
        'img_url' => "1588686399.jpeg",
        'award_year' => "",
        'award_levels_id' => "",
        'award_ranks_id' => "",
        'award_date' => "",
        'is_visioned' => "false",
        'vision_txt' => "",
        'unique_id' => "1588686399",
        'is_public' => "false",
      ]);

      DB::table('awards')->insert([
        'awardee' => "",
        'award_types_id' => '',
        'title' => '',
        'img_url' => "1589495785.jpeg",
        'award_year' => "",
        'award_levels_id' => "",
        'award_ranks_id' => "",
        'award_date' => "",
        'is_visioned' => "false",
        'vision_txt' => "",
        'unique_id' => "1589495785",
        'is_public' => "false",
      ]);
    }
}
