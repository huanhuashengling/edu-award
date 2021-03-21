<?php

use Illuminate\Database\Seeder;

use App\Models\AwardRank;

class AwardRankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AwardRank::truncate();
      DB::table('award_ranks')->insert([
        ['label' => "特等奖"],
        ['label' => "一等奖"],
        ['label' => "二等奖"],
        ['label' => "三等奖"],
        ['label' => "优胜奖"],
      ]);
    }
}
