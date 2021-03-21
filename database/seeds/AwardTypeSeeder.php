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
        ['label' => "论文撰写"],
        ['label' => "课堂教学"],
        ['label' => "教学视频"],
        ['label' => "摄影作品"],
        ['label' => "微课作品"],
        ['label' => "课件作品"],
        ['label' => "技能展示"],
        ['label' => "综合评定"],
        ['label' => "其他"],
      ]);
    }
}