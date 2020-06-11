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
        'img_url' => "5edc80d468872.JPG",
        'thumb_url' => "thumb_5edc80d468872.JPG",
        'award_year' => "",
        'award_levels_id' => "",
        'award_ranks_id' => "",
        'award_date' => "",
        'is_visioned' => "false",
        'vision_txt' => "",
        'unique_id' => "5edc80d468872",
        'is_public' => "false",
      ]);

      DB::table('awards')->insert([
        'awardee' => "",
        'award_types_id' => '',
        'title' => '',
        'img_url' => "5edc80e33ddda.jpeg",
        'thumb_url' => "thumb_5edc80e33ddda.jpeg",
        'award_year' => "",
        'award_levels_id' => "",
        'award_ranks_id' => "",
        'award_date' => "",
        'is_visioned' => "false",
        'vision_txt' => "",
        'unique_id' => "5edc80e33ddda",
        'is_public' => "false",
      ]);
    }
}
