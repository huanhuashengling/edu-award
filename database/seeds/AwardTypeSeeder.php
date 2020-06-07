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
        ['label' => "教学论文"],
        ['label' => "教学视频"],
        ['label' => "课堂教学"],
        ['label' => "说课"],
        ['label' => "评课"],
        ['label' => "技能展示"],
        ['label' => "摄影作品"],
        ['label' => "微课制作"],
        ['label' => "课件制作"],
        ['label' => "优秀指导教师"],
        ['label' => "教研活动积极分子"],
        ['label' => "优秀教师"],
      ]);
    }
}