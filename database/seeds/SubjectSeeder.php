<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('subjects')->insert([
        ['label' => "语文"],
        ['label' => "数学"],
        ['label' => "英语"],
        ['label' => "科学"],
        ['label' => "音乐"],
        ['label' => "体育"],
        ['label' => "美术"],
        ['label' => "信息技术"],
        ['label' => "综合实践"],
        ['label' => "道德与法治"],
        ['label' => "生命与健康"],
        ['label' => "心理"],
        ['label' => "少先队活动"],
        ['label' => "劳动教育"],
        ['label' => "书法"],
        ['label' => "其他"],
      ]);
    }
}
